<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AnimeHUB</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <label for="requestInput">Kérés:</label>
        <input type="text" id="requestInput" placeholder="Írja ide a kérését">
        <div class="spacer"></div>
        <label for="additionalInput">További információ:</label>
        <textarea id="additionalInput" rows="4" cols="40" placeholder="Ide írhat további részleteket..."></textarea>
        <div class="spacer"></div>
        <button onclick="submitRequest()">Küldés</button>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light spacer layer1" style="margin-bottom: 0px;">
      <a class="navbar-brand" href="#">
        <img src="MicrosoftTeams-image.png" alt="Logo" style="width: 100px; height: 100px; border-Radius: 50%; "/>
        Anime-Hub
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Főoldal </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="animes">Animék</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section3">Kategóriák</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section4">Bejelentkezés</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section4">Regisztráció</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="requestButton" onclick="openPopup()">Kérés küldése</a>
          </li>
        </ul>
      </div>
    </nav>
    <section id="section1" class="section" style="height: 400px; background-color: #002233;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12">
                <div class="anime-content">
                    <button class="arrow-btn" onclick="getRandomAnimeDetails('prev')">
                        <span class="material-symbols-outlined">arrow_back_ios</span>
                    </button>
                    <div class="anime-image" id="animeImageContainer">
                        <img id="animeImage" src="" alt="Anime kep" />
                    </div>
                    <div class="anime-info">
                        <h1 id="animeTitle"></h1>
                        <p>
                            <strong>Kategória:</strong> <span id="animeCategory"></span>
                        </p>
                        <p id="animeDescription"></p>
                    </div>
                    <button class="arrow-btn" onclick="getRandomAnimeDetails('next')">
                        <span class="material-symbols-outlined">arrow_forward_ios</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

    <div id="section2" class="spacer layer2"> <h2>Ujjonan feltöltött animék</h2></div>
    <section id="home" class="sections d-flex justify-content-center align-items-center" style="height: 400px ; background-color: #0066FF;">
    <div class="row" id="anime-list">
        <!-- Az elemek ide kerülnek -->
    </div>
    </section>
    <div class="spacer layer3"></div>
    <section id="section3" class="sections kat" style="height: 400px;">
    <div class="kategoriak d-flex justify-content-center align-items-center text-white">
        <div class="widget text-center">
            <h1>Kategóriák</h1>
            <div class="menu-about-container text-center">
                <ul id="categoryList" class="layoutgrid">
                    <!-- a kategoriakat ide irja ki -->
                </ul>
            </div>
        </div>
    </div>
