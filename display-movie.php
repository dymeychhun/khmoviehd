<?php
require_once 'config/db_config.php';
require_once 'config/db_connection.php';

$sqlSelectMovie = "SELECT * FROM `movies` WHERE vote_average >= 6 ORDER BY vote_average DESC LIMIT 24";
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
