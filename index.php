<?php require_once 'components/head.php'; ?>
<!-- body part -->
<div id="app">
    <div id="sidebar_menu_bg"></div>
    <?php require_once 'components/sidebar-menu.php'; ?>

    <div id="wrapper">
        <div id="header" class="header-home-fix">
            <div class="container">
                <div id="mobile_menu"><i class="fa fa-bars"></i></div>
                <a href="/" id="logo" title="Solarmovie">
                    <img src="images/ddb2bac796109ce3c61b955f4854ef9d.png" alt="Logo">
                </a>

                <?php require_once 'components/header-menu.php'; ?>

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
                <!--begin: header-home-add-->
                <div class="header-home-add">
                    <div class="search-home-title">
                        <h5 class="sht-heading">Find Movies, TV shows and more</h5>
                    </div>
                    <div id="search-home">
                        <div class="search-content">
                            <form @submit="search">
                                <div class="search-icon"><i class="fa fa-search"></i></div>
                                <input v-model="keyword" type="text" class="form-control search-input" name="keyword"
                                    placeholder="Enter keywords..." autocomplete="off">
                                <button class="btn btn-primary btn-primary-submit"><i
                                        class="fas fa-arrow-right"></i></button>
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
                                <div class="film_list-wrap">

                                    <div class="flw-item">
                                        <div class="film-poster">

                                            <div class="pick film-poster-quality">HD</div>

                                            <img data-src="https://img.solarmovie.pe/xxrz/250x400/338/e8/ad/e8ad60dd67c5bc3f2f133058d0b16dc9/e8ad60dd67c5bc3f2f133058d0b16dc9.jpg"
                                                class="film-poster-img lazyload" title="Monkey Man" alt="Monkey Man">
                                            <a href="/movie/watch-monkey-man-free-107839"
                                                class="film-poster-ahref flw-item-tip" title="Monkey Man"><i
                                                    class="fa fa-play"></i></a>
                                        </div>
                                        <div class="film-detail film-detail-fix">

                                            <h3 class="film-name"><a href="/movie/watch-monkey-man-free-107839"
                                                    title="Monkey Man">Monkey Man</a>
                                            </h3>

                                            <div class="fd-infor">


                                                <span class="fdi-item">2024</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item fdi-duration">121m</span>


                                                <span class="float-right fdi-type">Movie</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <div style="text-align:center;margin-bottom: 20px;margin-top:20px;display:none;" id="hgiks-middle">
                </div>
                <section class="block_area block_area_home section-id-02">
                    <div class="block_area-header block_area-header-tabs">
                        <div class="float-left bah-heading mr-4">
                            <h2 class="cat-heading">Latest Movies</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content block_area-list film_list film_list-grid">
                        <div class="film_list-wrap">

                            <div class="flw-item">
                                <div class="film-poster">

                                    <div class="pick film-poster-quality">HD</div>

                                    <img data-src="https://img.solarmovie.pe/xxrz/250x400/338/4e/83/4e83cbfdc6263b8fdd928b5e14aaaac1/4e83cbfdc6263b8fdd928b5e14aaaac1.jpg"
                                        class="film-poster-img lazyload" title="Love Lies Bleeding"
                                        alt="Love Lies Bleeding">
                                    <a href="/movie.php/watch-love-lies-bleeding-free-107050"
                                        class="film-poster-ahref flw-item-tip" title="Love Lies Bleeding"><i
                                            class="fa fa-play"></i></a>
                                </div>
                                <div class="film-detail film-detail-fix">

                                    <h3 class="film-name"><a href="/movie/watch-love-lies-bleeding-free-107050"
                                            title="Love Lies Bleeding">Love Lies Bleeding</a>
                                    </h3>

                                    <div class="fd-infor">


                                        <span class="fdi-item">2024</span>
                                        <span class="dot"></span>
                                        <span class="fdi-item fdi-duration">104m</span>


                                        <span class="float-right fdi-type">Movie</span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- footer part -->
        <?php require_once 'components/footer.php'; ?>
    </div>

    <!-- Modal Part -->

    <!-- End Modal Part -->

</div>
<!--script-->
<?php require_once 'components/script.php'; ?>
<script>
var currPage = 'home';
</script>
<script type="text/javascript" src="js/app.min.js"></script>

</body>

</html>