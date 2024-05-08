<?php
require_once 'config/db_config.php';
require_once 'config/db_connection.php';

if (isset($_POST['submit'])) {
    $countryISO = $_POST['country_iso'];
    $offset = $_POST['offset'];
    $limit = $_POST['limit'];

    $sqlSelectMovie = "SELECT * FROM movies WHERE country_iso_3166_1 = '$countryISO' LIMIT $offset, $limit";
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
