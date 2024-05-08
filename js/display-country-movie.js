$(function () {
  let countryISO = location.search.split("=")[1];
  let offset = 0;
  let limit = 8;

  const getCountryMovie = (countryISO, offset, limit) => {
    let data = {
      country_iso: countryISO,
      offset: offset,
      limit: limit,
      submit: true,
    };
    $.ajax({
      type: "POST",
      url: location.origin + "/display-country-movie.php",
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
          }"><a href="/watch.php?title=${
            value.title_slug
          }" class="film-poster-ahref flw-item-tip" title="${
            value.title
          }"><i class="fa fa-play"></i></a>
          </div>

          <div class="film-detail film-detail-fix">
          <h3 class="film-name"><a href="/watch.php?title=${
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

          $("#displayCountryMovie").append(html);
        });
        $("#displayCountryMovie").append('<div class="clearfix"></div>');

        if (response.data.length == 0) {
          $("#loadMore").text("No more found").prop("disabled", true);
        }
      },
    });
  };

  getCountryMovie(countryISO, offset, limit);

  $("#loadMore").on("click", function () {
    offset += limit;
    getCountryMovie(countryISO, offset, limit);
  });
});
