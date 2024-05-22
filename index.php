<?php require_once 'include/head.php'; ?>
<!-- body part -->
<div id="app">
    <div id="sidebar_menu_bg"></div>
    <?php require_once 'include/sidebar-menu.php'; ?>

    <div id="wrapper">
        <div id="header" class="header-home-fix">
            <div class="container">
                <div id="mobile_menu"><i class="fa fa-bars"></i></div>
                <?php require_once 'include/menu-logo.php'; ?>

                <?php require_once 'include/header-menu.php'; ?>

                <div id="header_right">
                    <div id="search">
                        <div class="search-content">
                            <?php include 'include/search-form.php'; ?>
                        </div>
                    </div>
                    <div id="user-slot"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <!--begin: header-home-add-->
                <div class="header-home-add">
                    <div class="search-home-title">
                        <h5 class="sht-heading">Find Movies</h5>
                    </div>
                    <div id="search-home">
                        <div class="search-content">
                            <form action="search" method="GET" id="searchForm">
                                <div class="search-icon"><i class="fa fa-search"></i></div>
                                <input type="text" class="form-control search-input" name="keyword" placeholder="Enter keywords..." autocomplete="off" id="keyword" required>
                                <button type="submit" class="btn btn-primary btn-primary-submit"><i class="fas fa-arrow-right"></i></button>
                            </form>
                            <div class="nav search-result-pop search-suggest"></div>
                        </div>
                    </div>
                </div>
                <!--End: header-home-add-->
            </div>
        </div>

        <div id="main-wrapper">
            <div class="container">
                <div id="vpn-top" style="text-align: center; margin-bottom: 20px; margin-top: 20px; display: none;">
                </div>
                <div id="hgiks-top" style="text-align: center; margin-bottom: 20px; margin-top: 20px; display: none;">
                </div>
                <section class="block_area block_area_home section-id-01">
                    <div class="block_area-header block_area-header-tabs">
                        <div class="float-left bah-heading mr-4">
                            <h2 class="cat-heading">Trending</h2>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-content">
                        <div id="trending-movies" class="tab-pane active">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap" id="trending">

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>

        <!-- footer part -->
        <?php require_once 'include/footer.php'; ?>
    </div>

    <!-- Modal Part -->

    <!-- End Modal Part -->

</div>
<!--script-->
<?php require_once 'include/script.php'; ?>
<script>
    var currPage = 'home';
</script>
<script type="text/javascript" src="js/app.min.js"></script>
<script type="text/javascript" src="js/display-movie.js"></script>
</body>

</html>
