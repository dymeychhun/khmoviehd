$(function () {
  const displayMovie = () => {
    $.ajax({
      type: "GET",
      url: location.origin + "/display-movie.php",
      dataType: "json",
      success: function (response) {
        // console.log(response);

        if (response.meta.code == 404) {
          return;
        }

        $.each(response.data, function (_, value) {
          let html = `<div class="flw-item">
          <div class="film-poster">
          <div class="pick film-poster-quality">HD</div>
          <img data-src="https://media.themoviedb.org/t/p/w220_and_h330_face${
            value.poster_path
          }" class="film-poster-img lazyload" title="${value.title}" alt="${
            value.title
          }"><a href="/watch?title=${
            value.title_slug
          }" class="film-poster-ahref flw-item-tip" title="${
            value.title
          }"><i class="fa fa-play"></i></a>
          </div>

          <div class="film-detail film-detail-fix">
          <h3 class="film-name"><a href="/watch?title=${
            value.title_slug
          }" title="${value.title}">${value.title}</a></h3>
          <div class="fd-infor">
          <span class="fdi-item">${value.release_date.slice(0, 4)}</span>
          <span class="dot"></span>
          <span class="fdi-item fdi-duration">${value.runtime}m</span>
          <span class="float-right fdi-type">Movie</span>
          </div>
          </div>
          <div class="clearfix"></div>
          </div>`;

          $("#trending").append(html);
          $("#latest").append(html);
        });
        $("#trending").append('<div class="clearfix"></div>');
        $("#latest").append('<div class="clearfix"></div>');
      },
    });
  };

  displayMovie();
});
