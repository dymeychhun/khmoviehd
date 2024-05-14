$(function () {
  const countries = {
    AD: "Andorra",
    AE: "United Arab Emirates",
    AF: "Afghanistan",
    AG: "Antigua and Barbuda",
    AI: "Anguilla",
    AL: "Albania",
    AM: "Armenia",
    AN: "Netherlands Antilles",
    AO: "Angola",
    AQ: "Antarctica",
    AR: "Argentina",
    AS: "American Samoa",
    AT: "Austria",
    AU: "Australia",
    AW: "Aruba",
    AZ: "Azerbaijan",
    BA: "Bosnia and Herzegovina",
    BB: "Barbados",
    BD: "Bangladesh",
    BE: "Belgium",
    BF: "Burkina Faso",
    BG: "Bulgaria",
    BH: "Bahrain",
    BI: "Burundi",
    BJ: "Benin",
    BM: "Bermuda",
    BN: "Brunei Darussalam",
    BO: "Bolivia",
    BR: "Brazil",
    BS: "Bahamas",
    BT: "Bhutan",
    BU: "Burma",
    BV: "Bouvet Island",
    BW: "Botswana",
    BY: "Belarus",
    BZ: "Belize",
    CA: "Canada",
    CC: "Cocos  Islands",
    CD: "Congo",
    CF: "Central African Republic",
    CG: "Congo",
    CH: "Switzerland",
    CI: "Cote D'Ivoire",
    CK: "Cook Islands",
    CL: "Chile",
    CM: "Cameroon",
    CN: "China",
    CO: "Colombia",
    CR: "Costa Rica",
    CS: "Serbia and Montenegro",
    CU: "Cuba",
    CV: "Cape Verde",
    CX: "Christmas Island",
    CY: "Cyprus",
    CZ: "Czech Republic",
    DE: "Germany",
    DJ: "Djibouti",
    DK: "Denmark",
    DM: "Dominica",
    DO: "Dominican Republic",
    DZ: "Algeria",
    EC: "Ecuador",
    EE: "Estonia",
    EG: "Egypt",
    EH: "Western Sahara",
    ER: "Eritrea",
    ES: "Spain",
    ET: "Ethiopia",
    FI: "Finland",
    FJ: "Fiji",
    FK: "Falkland Islands",
    FM: "Micronesia",
    FO: "Faeroe Islands",
    FR: "France",
    GA: "Gabon",
    GB: "United Kingdom",
    GD: "Grenada",
    GE: "Georgia",
    GF: "French Guiana",
    GH: "Ghana",
    GI: "Gibraltar",
    GL: "Greenland",
    GM: "Gambia",
    GN: "Guinea",
    GP: "Guadeloupe",
    GQ: "Equatorial Guinea",
    GR: "Greece",
    GS: "South Georgia and the South Sandwich Islands",
    GT: "Guatemala",
    GU: "Guam",
    GW: "Guinea-Bissau",
    GY: "Guyana",
    HK: "Hong Kong",
    HM: "Heard Island and McDonald Islands",
    HN: "Honduras",
    HR: "Croatia",
    HT: "Haiti",
    HU: "Hungary",
    ID: "Indonesia",
    IE: "Ireland",
    IL: "Israel",
    IN: "India",
    IO: "British Indian Ocean Territory",
    IQ: "Iraq",
    IR: "Iran",
    IS: "Iceland",
    IT: "Italy",
    JM: "Jamaica",
    JO: "Jordan",
    JP: "Japan",
    KE: "Kenya",
    KG: "Kyrgyzstan",
    KH: "Cambodia",
    KI: "Kiribati",
    KM: "Comoros",
    KN: "Saint Kitts and Nevis",
    KP: "North Korea",
    KR: "South Korea",
    KW: "Kuwait",
    KY: "Cayman Islands",
    KZ: "Kazakhstan",
    LA: "Laos",
    LB: "Lebanon",
    LC: "Saint Lucia",
    LI: "Liechtenstein",
    LK: "Sri Lanka",
    LR: "Liberia",
    LS: "Lesotho",
    LT: "Lithuania",
    LU: "Luxembourg",
    LV: "Latvia",
    LY: "Libya",
    MA: "Morocco",
    MC: "Monaco",
    MD: "Moldova",
    MG: "Madagascar",
    MH: "Marshall Islands",
    MK: "Macedonia",
    ML: "Mali",
    MM: "Myanmar",
    MN: "Mongolia",
    MO: "Macao",
    MP: "Northern Mariana Islands",
    MQ: "Martinique",
    MR: "Mauritania",
    MS: "Montserrat",
    MT: "Malta",
    MU: "Mauritius",
    MV: "Maldives",
    MW: "Malawi",
    MX: "Mexico",
    MY: "Malaysia",
    MZ: "Mozambique",
    NA: "Namibia",
    NC: "New Caledonia",
    NE: "Niger",
    NF: "Norfolk Island",
    NG: "Nigeria",
    NI: "Nicaragua",
    NL: "Netherlands",
    NO: "Norway",
    NP: "Nepal",
    NR: "Nauru",
    NU: "Niue",
    NZ: "New Zealand",
    OM: "Oman",
    PA: "Panama",
    PE: "Peru",
    PF: "French Polynesia",
    PG: "Papua New Guinea",
    PH: "Philippines",
    PK: "Pakistan",
    PL: "Poland",
    PM: "Saint Pierre and Miquelon",
    PN: "Pitcairn",
    PR: "Puerto Rico",
    PS: "Palestinian Territory",
    PT: "Portugal",
    PW: "Palau",
    PY: "Paraguay",
    QA: "Qatar",
    RE: "Reunion",
    RO: "Romania",
    RU: "Russia",
    RW: "Rwanda",
    SA: "Saudi Arabia",
    SB: "Solomon Islands",
    SC: "Seychelles",
    SD: "Sudan",
    SE: "Sweden",
    SG: "Singapore",
    SH: "Saint Helena",
    SI: "Slovenia",
    SJ: "Svalbard and Jan Mayen Islands",
    SK: "Slovakia",
    SL: "Sierra Leone",
    SM: "San Marino",
    SN: "Senegal",
    SO: "Somalia",
    SR: "Suriname",
    ST: "Sao Tome and Principe",
    SU: "USSR",
    SV: "El Salvador",
    SY: "Syria",
    SZ: "Swaziland",
    TC: "Turks and Caicos Islands",
    TD: "Chad",
    TF: "French Southern Territories",
    TG: "Togo",
    TH: "Thailand",
    TJ: "Tajikistan",
    TK: "Tokelau",
    TL: "East Timor",
    TM: "Turkmenistan",
    TN: "Tunisia",
    TO: "Tonga",
    TP: "East Timor",
    TR: "Turkey",
    TT: "Trinidad and Tobago",
    TV: "Tuvalu",
    TW: "Taiwan",
    TZ: "Tanzania",
    UA: "Ukraine",
    UG: "Uganda",
    UK: "United Kingdom",
    UM: "United States Minor Outlying Islands",
    US: "United States",
    UY: "Uruguay",
    UZ: "Uzbekistan",
    VA: "Vatican",
    VC: "Saint Vincent and the Grenadines",
    VE: "Venezuela",
    VG: "Virgin Islands (British)",
    VI: "Virgin Islands (U.S.)",
    VN: "Vietnam",
    VU: "Vanuatu",
    WF: "Wallis and Futuna Islands",
    WS: "Samoa",
    YE: "Yemen",
    YT: "Mayotte",
    YU: "Yugoslavia",
    ZA: "South Africa",
    ZM: "Zambia",
    ZW: "Zimbabwe",
  };

  let countryISO = location.search.split("=")[1];

  if (!countryISO) {
    location.replace(location.origin);
    return;
  }

  let offset = 0;
  let limit = 24;

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
        console.log(response);

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

  $(".cat-heading").append(countries[countryISO] + " Movies");

  $("#loadMore").on("click", function () {
    offset += limit;
    getCountryMovie(countryISO, offset, limit);
  });
});
