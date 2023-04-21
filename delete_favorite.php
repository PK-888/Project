<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}

if (!isset($_GET['id'])) {
  header('Location: index.php');
  exit;
}

require_once 'db.php';

$user_id = $_SESSION['user_id'];
$favorite_id = $_GET['id'];

$stmt = $db->prepare('DELETE FROM favorites WHERE id = ?');
$stmt->bind_param('i', $favorite_id);
$stmt->execute();
$stmt->close();

header('Location: favorites.php');
exit;
