<?php

// cara mendapatkan data dari json dengan php
// $data = file_get_contents('data.json', true);
// $result = json_decode($data, true);
// print $result;




// mengubah array menjadi json dengan php
// $mahasiswa = [
//     [
//         "nama" => "misbah",
//         "npm" => 21552011178,
//         "email" => "misbahx.id@gmail.com"
//     ],
//     [
//         "nama" => "jujun juneadi",
//         "npm" => 21552011211,
//         "email" => "jujun@gmail.com"
//     ]
// ];

// $json = json_encode($mahasiswa);
// echo $json;



// mengambil nilai dari database dan mengubahnya menjadi json

// handler
$dbh = new PDO('mysql:host=localhost;dbname=mahasiswa', 'root', '@Admin123');

$db = $dbh->prepare('SELECT * FROM user');
$db->execute();

$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

var_dump($mahasiswa);

$data = json_encode($mahasiswa);

echo $data;



$dbh = new PDO('mysql:host=localhost;dbname=mahasiswa', 'root', '@Admin123');
$db = $dbh->prepare('SELECT * FROM user');
$db->execute();

$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);


$mahasiswa =  [
    [
        "nama" => "misbah",
        "npm" => 21552011178,
        "email" => "misbahx.id@gmail.com"
    ],
    [
        "nama" => "udin",
        "npm" => 21552011178,
        "email" => "udin@gmail.com"
    ],
    [
        "nama" => "jujun",
        "npm" => 21552011178,
        "email" => "jujun@gmail.com"
    ]
];



$data2 = json_encode($mahasiswa);

echo "<script>console.log($data2);</script>";



?>