<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Learn Php Vanilla</title>
</head>
<body background="./medias/netflix.jpg" text="#000000">
    <h1><center>MY FAVORITE TV-SERIES</center></h1>

    <section class="row">
<?php

include "./database/openDatabase.php";

$sql = "SELECT * FROM series ORDER BY series.id ASC";

$query = $conexion->prepare($sql);
$query ->execute();
$series = $query ->fetchAll(PDO::FETCH_OBJ);

if ($query -> rowCount() > 0) {
    # code...
    foreach ($series as $serie) {
        # code...
        echo <<< TAG
            <article class="col-sm d-flex justify-content-around">
                <div class="card text-center" style="width: 15rem">
                    <img class="card-img-top" src="{$serie -> img}">

                    <div class="card-body">
                        <h4 class="card-title">{$serie -> id}</h4>
                        <h4 class="card-title">{$serie -> title}</h4>
                        <h6 class="card-text">{$serie -> director}</h6>
                        <h6 class="card-text">{$serie -> type}</h6>
                        <p class="card-text">{$serie -> resume}</p>
                    </div>
                </div>
            </article>    
        TAG;
    }
}
include "./database/closeDatabase.php";