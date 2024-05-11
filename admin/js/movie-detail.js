const options = {
  method: "GET",
  headers: {
    accept: "application/json",
    Authorization:
      "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYjA4MjMyZWM0ZDE2ZDcwZThlOWM3NjBhMmQyZWQ2ZiIsInN1YiI6IjYyYWFjOGQ0N2ViNWYyMDA1MGY1ZDgxMSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.7osbHEtOZO2uQqj_k_C0Zwa5GMiUJbmmqJjIwZnBjUc",
  },
};

const stringToSlug = (str) => {
  str = str.trim().toLowerCase();
  str = str.replace(/[^\w\s-]/g, ""); // Remove non-word characters
  str = str.replace(/[\s_-]+/g, "-"); // Replace spaces, underscores, and dashes with a single dash
  return str;
};

// fetch("https://api.themoviedb.org/3/movie/693134", options)
//   .then((response) => response.json())
//   .then((response) => console.log(response))
//   .catch((err) => console.error(err));
// https://api.themoviedb.org/3/movie/693134/videos

let movieID = location.search.split("=")[1];

$.ajax({
  url: "https://api.themoviedb.org/3/movie/" + movieID,
  dataType: "json",
  ...options,
  success: function (response, status, xhr) {
    // console.log(response);

    if (status != "success") {
      console.log(xhr);
      return;
    }
    let genreID = "";
    $.each(response.genres, function (_, valueOfElement) {
      genreID += valueOfElement.id + ",";
    });
    genreID = genreID.slice(0, -1);

    $("#tmdb_id").val(response.id);
    $("#title").val(response.title);
    $("#title_slug").val(stringToSlug(response.title));
    $("#overview").val(response.overview);
    $("#poster").val(response.poster_path);
    $("#backdrop").val(response.backdrop_path);
    $("#release_date").val(response.release_date);
    $("#runtime").val(response.runtime);
    $("#vote_average").val(response.vote_average);
    $("#country").val(response.origin_country);
    $("#genre").val(genreID);
    $("#poster-frame").html(
      `<img src="https://media.themoviedb.org/t/p/w220_and_h330_face${response.poster_path}" alt="${response.title}" title="${response.title}">`
    );
    $("#video-frame").html(
      `<iframe src="https://multiembed.mov/directstream.php?video_id=${response.id}&tmdb=1" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" allowfullscreen></iframe>`
    );
  },
});

$.ajax({
  url: "https://api.themoviedb.org/3/movie/" + movieID + "/videos",
  dataType: "json",
  ...options,
  success: function (response, status, xhr) {
    // console.log(response);

    if (status != "success") {
      console.log(xhr);
      return;
    }

    let trailer = [];
    let res = response.results;
    $.each(res, function (_, valueOfElement) {
      if (valueOfElement.type == "Trailer") {
        trailer.push(valueOfElement.key);
      }
    });
    $("#trailer").val(trailer[0]);
  },
});
