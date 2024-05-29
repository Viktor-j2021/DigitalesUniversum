<?php


if (isset($_POST['submit'])) {

    require_once __DIR__ . './../logistik/Databasetabelle.php';

    Databasetabelle::speichert($name, $email, $telefon, $message);
}