</section>
    <div class="spacer layer4"><h2>Bejelentkezés és Regisztráció</h2></div>
    <section id="section4"  style="height: 400px ;background-color: #0066FF;  margin-top: 0; padding-top: 0;">
    <div class="container mt-5 d-flex justify-content-center align-items-center" style="height: 400px; margin-top: 0px !important;">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Login</h3>
        </div>
        <div class="card-body">
          <form method="post" action="loginacces.php">
            <div class="form-group">
              <label for="loginUsername">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
              <label for="loginPassword">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Register</h3>
        </div>
        <div class="card-body">
          <form method="post" action="registeracces.php">
            <div class="form-group">
              <label for="registerUsername">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Choose a username">
            </div>
            <div class="form-group">
              <label for="registerPassword">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Choose a password">
            </div>
            <div class="form-group">
              <label for="registerPassword">Email</label>
              <input type="email" class="form-control" id="email" placeholder="choose a new email">
            </div>
            <button type="submit" class="btn btn-success">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    </section>

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

        // Ellenőrizze a méretet az oldal betöltésekor
        checkScreenWidth();

        // Eseménykezelő az ablak átméretezésére
        window.addEventListener('resize', checkScreenWidth);

        function checkScreenWidth() {
            container.innerHTML = ""; // Törölje az elöző tartalmat

            // Ha a képernyő szélessége nagyobb vagy egyenlő, mint 768 pixel
            if (window.innerWidth >= 768) {
                var reversedAnimeList = animelist.reverse();
                var firstFiveAnime = reversedAnimeList.slice(0, 5);

                firstFiveAnime.forEach(function (anime) {
                    var productDiv = createAnimeDiv(anime);
                    container.appendChild(productDiv);
                });
            } else {
                // Ha a képernyő szélessége kisebb, csak az első animét jelenítsük meg
                var firstAnime = animelist[0];
                var productDiv = createAnimeDiv(firstAnime);
                container.appendChild(productDiv);
            }
        }

        function createAnimeDiv(anime) {
            var productDiv = document.createElement("div");
            productDiv.className = "anime";
            productDiv.style.width = "200px";

            var img = document.createElement("img");
            img.src = anime.image_path;
            img.alt = anime.title;
            productDiv.appendChild(img);

            var title = document.createElement("h2");
            title.textContent = anime.title;
            productDiv.appendChild(title);

            return productDiv;
        }
    }
};
xhr.send();
</script>
<script>
    window.onload = function() {
        getRandomAnimeDetails('next');
    };

    var currentIndex = 0;

    function getRandomAnimeDetails(direction) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var animeData = JSON.parse(this.responseText);
                document.getElementById("animeTitle").innerHTML = animeData.title;
                document.getElementById("animeCategory").innerHTML = animeData.category_name;
                document.getElementById("animeDescription").innerHTML = animeData.description;
                document.getElementById("animeImage").src = animeData.image_path;
                document.getElementById("animeCategory").innerHTML = animeData.category_names;
                if (direction === 'next') {
                    currentIndex++;
                } else if (direction === 'prev') {
                    currentIndex--;
                }
            }
        };

        xhr.open("GET", "getRandomAnimeDetails.php?currentIndex=" + currentIndex + "&direction=" + direction, true);
        xhr.send();
    }
</script>
<script>
function fetchAndRenderCategories() {
        fetch('fetch_categories.php')
            .then(response => response.json())
            .then(categories => {
                const categoryList = document.getElementById('categoryList');
                const currentScreenWidth = window.innerWidth;

                if (currentScreenWidth < 768) {
                    categoryList.innerHTML = '';

                    // Legördülő menü létrehozása Bootstrap osztályokkal
                    const selectMenu = document.createElement('select');
                    selectMenu.className = 'form-control';

                    // Kategóriák hozzáadása a legördülő menühöz
                    categories.forEach((category, index) => {
                        // Minden harmadik elem után hozzáadunk egy új 'row' div-et
                        if (index % 3 === 0) {
                            const row = document.createElement('div');
                            row.className = 'row';
                            categoryList.appendChild(row);
                        }

                        const col = document.createElement('div');
                        col.className = 'col-md-4'; // 3 oszlop a Bootstrap grid rendszerében

                        const option = document.createElement('option');
                        option.value = category;
                        option.textContent = category;

                        selectMenu.appendChild(option);
                        col.appendChild(selectMenu);
                        categoryList.lastChild.appendChild(col);
                    });
                } else {
                    const listItems = categories.map(category => {
                        const listItem = document.createElement('li');
                        listItem.className = 'menu-item';

                        const link = document.createElement('a');
                        link.href = category;
                        link.textContent = category;

                        listItem.appendChild(link);
                        return listItem;
                    });

                    categoryList.innerHTML = '';
                    listItems.forEach(item => categoryList.appendChild(item));
                }
            })
            .catch(error => console.error('Error fetching categories:', error));
    }

    document.addEventListener('DOMContentLoaded', fetchAndRenderCategories);

    window.addEventListener('resize', fetchAndRenderCategories);
        var popup = document.getElementById('popup');
        var button = document.getElementById('requestButton');

        function openPopup() {
            popup.style.display = 'block';
        }

        function closePopup() {
            popup.style.display = 'none';
        }

        function submitRequest() {
            var request = document.getElementById('requestInput').value;
            var additionalInfo = document.getElementById('additionalInput').value;
            closePopup();
        }
</script>

</body>
</html>