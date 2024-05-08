$(function () {
  $.ajax({
    type: "GET",
    url: location.origin + "/category-menu.php",
    dataType: "json",
    success: function (response) {
      // for genre menu
      $.each(response.genre, function (key, value) {
        let html = `<li><a href="/genre.php?genre=${key}" title="${value}">
                            ${value}
                        </a></li>`;
        $("#genreMenu").append(html);
      });

      // for country menu
      $.each(response.country, function (key, value) {
        let html = `<li><a href="/country.php?country=${key}" title="${value}">
                            ${value}
                        </a></li>`;
        $("#countryMenu").append(html);
      });

      // for sub genre menu
      $.each(response.genre, function (key, value) {
        let html = `<li class="nav-item"><a class="nav-link" href="/genre.php?genre=${key}" title="${value}">
                            ${value}
                        </a></li>`;
        $("#subGenreMenu").append(html);
      });

      // for sub country menu
      $.each(response.country, function (key, value) {
        let html = `<li class="nav-item"><a class="nav-link" href="/country.php?country=${key}" title="${value}">
                            ${value}
                        </a></li>`;
        $("#subCountryMenu").append(html);
      });
    },
    error: function () {
      console.log("error");
    },
  });
});
