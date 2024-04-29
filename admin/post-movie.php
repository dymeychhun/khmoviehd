<?php require_once 'include/connection.php'; ?>
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
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tmdb_id">TMDB id</label>
                                    <input type="text" class="form-control" id="tmdb_id">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title_slug">Title slug</label>
                                    <input type="text" class="form-control" id="title_slug">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="overview">Overview</label>
                                    <input type="text" class="form-control" id="overview">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="poster">Poster</label>
                                    <input type="text" class="form-control" id="poster">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="backdrop">Backdrop</label>
                                    <input type="text" class="form-control" id="backdrop">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="trailer">Trailer</label>
                                    <input type="text" class="form-control" id="trailer">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="release_date">Released Data</label>
                                    <input type="text" class="form-control" id="release_date">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="runtime">Runtime</label>
                                    <input type="text" class="form-control" id="runtime">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="vote_count">Vote</label>
                                    <input type="text" class="form-control" id="vote_count">
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="video_path">Video Path</label>
                                    <input type="text" class="form-control" id="video_path">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subtitle_path">Subtitle Path</label>
                                    <input type="text" class="form-control" id="subtitle_path">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="video-frame"></div>
                            </div>
                            <div class="col-md-12 my-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
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
<script src="js/api.js"></script>
</body>

</html>