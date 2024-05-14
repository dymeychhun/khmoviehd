<?php
require_once 'config/db_config.php';
require_once 'config/db_connection.php';

if (isset($_POST['submit'])) {

    $genreID = $_POST['genre_id'];
    $start = $_POST['start'];
    $limit = $_POST['limit'];

    $sqlSelectMovie = "SELECT * FROM movies WHERE genre_id LIKE '%$genreID%' ORDER BY release_date DESC LIMIT $start, $limit";
    $querySelectMovie = $conn->query($sqlSelectMovie);

    header('Content-Type: application/json');

    if ($querySelectMovie->num_rows == 0) {
        $data = [
            'meta' => [
                'code' => 404,
                'status' => 'error',
                'message' => 'No movie found',
            ],
            'data' => [],
        ];
        echo json_encode($data);
        exit;
    }

    $querySelectMovieResult = $querySelectMovie->fetch_all(MYSQLI_ASSOC);

    $genre = [];
    foreach ($querySelectMovieResult as $i => $val) {

        $genreId = explode(',', $val['genre_id']);
        $genre = array_merge($genre, $genreId);
    }

    $genre = array_unique($genre);
    $genreName = [];
    foreach ($genre as $i => $value) {

        if ($genreID == $value) {
            $sqlSelectGenre = "SELECT `name` FROM genres WHERE id = $value";
            $querySelectGenreResult = $conn->query($sqlSelectGenre);
            $genreName['name'] = $querySelectGenreResult->fetch_assoc()['name'];
            break;
        }
    }

    $data = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => 'Movie found successfully',
        ],
        'data' => $querySelectMovieResult,
        'genre' => $genreName
    ];

    echo json_encode($data);
    $conn->close();
}
