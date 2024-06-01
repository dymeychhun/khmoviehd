$(function () {
  let url = location.search.split("=")[1];

  if (!url) {
    location.replace(location.origin);
    return;
  }

  let keyword = url.toLowerCase().replace(/\W+/g, "-");
  let searchResultText = url.toLowerCase().replace(/\+/g, " ");
  let offset = 0;
  let limit = 24;

  $(".cat-heading").append('"' + searchResultText + '"');

  const getsearchMovie = (keyword, offset, limit) => {
    let data = {
      keyword: keyword,
      offset: offset,
      limit: limit,
      submit: true,
    };

    $.ajax({
      type: "POST",
      data: data,
      url: location.origin + "/search-movie.php",
      dataType: "json",
      success: function (response) {
        // console.log(response);

        //OG

        $("title").text("KhMovieHD - Search result for " + searchResultText);
        $("meta[name='description']").attr(
          "content",
          `Watch ${searchResultText} movies and shows for free on KhMovieHD, download ${searchResultText} movies and shows in HD with KhMovieHD`
        );
        $("meta[name='keywords']").attr(
          "content",
          `KhMovieHD ${searchResultText}, ${searchResultText} full hd, ${searchResultText} download, watch ${searchResultText} free, free ${searchResultText} stream`
        );
        $("meta[property='og:url']").attr("content", location.href);
        $("meta[property='og:title']").attr(
          "content",
          "KhMovieHD - Search result for " + searchResultText
        );
        $("meta[property='og:description']").attr(
          "content",
          `Watch ${searchResultText} movies and shows for free on KhMovieHD, download ${searchResultText} movies and shows in HD with KhMovieHD`
        );

        // End OG

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

          $("#displaySearchMovie").append(html);
        });
        $("#displaySearchMovie").append('<div class="clearfix"></div>');

        if (response.data.length == 0) {
          $("#loadMore").text("No more found").prop("disabled", true);
        }
      },
    });
  };

  getsearchMovie(keyword, offset, limit);

  $("#loadMore").on("click", function () {
    let spinner = $(this);
    let html = `<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Loading...`;
    spinner.html(html).prop("disabled", true);
    setTimeout(function () {
      offset += limit;
      getsearchMovie(keyword, offset, limit);
      spinner.text("Load more").prop("disabled", false);
    }, 3000);
  });
});
