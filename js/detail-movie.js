$(function () {
  let title = location.search.split("=")[1];

  if (!title) {
    location.replace(location.origin);
    return;
  }

  let data = {
    title: title,
  };

  $.ajax({
    type: "POST",
    url: location.origin + "/detail-movie.php",
    data: data,
    success: function (response) {
      if (response.status === "error") {
        location.replace(location.origin);
        return;
      }
      // console.log(response);

      $(".cover_follow").css(
        "background-image",
        "url(https://image.tmdb.org/t/p/original" +
          response.data.backdrop_path +
          ")"
      );
      $(".watch-movie").attr(
        "href",
        "/watch-movie?title=" + response.data.title_slug
      );
      $(".title").text(response.data.title);
      $(".poster").attr(
        "src",
        "https://media.themoviedb.org/t/p/w220_and_h330_face" +
          response.data.poster_path
      );
      $("#vote-average").append(response.data.vote_average.slice(0, 3));
      $(".description").text(response.data.overview);
      $("#release-date").append(response.data.release_date);
      $("#runtime").append(response.data.runtime + " min");
      let genreList = "";
      $.each(response.data.genre_id, function (_, value) {
        genreList +=
          '<a href="/genre?genre=' + value.id + '">' + value.name + "</a>, ";
      });
      genreList = genreList.slice(0, -2);
      $("#genre").append(genreList);
      $("#country")
        .text(response.data.english_name)
        .attr({
          title: response.data.english_name,
          href: "/country?country=" + response.data.iso_3166_1,
        });

      $("#iframe-trailer").attr(
        "data-src",
        "https://www.youtube.com/embed/" + response.data.trailer
      );
    },
  });
});
