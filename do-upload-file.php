<?php
if (isset($_FILES['image']) && $_FILES['image']['name']) {
    move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/image.png');
}