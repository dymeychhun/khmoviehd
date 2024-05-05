<?php require_once 'config/db_connection.php'; ?>
<?php require_once 'components/head.php'; ?>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once 'components/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once 'components/topbar.php'; ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container">
                    <h1 class="h3 mb-4 text-gray-800">Add Movie Detail</h1>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-md-12 mb-3 text-center">
                                    <div id="poster-frame"></div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div id="video-frame"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="tmdb_id">TMDB id</label>
                                            <input type="text" class="form-control" id="tmdb_id" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="title_slug">Title slug</label>
                                            <input type="text" class="form-control" id="title_slug" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="overview">Overview</label>
                                            <textarea class="form-control" id="overview" rows="3"
                                                autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="poster">Poster</label>
                                            <input type="text" class="form-control" id="poster" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="backdrop">Backdrop</label>
                                            <input type="text" class="form-control" id="backdrop" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="trailer">Trailer</label>
                                            <input type="text" class="form-control" id="trailer" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="release_date">Released Data</label>
                                            <input type="text" class="form-control" id="release_date"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="runtime">Runtime</label>
                                            <input type="text" class="form-control" id="runtime" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="vote_average">Vote</label>
                                            <input type="text" class="form-control" id="vote_average"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-control" id="country">
                                                <option value="">Select Country</option>
                                                <?php
                                                $sql = "SELECT * FROM countries";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . $row['iso_3166_1'] . '">' . $row['english_name'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="video_path">Genre</label>
                                            <textarea class="form-control" id="genre" rows="3"
                                                autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="video_path">Video Path</label>
                                            <textarea class="form-control" id="video_path" rows="3"
                                                autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="subtitle_path">Subtitle Path</label>
                                            <textarea class="form-control" id="subtitle_path" rows="3"
                                                autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-3">
                                        <button type="button" class="btn btn-primary" id="submitButton">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require_once 'components/footer.php'; ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<?php require_once 'components/logout-modal.php'; ?>

<?php require_once 'components/script.php'; ?>
<script src="js/movie-detail.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/insert-movie.js"></script>
</body>

</html>
