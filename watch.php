<?php require_once 'include/head.php'; ?>
<div id="app">
    <div id="sidebar_menu_bg"></div>
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
            <!--Begin: Detail-->
            <div class="detail_page detail_page-style">
                <div class="cover_follow">
                </div>
                <div class="container">
                    <div class="prebreadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">

                                    <a href="/movie" title="Movie">Movies</a>

                                </li>
                                <li class="breadcrumb-item title active" aria-current="page"></li>
                            </ol>
                        </nav>
                    </div>

                    <!--Begin: Watch-->
                    <div class="detail_page-watch" data-id="108439" data-type="1">
                        <div class="dp-w-cover">


                            <a class="dp-w-c-play watch-movie"><i class="fa fa-play"></i></a>


                        </div>
                        <div class="detail_page-infor">
                            <div class="dp-i-content">
                                <div class="dp-i-c-poster">
                                    <div class="film-poster mb-2">
                                        <img class="film-poster-img poster" title="6 Hours Away" alt="6 Hours Away">
                                    </div>
                                    <div class="block-rating" id="block-rating"></div>
                                </div>
                                <div class="dp-i-c-right">
                                    <div class="dp-i-c-stick">


                                        <a title="Watch now" class="btn btn-radius btn-focus watch-movie"><i
                                                class="fa fa-play mr-2"></i>Watch
                                            now</a>



                                        <div id="favorite-state" class="float-right"></div>
                                    </div>
                                    <h2 class="heading-name"><a id="title"></a>
                                    </h2>
                                    <div class="dp-i-stats">
                                        <span class="item mr-1">
                                            <button data-toggle="modal" data-target="#modaltrailer" title="Trailer"
                                                class="btn btn-sm btn-trailer"><i
                                                    class="fas fa-video mr-2"></i>Trailer</button>
                                        </span>
                                        <span class="item mr-1"><button
                                                class="btn btn-sm btn-quality"><strong>HD</strong></button></span>
                                        <span class="item mr-2"><button
                                                class="btn btn-sm btn-radius btn-warning btn-imdb"
                                                id="vote-average">IMDB: </button>
                                        </span>
                                    </div>
                                    <div class="description">
                                    </div>
                                    <div class="elements">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12">
                                                <div class="row-line">
                                                    <span class="type" id="release-date"><strong>Released:
                                                        </strong></span>
                                                </div>
                                                <div class="row-line" id="genre">
                                                    <span class="type"><strong>Genre: </strong></span>

                                                </div>
                                                <!-- <div class="row-line">
                                                    <span class="type"><strong>Casts: </strong></span>

                                                    <a href="/cast/lara-wolf" title="Lara Wolf">Lara Wolf</a>,

                                                    <a href="/cast/roberto-sanz-sanchez"
                                                        title="Roberto 'Sanz' Sanchez">Roberto 'Sanz' Sanchez</a>,

                                                    <a href="/cast/guillermo-ivan" title="Guillermo Iván">Guillermo
                                                        Iván</a>,

                                                    <a href="/cast/oscar-torre" title="Oscar Torre">Oscar Torre</a>,

                                                    <a href="/cast/zair-montes" title="Zair Montes">Zair Montes</a>

                                                </div> -->
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                                                <div class="row-line">
                                                    <span class="type" id="runtime"><strong>Duration: </strong></span>
                                                </div>
                                                <div class="row-line">
                                                    <span class="type"><strong>Country: </strong></span>

                                                    <a id="country"></a>

                                                </div>
                                                <!-- <div class="row-line">
                                                    <span class="type"><strong>Production: </strong></span>

                                                    <a href="/production/rog-films" title="Rog Films">Rog Films</a>

                                                </div> -->
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <!-- <div class="detail-tags mb-3">
                                <h2 class="btn btn-sm btn-light btn-dtag">Watch 6 Hours Away Online Free</h2>
                                <h2 class="btn btn-sm btn-light btn-dtag">6 Hours Away Online Free</h2>
                                <h2 class="btn btn-sm btn-light btn-dtag">Where to watch 6 Hours Away</h2>
                                <h2 class="btn btn-sm btn-light btn-dtag">6 Hours Away movie free online</h2>
                                <h2 class="btn btn-sm btn-light btn-dtag">6 Hours Away free online</h2>
                            </div> -->
                    </div>
                    <!--End: Watch-->
                    <div class="sharethis-inline-share-buttons" data-url=""
                        style="margin-top: 20px; margin-bottom: 20px; text-align: center;"></div>
                    <!-- <div class="sharethis-inline-share-buttons"></div> -->
                    <!-- <div id="content-episodes" style="margin-bottom: 30px;"></div> -->

                </div>
            </div>
            <!--End: Detail-->
            <!--Begin: Related-->
            <div class="film_related file_realted-list">
                <div class="container">

                    <!--Begin: Section film list-->
                    <section class="block_area block_area_category">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">You may also like</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="block_area-content block_area-list film_list film_list-grid">
                            <div class="film_list-wrap" id="mayLikeMovie">
                            </div>
                        </div>
                    </section>
                    <!--End: Section film list-->
                </div>
            </div>
            <!--End: Related-->
            <!-- back to the top -->
            <div class="back-to-the-top"><i class="fas fa-angle-up"></i>
            </div>
        </div>
        <!--End: Main-->
        <?php require_once 'include/footer.php'; ?>

    </div>
    <!--Begin: Modal-->
    <div class="modal fade premodal premodal-trailer" id="modaltrailer" tabindex="-1" role="dialog"
        aria-labelledby="modaltrailertitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="iframe16x9">
                        <iframe width="560" height="315" id="iframe-trailer" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End: Modal-->
</div>
<?php require_once 'include/script.php'; ?>
<script>
var currPage = 'detail';
</script>
<script type="text/javascript" src="js/app.min.js"></script>
<script type="text/javascript" src="js/detail-movie.js"></script>
<script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=663f7413dc54790019b8dc40&product=inline-share-buttons&source=platform"
    async="async"></script>
</body>

</html>
