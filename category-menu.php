<?php
require_once 'config/db_config.php';
require_once 'config/db_connection.php';

$sqlSelectMovie = "SELECT genre_id, country_iso_3166_1 FROM movies";
$querySelectMovie = $conn->query($sqlSelectMovie);

header('Content-Type: application/json');

if ($querySelectMovie->num_rows == 0) {
    echo json_encode(['status' => 'error', 'message' => 'No movie found']);
    exit;
}

$genre = [];
$country = [];
while ($queryResult = $querySelectMovie->fetch_assoc()) {
    $genereArray = explode(",", $queryResult['genre_id']);
    $genre = array_merge($genre, $genereArray);
    $country[] = $queryResult['country_iso_3166_1'];
}
$genre = array_unique($genre);
$country = array_unique($country);

$newGenre = [];
foreach ($genre as $i => $val) {
    $sqlSelectGenre = "SELECT * FROM genres WHERE id=" . $val;
    $querySelectGenre = $conn->query($sqlSelectGenre);
    $querySelectGenreResult = $querySelectGenre->fetch_assoc();
    $rowGenreSlug = $querySelectGenreResult['name'];
    $newGenre[$val] = $rowGenreSlug;
}

$newCountry = [];
foreach ($country as $i => $val) {
    $sqlSelectCountry = "SELECT * FROM countries WHERE iso_3166_1='$val'";
    $querySelectCountry = $conn->query($sqlSelectCountry);
    $querySelectCountryResult = $querySelectCountry->fetch_assoc();
    $rowCountryName = $querySelectCountryResult['english_name'];
    $newCountry[$val] = $rowCountryName;
}

echo json_encode(['status' => 'success', 'genre' => $newGenre, 'country' => $newCountry]);
$conn->close();
