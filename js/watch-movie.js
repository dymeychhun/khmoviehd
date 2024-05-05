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
      console.log(response);
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

      const playerInstance = jwplayer("watch-player").setup({
        controls: true,
        sharing: true,
        displaytitle: true,
        displaydescription: true,
        abouttext: "",
        aboutlink: "",
        autostart: false,

        skin: {
          name: "netflix",
        },

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
            title: response.data.title,
            description: "You're Watching",
            image: "",
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

      playerInstance.on("ready", function () {
        const buttonId = "download-video-button";
        const iconPath =
          "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTMgMTloMTh2Mkgzdi0yem0xMC01LjgyOEwxOS4wNzEgNy4xbDEuNDE0IDEuNDE0TDEyIDE3IDMuNTE1IDguNTE1IDQuOTI5IDcuMSAxMSAxMy4xN1YyaDJ2MTEuMTcyeiIgZmlsbD0icmdiYSgyNDcsMjQ3LDI0NywxKSIvPjwvc3ZnPg==";
        const tooltipText = "Download Video";

        // Call the player's `addButton` API method to add the custom button
        playerInstance.addButton(
          iconPath,
          tooltipText,
          buttonClickAction,
          buttonId
        );

        // This function is executed when the button is clicked
        function buttonClickAction() {
          const playlistItem = playerInstance.getPlaylistItem();
          const anchor = document.createElement("a");
          const fileUrl = playlistItem.file;
          anchor.setAttribute("href", fileUrl);
          const downloadName = playlistItem.file.split("/").pop();
          anchor.setAttribute("download", downloadName);
          anchor.style.display = "none";
          document.body.appendChild(anchor);
          anchor.click();
          document.body.removeChild(anchor);
        }

        // Move the timeslider in-line with other controls
        const playerContainer = playerInstance.getContainer();
        const buttonContainer = playerContainer.querySelector(
          ".jw-button-container"
        );
        const spacer = buttonContainer.querySelector(".jw-spacer");
        const timeSlider = playerContainer.querySelector(".jw-slider-time");
        buttonContainer.replaceChild(timeSlider, spacer);

        // Detect adblock
        playerInstance.on("adBlock", () => {
          const modal = document.querySelector("div.modal");
          modal.style.display = "flex";

          document
            .getElementById("close")
            .addEventListener("click", () => location.reload());
        });

        // Forward 10 seconds
        const rewindContainer = playerContainer.querySelector(
          ".jw-display-icon-rewind"
        );
        const forwardContainer = rewindContainer.cloneNode(true);
        const forwardDisplayButton =
          forwardContainer.querySelector(".jw-icon-rewind");
        forwardDisplayButton.style.transform = "scaleX(-1)";
        forwardDisplayButton.ariaLabel = "Forward 10 Seconds";
        const nextContainer = playerContainer.querySelector(
          ".jw-display-icon-next"
        );
        nextContainer.parentNode.insertBefore(forwardContainer, nextContainer);

        // control bar icon
        playerContainer.querySelector(".jw-display-icon-next").style.display =
          "none"; // hide next button
        const rewindControlBarButton =
          buttonContainer.querySelector(".jw-icon-rewind");
        const forwardControlBarButton = rewindControlBarButton.cloneNode(true);
        forwardControlBarButton.style.transform = "scaleX(-1)";
        forwardControlBarButton.ariaLabel = "Forward 10 Seconds";
        rewindControlBarButton.parentNode.insertBefore(
          forwardControlBarButton,
          rewindControlBarButton.nextElementSibling
        );

        // add onclick handlers
        [forwardDisplayButton, forwardControlBarButton].forEach((button) => {
          button.onclick = () => {
            playerInstance.seek(playerInstance.getPosition() + 10);
          };
        });
      });
    },
  });
});
