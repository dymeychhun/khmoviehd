<?php
require_once 'config/db_config.php';
require_once 'config/db_connection.php';

$title = $_POST['title'];

$sqlSelectMovies = "SELECT * FROM movies AS a
LEFT JOIN countries AS b ON a.country_iso_3166_1 = b.iso_3166_1 
WHERE title_slug LIKE" . "'%" . $title . "'";

$querySelectMovies = $conn->query($sqlSelectMovies);

header('Content-Type: application/json');

if ($querySelectMovies->num_rows == 0) {
    echo json_encode(['status' => 'error', 'message' => 'No movie found']);
    exit;
}

$querySelectResult = $querySelectMovies->fetch_assoc();
$rowGenreID = $querySelectResult['genre_id'];
$genreArray = explode(',', $rowGenreID);

$genre = [];
foreach ($genreArray as $key => $value) {
    $sqlSelectGenre = "SELECT * FROM genres WHERE id=" . $value;
    $querySelectGenre = $conn->query($sqlSelectGenre);
    $querySelectGenreResult = $querySelectGenre->fetch_assoc();
    $rowGenreID = $querySelectGenreResult['id'];
    $rowGenreName = $querySelectGenreResult['name'];
    $genre[] = ['id' => $rowGenreID, 'name' => $rowGenreName];
}

$querySelectResult['genre_id'] = $genre;

echo json_encode(['status' => 'success', 'data' => $querySelectResult]);

$conn->close();
