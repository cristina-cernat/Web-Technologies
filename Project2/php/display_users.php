<?php
session_start();

function display_info(){
    require_once "db_con.php";
    $db=DB_conexion();
    $res = mysqli_query($db, "SELECT * FROM users ORDER BY username");
    echo '<div class="completediscography">';
    if(mysqli_num_rows($res) > 0 ){
        while ($row =mysqli_fetch_array($res)){
            echo <<<HTML
                <h1>$row[discname] $fila[year]</h1><br>

HTML;

}