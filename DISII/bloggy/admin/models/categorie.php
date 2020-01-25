<?php

function listing() {
    $db = new PDO('mysql:host=localhost;dbname=bloggy', 'root', '');
    $sql = 'select *  from categories';
    return $db->query($sql, PDO::FETCH_ASSOC);
}
