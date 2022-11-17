<?php
require_once 'DB.php';

class  OrderDal extends DB
{
    public function insert($receiverData, $cart)
    {
        try {
            $this->pdo->beginTransaction();
            $prp = $this->pdo->prepare('INSERT INTO orders 
            (name, phone, address, note, total,sub_total,tax,date_created, status,user_id)
            VALUES (:name, :phone, :address, :note, :total, :sub_total,:tax,:date_created, :status,:user_id)');
            $subTotal = 0;
            foreach ($cart as $item) {
                $subTotal += $item['product']->price * $item['quantity'];
            }
            $tax = $subTotal * 0.1;
            $total = $subTotal + $tax;

            $prp->bindParam(':name', $receiverData['name']);
            $prp->bindParam(':phone', $receiverData['phone']);
            $prp->bindParam(':address', $receiverData['address']);
            $prp->bindParam(':note', $receiverData['note']);
            $prp->bindParam(':sub_total', $subTotal);
            $prp->bindParam(':tax', $tax);
            $prp->bindParam(':total', $total);
            $prp->bindParam(':date_created', date('Y-m-d H:i:s'));
            $prp->bindParam(':user_id', $_SESSION['user']->id);
            $prp->bindValue(':status', 1);//1 pending, 2- shipping, 3- delivered, 4 - cancel
            $prp->execute();
            $lastInertId = $this->pdo->lastInsertId(); //lấy về id của đơn hàng vừa thêm
            foreach ($cart as $item) {
                $prp = $this->pdo->prepare('INSERT INTO orders_detail(order_id, product_id, quantity, price,name) VALUES (:order_id, :product_id, :quantity, :price,:name)');
                $prp->bindParam(':order_id', $lastInertId);
                $prp->bindParam(':product_id', $item['product']->id);
                $prp->bindParam(':quantity', $item['quantity']);
                $prp->bindParam(':price', $item['product']->price);
                $prp->bindParam(':name', $item['product']->name);
                $prp->execute();
            }
            $this->pdo->commit();
            return true;
        } catch (Exception $exception) {
            $this->pdo->rollBack();
            echo $exception->getMessage();
            return false;
        }
    }
}