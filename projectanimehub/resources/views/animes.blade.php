<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeHUB</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light spacer layer1">
      <a class="navbar-brand" href="#">
        <img src="MicrosoftTeams-image.png" alt="Logo" style="width: 100px; height: 100px; border-Radius: 50%; "/>
        Anime-Hub
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <div class="search">
            <input class="search-bar" id="kereso" placeholder="Search">
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Főoldal </a>
          </li>
        </ul>
      </div>
    </nav>
    <section style="background-color: #002233;">
    <div>
        <section id="home" class="d-flex justify-content-center align-items-center">
            <div class="row justify-content-center" id="anime-list">
                <!-- Az animék listája itt jelennek meg dinamikusan -->
            </div>
        </section>
    </div>
</section>
    <div id="section2" class="spacer layer2"> <h2></h2></div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "backend.php", true);
    xhr.onload = function () {
        if (xhr.status == 200) {
            var animelist = JSON.parse(xhr.responseText);
            var container = document.getElementById("anime-list");

            animelist.forEach(function (anime, index) {
                var productDiv = document.createElement("div");
                productDiv.className = "col-12 col-md-4 col-lg-2 anime"; // Bootstrap grid rendszer

                if (index % 5 !== 0) {
                    productDiv.classList.add("ml-md-2"); // Távolság az elemek között
                }

                var img = document.createElement("img");
                img.src = anime.image_path;
                img.alt = anime.title;
                img.style.maxWidth = "250px"; // Maximum szélesség

                productDiv.appendChild(img);

                var title = document.createElement("h2");
                title.textContent = anime.title;

                productDiv.addEventListener("mouseover", function() {
                    productDiv.style.cursor = "pointer";
                });

                // Hozzáadunk egy eseményfigyelőt a címre, hogy az animére kattintva betöltse az adott oldalt
                title.addEventListener("click", function() {
                    window.location.href = "anime_page?anime_id=" + anime.anime_id;
                });
                // Hozzáadunk egy eseményfigyelőt a képre kattintáshoz, hogy az animére kattintva betöltse az adott oldalt
                img.addEventListener("click", function() {
                    window.location.href = "anime_page?anime_id=" + anime.anime_id;
                });

                productDiv.appendChild(title);

                container.appendChild(productDiv);

                if ((index + 1) % 5 === 0) {
                    var clearfixDiv = document.createElement("div");
                    clearfixDiv.className = "clearfix";
                    container.appendChild(clearfixDiv);
                }
            });
        }
    };
    xhr.send();

    var keresoInput = document.getElementById("kereso");
    keresoInput.addEventListener("input", function () {
        var szoveg = keresoInput.value.toLowerCase();
        var productDivs = document.querySelectorAll(".anime");

        productDivs.forEach(function (div) {
            var cim = div.querySelector("h2").textContent.toLowerCase();
            if (cim.includes(szoveg)) {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        });
    });
</script>
</body>
</html>