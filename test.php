<?php
include 'header.php';
$as = mysqli_query($conn, "SELECT * FROM commitees WHERE id >= 413 ORDER BY id DESC");
while($a = mysqli_fetch_assoc($as)){
    $id = $a['id'];
    $sql = "UPDATE commitees SET id = '".($id-402)."' WHERE id = $id LIMIT 1";
    mysqli_query($conn, $sql);
}
?>