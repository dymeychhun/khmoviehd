<?php require_once 'components/head.php'; ?>
<div id="app">
    <div id="sidebar_menu_bg"></div>
    <!--sidebar menu-->
    <?php require_once 'components/sidebar-menu.php'; ?>
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <div id="mobile_menu"><i class="fa fa-bars"></i></div>
                <a href="/" id="logo"><img src="images/ddb2bac796109ce3c61b955f4854ef9d.png" alt="Logo">

                </a>
                <!--Begin: Menu-->
                <?php require_once 'components/header-menu.php'; ?>
                <!--End: Menu-->
                <div id="header_right">
                    <div id="search">
                        <div class="search-content">
                            <form @submit="search">
                                <div class="search-icon"><i class="fa fa-search"></i></div>
                                <input v-model="keyword" type="text" class="form-control search-input"
                                    autocomplete="off" name="keyword" placeholder="Enter keywords...">
                            </form>
                            <div class="nav search-result-pop search-suggest"></div>
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

                    <div class="pre-pagination mt-5 mb-5">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg justify-content-center">
                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a title="Page 2" class="page-link" href="/movie?page=2">2</a>
                                </li>
                                <li class="page-item"><a title="Page 3" class="page-link" href="/movie?page=3">3</a>
                                </li>
                                <li class="page-item"><a title="Next" class="page-link" href="/movie?page=2">→</a>
                                </li>
                                <li class="page-item"><a title="Last" class="page-link" href="/movie?page=1303">»</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="block_area-content block_area-list film_list film_list-grid">
                        <div class="film_list-wrap">

                            <div class="flw-item">
                                <div class="film-poster">

                                    <div class="pick film-poster-quality">HD</div>

                                    <img data-src="https://img.solarmovie.pe/xxrz/250x400/338/52/7b/527bdc2908423dffab686f4838487577/527bdc2908423dffab686f4838487577.jpg"
                                        class="film-poster-img lazyload" title="Don Juan from Zhashkiv"
                                        alt="Don Juan from Zhashkiv">
                                    <a href="/movie.php/watch-don-juan-from-zhashkiv-free-108457"
                                        class="film-poster-ahref flw-item-tip" title="Don Juan from Zhashkiv"><i
                                            class="fa fa-play"></i></a>
                                </div>
                                <div class="film-detail film-detail-fix">

                                    <h2 class="film-name"><a href="/movie/watch-don-juan-from-zhashkiv-free-108457"
                                            title="Don Juan from Zhashkiv">Don Juan from Zhashkiv</a>
                                    </h2>

                                    <div class="fd-infor">


                                        <span class="fdi-item">2024</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">90m</span>


                                        <span class="float-right fdi-type">Movie</span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="pre-pagination mt-5 mb-5">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg justify-content-center">
                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a title="Page 2" class="page-link" href="/movie?page=2">2</a>
                                </li>
                                <li class="page-item"><a title="Page 3" class="page-link" href="/movie?page=3">3</a>
                                </li>
                                <li class="page-item"><a title="Next" class="page-link" href="/movie?page=2">→</a>
                                </li>
                                <li class="page-item"><a title="Last" class="page-link" href="/movie?page=1303">»</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>
                <!--End: Section film list-->
            </div>
        </div>
        <!--End: Main-->

        <?php require_once 'components/footer.php'; ?>

    </div>

</div>
<?php require_once 'components/script.php'; ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script>
var currPage = '';
</script>
<script type="text/javascript" src="js/app.min.js"></script>

</body>

</html>