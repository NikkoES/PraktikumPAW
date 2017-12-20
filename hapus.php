<?php
    include 'koneksi.php';

    if(isset($_GET["id"])){
        $query = $db->prepare("DELETE FROM mahasiswa WHERE id=:id");
        $query->bindParam(":id", $_GET["id"]);
        $query->execute();
        header("location: index.php");
    }
?>
