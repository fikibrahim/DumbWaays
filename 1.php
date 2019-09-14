<?

$data = file_get_contents('1.json');
$profil = json_encode($data, true);
$results = json_decode($profil, true);

var_dump($profil);
echo $profil[0]["list_school"]["tahun"];
