<?php
chdir($_SERVER["DOCUMENT_ROOT"]);
$names = file_get_contents('./assets/data/names.json');
$names = json_decode($names);

$result = array();
foreach (array(1, 2, 3) as $i) {
    $result[] = ["name" => $names[rand(0, count($names) - 1)] -> name, "price" => rand(10, 2000), "image" => rand(1, 6)];
}

echo json_encode($result);