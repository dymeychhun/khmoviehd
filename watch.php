<?php require_once 'components/head.php'; ?>
<div id="app">
    <div id="sidebar_menu_bg"></div>
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
            <!--Begin: Detail-->
            <div class="detail_page detail_page-style">
                <div class="cover_follow" style="background-image: url(images/cc59d16122245417fa2faf135f838bca.jpg);">
                </div>
                <div class="container">
                    <div class="prebreadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">

                                    <a href="/movie" title="Movie">Movies</a>

                                </li>
                                <li class="breadcrumb-item active" aria-current="page">6 Hours Away</li>
                            </ol>
                        </nav>
                    </div>

                    <!--Begin: Watch-->
                    <div class="detail_page-watch" data-id="108439" data-type="1">
                        <div class="dp-w-cover">


                            <a href="/watch-movie/watch-6-hours-away-free-108439" class="dp-w-c-play"><i
                                    class="fa fa-play"></i></a>


                        </div>
                        <div class="detail_page-infor">
                            <div class="dp-i-content">
                                <div class="dp-i-c-poster">
                                    <div class="film-poster mb-2">
                                        <img class="film-poster-img" src="images/7192237c81db41a3d14b7020d0c3cada.jpg"
                                            title="6 Hours Away" alt="6 Hours Away">
                                    </div>
                                    <div class="block-rating" id="block-rating"></div>
                                </div>
                                <div class="dp-i-c-right">
                                    <div class="dp-i-c-stick">


                                        <a href="/watch-movie/watch-6-hours-away-free-108439" title="Watch now"
                                            class="btn btn-radius btn-focus"><i class="fa fa-play mr-2"></i>Watch
                                            now</a>



                                        <div id="favorite-state" class="float-right"></div>
                                    </div>
                                    <h2 class="heading-name"><a href="/movie/6-hours-away-108439">6 Hours Away</a>
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
                                                class="btn btn-sm btn-radius btn-warning btn-imdb">IMDB:
                                                4.9</button></span>
                                    </div>
                                    <div class="description">
                                        It follows ex-Marine Chris Montano after his wife goes missing during a
                                        business trip. He then finds himself in a race against time to save her.
                                    </div>
                                    <div class="elements">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12">
                                                <div class="row-line">
                                                    <span class="type"><strong>Released: </strong></span> 2024-04-19
                                                </div>
                                                <div class="row-line">
                                                    <span class="type"><strong>Genre: </strong></span>

                                                    <a href="/genre/action" title="Action">Action</a>,

                                                    <a href="/genre/thriller" title="Thriller">Thriller</a>

                                                </div>
                                                <div class="row-line">
                                                    <span class="type"><strong>Casts: </strong></span>

                                                    <a href="/cast/lara-wolf" title="Lara Wolf">Lara Wolf</a>,

                                                    <a href="/cast/roberto-sanz-sanchez"
                                                        title="Roberto 'Sanz' Sanchez">Roberto 'Sanz' Sanchez</a>,

                                                    <a href="/cast/guillermo-ivan" title="Guillermo Iván">Guillermo
                                                        Iván</a>,

                                                    <a href="/cast/oscar-torre" title="Oscar Torre">Oscar Torre</a>,

                                                    <a href="/cast/zair-montes" title="Zair Montes">Zair Montes</a>

                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                                                <div class="row-line">
                                                    <span class="type"><strong>Duration: </strong></span> 92
                                                    min
                                                </div>
                                                <div class="row-line">
                                                    <span class="type"><strong>Country: </strong></span>

                                                    <a href="/country/mx" title="Mexico">Mexico</a>

                                                </div>
                                                <div class="row-line">
                                                    <span class="type"><strong>Production: </strong></span>

                                                    <a href="/production/rog-films" title="Rog Films">Rog Films</a>

                                                </div>
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
                    <!-- <div class="sharethis-inline-share-buttons"
                            data-url="https://solarmovie.pe/movie/watch-6-hours-away-free-108439"
                            style="margin-top: 20px; margin-bottom: 20px; text-align: center;"></div> -->

                    <div id="content-episodes" style="margin-bottom: 30px;"></div>

                    <div id="vs-vid"></div>
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
                            <div class="film_list-wrap">

                                <div class="flw-item">
                                    <div class="film-poster">

                                        <div class="pick film-poster-quality">HD</div>

                                        <img data-src="https://img.solarmovie.pe/xxrz/250x400/338/cf/73/cf739ca76d63a2a907f4837a85d71357/cf739ca76d63a2a907f4837a85d71357.jpg"
                                            class="film-poster-img lazyload" title="Knox Goes Away"
                                            alt="Knox Goes Away">
                                        <a href="/movie/watch-knox-goes-away-free-107796"
                                            class="film-poster-ahref flw-item-tip" title="Knox Goes Away"><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <div class="film-detail film-detail-fix">

                                        <h3 class="film-name"><a href="/movie/watch-knox-goes-away-free-107796"
                                                title="Knox Goes Away">Knox Goes Away</a>
                                        </h3>

                                        <div class="fd-infor">


                                            <span class="fdi-item">2024</span>
                                            <span class="dot"></span>
                                            <span class="fdi-item fdi-duration">114m</span>


                                            <span class="float-right fdi-type">Movie</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>
                    <!--End: Section film list-->
                </div>
            </div>
            <!--End: Related-->
        </div>
        <!--End: Main-->
        <?php require_once 'components/footer.php'; ?>

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
                        <iframe width="560" height="315" id="iframe-trailer"
                            data-src="https://www.youtube.com/embed/Z9rcVX8GZww" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End: Modal-->
</div>
<?php require_once 'components/script.php'; ?>
<script>
var currPage = 'detail';
</script>
<script type="text/javascript" src="js/app.min.js"></script>

<script>
$(document).ready(function() {
    check_favorite();
    // get_episodes();
    vote_info();
    if (movie.type == 2) {
        $.get("/ajax/season/list/" + movie.id, function(res) {
            $('#content-episodes').html(res);
        });
    } else {
        $.get("/ajax/episode/list/" + movie.id, function(res) {
            $('#content-episodes').html(res);
        });
    }
});
</script>

</body>

</html>