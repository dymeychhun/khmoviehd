$(function () {
  let offset = 0;
  let limit = 24;
  const displayMovie = (offset, limit) => {
    let data = {
      offset: offset,
      limit: limit,
      submit: true,
    };

    $.ajax({
      type: "POST",
      url: location.origin + "/display-all-movie.php",
      data: data,
      success: function (response) {
        console.log(response);

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

          $("#displayAllMovie").append(html);
        });
        $("#displayAllMovie").append('<div class="clearfix"></div>');

        if (response.data.length == 0) {
          $("#loadMore").text("No more found").prop("disabled", true);
        }
      },
      error: function (error) {
        console.log(error);
      },
    });
  };

  displayMovie(offset, limit);

  $("#loadMore").on("click", function () {
    offset += limit;
    displayMovie(offset, limit);
  });
});
