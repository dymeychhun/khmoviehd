<?php
require_once 'config/db_config.php';
require_once 'config/db_connection.php';

if (isset($_POST['submit'])) {
    $genreID = $_POST['genre_id'];
    $start = $_POST['start'];
    $limit = $_POST['limit'];

    $sqlSelectMovie = "SELECT * FROM movies WHERE genre_id LIKE '%$genreID%' LIMIT $start, $limit";
    $querySelectMovie = $conn->query($sqlSelectMovie);

    $sqlSelectMovieTotal = "SELECT * FROM movies WHERE genre_id LIKE '%$genreID%'";
    $querySelectMovieTotal = $conn->query($sqlSelectMovieTotal);

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

    $data = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => 'Movie found successfully',
        ],
        'data' => $querySelectMovieResult,
    ];

    echo json_encode($data);
    $conn->close();
}
