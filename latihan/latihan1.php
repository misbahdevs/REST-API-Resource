<?php



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