<?php
require_once('config/db_config.php');
require_once('config/db_connection.php');

// if (!isset($_POST['search'])) {
//     $data = [
//         'meta' => [
//             'code' => 404,
//             'status' => 'error',
//             'message' => 'The search is not set.',
//         ],
//         'data' => [],
//     ];
//     echo json_encode($data);
//     exit;
// }

$keyword = mysqli_real_escape_string($conn, $_POST['keyword']);

$sqlSelectMovie = "SELECT * FROM movies WHERE title_slug LIKE '%" . $keyword . "%' LIMIT 16";
$querySqlSelectMovie = $conn->query($sqlSelectMovie);

if ($querySqlSelectMovie->num_rows == 0) {
    $data = [
        'meta' => [
            'code' => 404,
            'status' => 'error',
            'message' => 'Movie not found',
        ],
        'data' => [],
    ];
    echo json_encode($data);
    exit;
}

$querySqlSelectResult = $querySqlSelectMovie->fetch_all(MYSQLI_ASSOC);

$data = [
    'meta' => [
        'code' => 200,
        'status' => 'success',
        'message' => 'Movie found successfully',
    ],
    'data' => $querySqlSelectResult,
];

echo json_encode($data);
$conn->close();
