<?php
class Conexion {
 public static function conectar() {
 $host = 'localhost'; 
 $db = 'gestion_academica'; 
 $user = 'root'; 
 $pass = ''; 
 
 try {
 $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 return $pdo;
 } catch (PDOException $e) {
 die("Error de conexión: " . $e->getMessage());
 }
 }
}
?>