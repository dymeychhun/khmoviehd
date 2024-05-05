$(function () {
  $("#submitButton").on("click", function () {
    let formData = {
      tmdb_id: $("#tmdb_id").val(),
      title: $("#title").val(),
      title_slug: $("#title_slug").val(),
      overview: $("#overview").val(),
      poster_path: $("#poster").val(),
      backdrop_path: $("#backdrop").val(),
      trailer: $("#trailer").val(),
      release_date: $("#release_date").val(),
      runtime: $("#runtime").val(),
      vote_average: $("#vote_average").val(),
      country_iso_3166_1: $("#country").val(),
      genre: $("#genre").val(),
      video_path: $("#video_path").val(),
      subtitle_path: $("#subtitle_path").val(),
      submit: true,
    };
    // console.log(formData);

    $.ajax({
      type: "POST",
      url: location.origin + "/admin/insert-movie.php",
      data: formData,
      success: function (response) {
        console.log(response);
        if (response.status === "success") {
          // $("#movieForm")[0].reset();
          $("#poster-frame").html("");
          $("#video-frame").html("");
          $("#tmdb_id").val("");
          $("#title").val("");
          $("#title_slug").val("");
          $("#overview").val("");
          $("#poster").val("");
          $("#backdrop").val("");
          $("#trailer").val("");
          $("#release_date").val("");
          $("#runtime").val("");
          $("#vote_average").val("");
          $("#country").val("");
          $("#genre").val("");
          $("#video_path").val("");
          $("#subtitle_path").val("");

          Swal.fire({
            position: "top-end",
            icon: response.status,
            title: response.message,
            showConfirmButton: false,
            timer: 1500,
          });

          setInterval(function () {
            location.href = location.origin + "/admin/search-movie.php";
          }, 2000);
        }
      },
      error: function (xhr, status, error) {
        console.log(error);
      },
    });
  });
});
