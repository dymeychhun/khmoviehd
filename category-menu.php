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
while ($queryResult = $querySelectMovie->fetch_assoc()) {
    $genereArray = explode(",", $queryResult['genre_id']);
    $genre = array_merge($genre, $genereArray);
}
$genre = array_unique($genre);

$newArray = [];
foreach ($genre as $i => $val) {
    $sqlSelectGenre = "SELECT * FROM genres WHERE id=" . $val;
    $querySelectGenre = $conn->query($sqlSelectGenre);
    $querySelectGenreResult = $querySelectGenre->fetch_assoc();
    $rowGenreSlug = $querySelectGenreResult['slug'];
    $newArray[$val] = $rowGenreSlug;
    // $genre[$i] = $val;
}
print_r($newArray);
exit;
echo json_encode(['status' => 'success', 'genre_id' => $genre]);
$conn->close();
