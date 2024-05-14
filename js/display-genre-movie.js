$(function () {
  const genre = {
    12: "Adventure",
    14: "Fantasy",
    16: "Animation",
    18: "Drama",
    27: "Horror",
    28: "Action",
    35: "Comedy",
    36: "History",
    37: "Western",
    53: "Thriller",
    80: "Crime",
    99: "Documentary",
    878: "Science Fiction",
    9648: "Mystery",
    10402: "Music",
    10749: "Romance",
    10751: "Family",
    10752: "War",
    10770: "TV Movie",
  };

  let genreID = location.search.split("=")[1];

  if (!genreID) {
    location.replace(location.origin);
    return;
  }

  let start = 0;
  let limit = 24;

  const getGenreMovie = (genreID, start, limit) => {
    let data = {
      genre_id: genreID,
      start: start,
      limit: limit,
      submit: true,
    };
    $.ajax({
      type: "POST",
      url: location.origin + "/display-genre-movie.php",
      data: data,
      success: function (response) {
        // console.log(response);

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

          $("#displayGenreMovie").append(html);
        });
        $("#displayGenreMovie").append('<div class="clearfix"></div>');

        if (response.data.length == 0) {
          $("#loadMore").text("No more found").prop("disabled", true);
        }
      },
    });
  };

  getGenreMovie(genreID, start, limit);

  $(".cat-heading").prepend(genre[genreID] + " Movies");

  $("#loadMore").on("click", function () {
    start += limit;
    getGenreMovie(genreID, start, limit);
  });
});
