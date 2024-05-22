<?php require_once 'include/head.php'; ?>
<div id="app">
    <div id="sidebar_menu_bg"></div>
    <!--sidebar menu-->
    <?php require_once 'include/sidebar-menu.php'; ?>
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <div id="mobile_menu"><i class="fa fa-bars"></i></div>
                <?php require_once 'include/menu-logo.php'; ?>

                <!--Begin: Menu-->
                <?php require_once 'include/header-menu.php'; ?>
                <!--End: Menu-->
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
            </div>
        </div>

        <!--Begin: Main-->
        <div id="main-wrapper">
            <div class="container">
                <!--Begin: Section film list-->
                <section class="block_area block_area_category">
                    <div class="block_area-header">
                        <div class="float-left bah-heading mr-4">
                            <h2 class="cat-heading">Popular Movies</h2>
                        </div>
                        <!-- <div class="float-right bah-filter">
                            <a data-toggle="collapse" href="#cate-filter" role="button" aria-expanded="false"
                                aria-controls="cate-filter"
                                class="btn btn-sm btn-in-headcat btn-radius btn-light collapsed"><i
                                    class="fa fa-filter mr-2"></i>Filter</a>
                        </div> -->
                        <div class="clearfix"></div>
                    </div>

                    <!-- category filter -->

                    <div class="block_area-content block_area-list film_list film_list-grid">
                        <div class="film_list-wrap" id="displayAllMovie">

                        </div>
                    </div>
                    <div class="mw-buttons text-center my-5">
                        <button type="button" class="btn btn-lg btn-radius btn-primary" id="loadMore">Load More</button>
                        <!-- <i class="fas fa-arrow-circle-right ml-2"></i> -->
                    </div>
                </section>
                <!--End: Section film list-->
            </div>
        </div>
        <!--End: Main-->

        <?php require_once 'include/footer.php'; ?>

    </div>

</div>
<?php require_once 'include/script.php'; ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script>
    var currPage = '';
</script>
<script type="text/javascript" src="js/app.min.js"></script>
<script type="text/javascript" src="js/display-all-movie.js"></script>

</body>

</html>
