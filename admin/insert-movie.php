<?php
require_once 'config/db_connection.php';

if (isset($_POST['submit'])) {

    // Get form data
    $tmdbID = $_POST['tmdb_id'];
    $title = $_POST['title'];
    $titleSlug = $_POST['title_slug'];
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    $poster = $_POST['poster_path'];
    $backdrop = $_POST['backdrop_path'];
    $trailer = $_POST['trailer'];
    $releaseDate = $_POST['release_date'];
    $runtime = $_POST['runtime'];
    $voteAverage = $_POST['vote_average'];
    $country = $_POST['country_iso_3166_1'];
    $genreID = $_POST['genre'];
    $videoPath = $_POST['video_path'];
    $subtitlePath = $_POST['subtitle_path'];

    $sqlCommand = "INSERT INTO movies (tmdb_id, title, title_slug, overview, poster_path, backdrop_path, trailer, release_date, runtime, vote_average, country_iso_3166_1, genre_id, video_path, subtitle_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?);";
    $stmt = $conn->prepare($sqlCommand);
    $stmt->bind_param("ssssssssssssss", $tmdbID, $title, $titleSlug, $overview, $poster, $backdrop, $trailer, $releaseDate, $runtime, $voteAverage, $country, $genreID, $videoPath, $subtitlePath);

    header('Content-Type: application/json');

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Movie added successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add movie']);
    }

    $stmt->close();
    $conn->close();
}
