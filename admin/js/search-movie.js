$(function () {
  const options = {
    method: "GET",
    headers: {
      accept: "application/json",
      Authorization:
        "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJjYjA4MjMyZWM0ZDE2ZDcwZThlOWM3NjBhMmQyZWQ2ZiIsInN1YiI6IjYyYWFjOGQ0N2ViNWYyMDA1MGY1ZDgxMSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.7osbHEtOZO2uQqj_k_C0Zwa5GMiUJbmmqJjIwZnBjUc",
    },
  };
  const searchMovie = (query) => {
    $.ajax({
      url: "https://api.themoviedb.org/3/search/movie?query=" + query,
      dataType: "json",
      ...options,
      success: function (response) {
        let html = ``;
        $.each(response.results, function (_, valueOfElement) {
          html += `<div class="col-md-1"><a href="post-movie.php?id=${valueOfElement.id}" target="_blank"><img class="mb-3" src="https://media.themoviedb.org/t/p/w220_and_h330_face${valueOfElement.poster_path}" height="128" title="${valueOfElement.title}"></a></div>`;
        });
        $("#displayMovieList").html(html);
        // console.log(response);
      },
    });
  };

  $("#searchButton").on("click", function () {
    let searchValue = $("#searchInput").val();
    searchMovie(searchValue);
  });
});
