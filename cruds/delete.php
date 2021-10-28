<?php
    require_once "database.php";

    $id = $_POST['id'] ?? null;
    if (!$id) {
        header('Location: index2.php');
        exit;
    }

    $stmt = $pdo->prepare('DELETE FROM products WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    header('Location: index2.php');