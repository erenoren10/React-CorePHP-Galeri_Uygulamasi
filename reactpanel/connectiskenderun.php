<?php

header("Access-Control-Allow-Origin: *");

try {
    $db = new PDO('mysql:host=localhost;dbname=gallery_pinhole;charset=utf8', "root", "");

    // Verileri çekme sorgusu
    $query = "SELECT * FROM resimler WHERE kategori=12"; // resimler tablosuna göre güncelleyin
    $stmt = $db->prepare($query);
    $stmt->execute();
    $resimler = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // JSON formatında verileri döndürme
    header('Content-Type: application/json');
    echo json_encode($resimler);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>