$(function () {
  let title = location.search.split("=")[1];
  let data = {
    title: title,
  };
  //   console.log(title);
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
      $(".active-title").text(response.data.title);
      $(".cover_follow").css(
        "background-image",
        "url(https://image.tmdb.org/t/p/original" +
          response.data.backdrop_path +
          ")"
      );
      $(".watch-movie").attr(
        "href",
        "/watch.php?title=" + response.data.title_slug
      );
      $("#title")
        .append(response.data.title)
        .attr({
          href: "/movie.php?title=" + response.data.title_slug,
        });
      $(".poster").attr({
        src:
          "https://media.themoviedb.org/t/p/w220_and_h330_face" +
          response.data.poster_path,
        title: response.data.title,
        alt: response.data.title,
      });
      $("#vote-average").append(response.data.vote_average.slice(0, 3));
      $(".description").text(response.data.overview);
      $("#release-date").append(response.data.release_date);
      $("#runtime").append(response.data.runtime + " min");
      let genreList = "";
      $.each(response.data.genre_id, function (_, value) {
        genreList +=
          '<a href="/genre.php?genre=' +
          value.id +
          '">' +
          value.name +
          "</a>, ";
      });
      genreList = genreList.slice(0, -2);
      $("#genre").append(genreList);
      $("#country")
        .text(response.data.english_name)
        .attr({
          title: response.data.english_name,
          href: "/country.php?country=" + response.data.iso_3166_1,
        });

      $("#iframe-trailer").attr(
        "data-src",
        "https://www.youtube.com/embed/" + response.data.trailer
      );

      jwplayer("mask-player").setup({
        controls: true,
        sharing: true,
        displaytitle: true,
        displaydescription: true,
        abouttext: "",
        aboutlink: "",
        autostart: false,

        // skin: {
        //   name: "netflix",
        // },

        logo: {
          file: "",
          link: "",
        },

        captions: {
          color: "#FFF",
          fontSize: 14,
          backgroundOpacity: 0,
          edgeStyle: "raised",
        },

        playlist: [
          {
            title: "You're Watching",
            description: response.data.title,
            image:
              "https://image.tmdb.org/t/p/original" +
              response.data.backdrop_path,
            sources: [
              {
                file: response.data.video_path,
              },
            ],
            captions: [
              {
                file: response.data.subtitle_path,
                label: "English",
                kind: "captions",
                default: true,
              },
            ],
            // tracks: [
            //   {
            //     file: "https://cdn.jwplayer.com/strips/iYfADWO1-120.vtt",
            //     kind: "thumbnails",
            //   },
            // ],
          },
        ],
        // advertising: {
        //   client: "vast",
        //   schedule: [
        //     {
        //       offset: "pre",
        //       tag: "https://www.videosprofitnetwork.com/watch.xml?key=d904b92c1f6cc769c59d030320a66f69",
        //     },
        //   ],
        // },
      });
    },
  });
});
