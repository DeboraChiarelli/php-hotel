<!-- Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G -->
<!-- Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio. -->


<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];


    foreach ($hotels as $hotel) {
        echo "<h2>{$hotel['name']}</h2>";
        echo "<p>Description: {$hotel['description']}</p>";
        echo "<p>Parking: " . ($hotel['parking'] ? 'Available' : 'Not available') . "</p>";
        echo "<p>Vote: {$hotel['vote']}</p>";
        echo "<p>Distance to Center: {$hotel['distance_to_center']} km</p>";
        echo "<hr>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<div class="container mt-5">
    <h1>Hotel Informations</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance to Center (km)</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($hotels as $hotel) {
                    echo "<tr>";
                    echo "<td>{$hotel['name']}</td>";
                    echo "<td>{$hotel['description']}</td>";
                    echo "<td>" . ($hotel['parking'] ? 'Available' : 'Not available') . "</td>";
                    echo "<td>{$hotel['vote']}</td>";
                    echo "<td>{$hotel['distance_to_center']}</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>




</body>
</html>