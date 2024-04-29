<?php require_once 'components/head.php'; ?>
<div id="fb-root"></div>
<script async="" defer="" crossorigin="anonymous" src="js/sdk.js#xfbml=1&amp;version=v4.0"></script>

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
            <div class="watching">
                <div class="container">
                    <div style="text-align: center;margin-bottom: 20px;margin-top:20px;display:none;" id="vpn-top">
                    </div>
                    <div style="text-align:center;margin-bottom: 20px;margin-top:20px;display:none;" id="hgiks-top">
                    </div>
                    <div class="prebreadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>

                                <li class="breadcrumb-item">
                                    <a href="/movie" title="Movie">Movie</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Just Animals</li>

                            </ol>
                        </nav>
                    </div>

                    <div class="alert mb-3"
                        style="background: #ffaa00; color: #111; font-size: 16px; font-weight: 600;">If you get any
                        error message when trying to stream, please Refresh the page or switch to another streaming
                        server.</div>

                    <div class="watching_player">
                        <div class="watching_player-area">
                            <div id="mask-player" style="padding-bottom: 56.25%;">
                                <div class="loading-relative">
                                    <div class="loading">
                                        <div class="span1"></div>
                                        <div class="span2"></div>
                                        <div class="span3"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="watch-player" style="display: none;"></div>
                            <div id="watch-iframe" style="display: none;padding-bottom: 56.25%;">
                                <iframe id="iframe-embed" width="100%" height="500" scrolling="no" frameborder="0"
                                    src="" allowfullscreen="true" webkitallowfullscreen="true"
                                    mozallowfullscreen="true"></iframe>
                            </div>
                        </div>
                        <div class="watching_player-control">
                            <!-- <a id="pc-fav" href="javascript:void(0)"
                                    class="btn btn-sm btn-radius btn-secondary mr-2" onclick="add_favorite()"><i
                                        class="fa fa-plus mr-2"></i>Add to favorite
                                </a> -->
                            <a href="javascript:void(0)" id="turn-off-light"
                                class="btn btn-sm btn-radius btn-secondary mr-2"><i class="fa fa-lightbulb mr-2"></i>
                            </a>
                            <!-- <a id="pc-comment" href="javascript:void(0)"
                                    class="goto-comments btn btn-sm btn-radius btn-secondary mr-2"><i
                                        class="fa fa-comments mr-2"></i>Comments
                                </a> -->

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Begin: Detail-->
            <div class="detail_page watch_page">
                <div class="container">
                    <!--Begin: Watch-->
                    <div class="detail_page-watch" data-watch_id="10428505" data-server="" data-season=""
                        data-episode="" data-id="108463" data-type="1">
                        <div class="film_tools">
                            <div id="alert-fav" class="alert alert-success fade in alert-dismissible show"
                                style="display: none;margin: 10px;">
                                <strong>Success!</strong> <span id="fav-message"></span>
                            </div>
                        </div>
                        <!-- <div class="sharethis-inline-share-buttons"
                                data-url="https://solarmovie.pe/watch-movie/watch-just-animals-free-108463.10428505"
                                style="padding-top: 20px; padding-bottom: 20px; text-align: center;">
                            </div> -->
                        <!-- <div id="content-episodes">
                                <div class="loading-relative">
                                    <div class="loading">
                                        <div class="span1"></div>
                                        <div class="span2"></div>
                                        <div class="span3"></div>
                                    </div>
                                </div>
                            </div> -->
                        <div id="vs-vid"></div>
                        <!-- <div style="text-align:center;margin-bottom: 20px;margin-top:20px;display:none;"
                                id="hgiks-middle"></div> -->
                        <div class="detail_page-infor">

                            <div class="dp-i-content">
                                <div class="dp-i-c-poster">
                                    <div class="film-poster mb-2">
                                        <img class="film-poster-img" src="images/81a6f809123d73982bcf71dae330052f.jpg"
                                            title="Just Animals" alt="Just Animals">
                                    </div>
                                    <div class="block-rating" id="block-rating"></div>
                                </div>
                                <div class="dp-i-c-right">
                                    <h2 class="heading-name"><a href="/movie/just-animals-108463">Just Animals</a>
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
                                                N/A</button></span>
                                    </div>
                                    <div class="description">
                                        Activists have been fighting for animal rights for decades. Will they
                                        succeed in winning the battle against meat production or will the food
                                        industry be unstoppable? The film depicts the structural nature of the
                                        animal industry and the systematic abuse of power through three central
                                        characters. They fight the battle of David and Goliath against a seemingly
                                        invincible industry, ready to achieve their goals at any cost. The brutal
                                        undercover photos taken by the activists have caused a series of
                                        international scandals, but will they ultimately succeed in making a
                                        difference?
                                    </div>
                                    <div class="elements">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12">
                                                <div class="row-line">
                                                    <span class="type"><strong>Released: </strong></span> 2022-03-04
                                                </div>
                                                <div class="row-line">
                                                    <span class="type"><strong>Genre: </strong></span>

                                                    <a href="/genre/documentary" title="Documentary">Documentary</a>

                                                </div>
                                                <div class="row-line">
                                                    <span class="type"><strong>Casts: </strong></span>

                                                    <a href="/cast/kristo-muurimaa" title="Kristo Muurimaa">Kristo
                                                        Muurimaa</a>,

                                                    <a href="/cast/saila-kivela" title="Saila Kivelä">Saila
                                                        Kivelä</a>,

                                                    <a href="/cast/mai-kivela" title="Mai Kivelä">Mai Kivelä</a>,

                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                                                <div class="row-line">
                                                    <span class="type"><strong>Duration: </strong></span> 82
                                                    min
                                                </div>
                                                <div class="row-line">
                                                    <span class="type"><strong>Country: </strong></span>

                                                    <a href="/country/fi" title="Finland">Finland</a>

                                                </div>
                                                <div class="row-line">
                                                    <span class="type"><strong>Production: </strong></span>

                                                    <a href="/production/tuffi-films" title="Tuffi Films">Tuffi
                                                        Films</a>

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
                                <h2 class="btn btn-sm btn-light btn-dtag">Watch Just Animals Online Free</h2>
                                <h2 class="btn btn-sm btn-light btn-dtag">Just Animals Online Free</h2>
                                <h2 class="btn btn-sm btn-light btn-dtag">Where to watch Just Animals</h2>
                                <h2 class="btn btn-sm btn-light btn-dtag">Just Animals movie free online</h2>
                                <h2 class="btn btn-sm btn-light btn-dtag">Just Animals free online</h2>
                            </div> -->
                    </div>
                    <!--End: Watch-->
                </div>
            </div>
            <!--End: Detail-->
            <!--Begin: Related-->
            <div class="film_related file_realted-list">
                <div class="container">

                    <!--Begin: Section film list-->
                    <section class="block_area block_area_category">
                        <div class="block_area-header block_area-header-tabs">
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

                                        <img data-src="https://img.solarmovie.pe/xxrz/250x400/338/b5/f2/b5f25392b3a74cca34bd00363112921b/b5f25392b3a74cca34bd00363112921b.jpg"
                                            class="film-poster-img lazyload" title="Alex Edelman: Just for Us"
                                            alt="Alex Edelman: Just for Us">
                                        <a href="/movie/watch-alex-edelman-just-for-us-free-107881"
                                            class="film-poster-ahref flw-item-tip" title="Alex Edelman: Just for Us"><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <div class="film-detail film-detail-fix">

                                        <h3 class="film-name"><a
                                                href="/movie/watch-alex-edelman-just-for-us-free-107881"
                                                title="Alex Edelman: Just for Us">Alex Edelman: Just for Us</a>
                                        </h3>

                                        <div class="fd-infor">


                                            <span class="fdi-item">2024</span>
                                            <span class="dot"></span>
                                            <span class="fdi-item fdi-duration">91m</span>


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
                    <section id="film_comments" class="block_area block_area_category">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Comments</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="comments-content">
                            <div class="fb-comments"
                                data-href="https://solarmovie.pe/watch-movie/watch-just-animals-free-108463.10428505"
                                data-width="100%" data-numposts="10"></div>
                        </div>
                    </section>
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
                            data-src="https://www.youtube.com/embed/0N9GA8NWq34" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal premodal premodal-share modalshare-1" id="modalshare">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <h5 class="modal-title mb-2" style="font-size: 23px; line-height: 1.3em;">
                            <strong>Sharing is caring.</strong>
                        </h5>
                        <div class="desc mb-4">It's the biggest motivation to help us to make the site better.</div>
                        <div class="modalsharebuttons mb-2">
                            <div class="sharethis-inline-share-buttons"
                                data-url="https://solarmovie.pe/watch-movie/watch-just-animals-free-108463.10428505">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!--End: Modal-->
    <div id="mask-overlay"></div>
</div>
<?php require_once 'components/script.php'; ?>
<script>
var currPage = 'watch';
</script>
<script type="text/javascript" src="js/app.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    check_favorite();
    // get_episodes();
    vote_info();
    if (Cookies.get('show_share') === undefined) {
        $('#modalshare').modal('show');
        Cookies.set('show_share', true, {
            expires: 1
        });
    }

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
<script src="js/jwplayer.js"></script>
<script src="js/player.min.js"></script>


</body>

</html>