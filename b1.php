<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php
$imagesArr = [
    [
        'path' => 'https://img.meta.com.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg',
        'name' => 'Hình ảnh 1',
    ],
    [
        'path' => 'https://toanthaydinh.com/wp-content/uploads/2020/04/anh-mua-thu-dep.jpg',
        'name' => 'Hình ảnh 2',
    ],
    [
        'path' => 'https://dean2020.edu.vn/wp-content/uploads/2019/03/anh-thien-nhien-dep-3.jpeg',
        'name' => 'Hình ảnh 3',
    ],
    [
        'path' => 'https://anhdep123.com/wp-content/uploads/2020/11/anh-phong-canh-dep-chat-luong-cao-dep.jpg',
        'name' => 'Hình ảnh 4',
    ]
]
?>
<div class="container mx-auto">
    <div class="grid grid-cols-4 gap-4">
        <?php foreach ($imagesArr as $imgItem): ?>
            <div class="flex flex-col justify-center">
                <img style="height:180px;width: 100%" src="<?php echo $imgItem['path']; ?>"/>
                <h4 class="text-center text-xl font-bold"><?php echo $imgItem['name']; ?></h4>
                <!--      <button  class="mx-auto bg-blue-500 rounded-md text-white py-2 px-5"
                        onclick="openModal('<?php /*echo $imgItem['name'] */ ?>','<?php /*echo $imgItem['path']; */ ?>')">View
                </button>-->
                <button class="mx-auto bg-blue-500 rounded-md text-white py-2 px-5"
                        onclick="openModal(event)">View
                </button>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="modal fixed top-0 bottom-0 right-0 left-0 flex items-center justify-center hide">
        <div class="bg-white w-1/2 h-1/2">
            <h4 class="font-bold text-xl">Hình ảnh xấu</h4>
            <img src="https://anhdep123.com/wp-content/uploads/2020/11/anh-phong-canh-dep-chat-luong-cao-dep.jpg"
                 alt="">
            <button onclick="closeModal()" class="mx-auto bg-blue-500 rounded-md text-white py-2 px-5 float-right">
                Close
            </button>
        </div>
    </div>
</div>

</body>

<script>
    function closeModal() {
        document.querySelector('.modal').classList.add('hide');
    }

    /*    function openModal(name, path) {
            document.querySelector('.modal').classList.remove('hide');
            document.querySelector('.modal img').setAttribute('src', path);
            document.querySelector('.modal h4').innerHTML = name;
        }*/

    function openModal(evt) {
        const button = evt.target;
        const h4 = button.previousElementSibling;
        const img = h4.previousElementSibling;

        document.querySelector('.modal').classList.remove('hide');
        document.querySelector('.modal img').setAttribute('src', img.getAttribute('src'));
        document.querySelector('.modal h4').innerHTML = h4.innerText;
    }
</script>

<style>
    .hide {
        display: none;
    }

    .modal {
        background: #302e2ea3;
    }
</style>
</html>