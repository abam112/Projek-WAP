<?php
include '../database/cassyier.php';

$cassyier = new Cassyier();

$action =  $_GET['action'];

if ($action == "store") {
    $cassyier->store(
        $_POST['barang'],
        $_POST['tanggal'],
        $_POST['nominal_harga'],
        $_POST['id']
    );
    return header("location:../");
}
else if ($action == "update") {
    $cassyier->update(
        $_GET['id'],
        $_POST['barang'],
        $_POST['tanggal'],
        $_POST['nominal_harga']
    );
    return header("location:../");
}
else if ($action == "delete") {
    $cassyier->delete(
        $_GET['id']
    );
    return header("location:../");
}

?>