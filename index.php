<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=webshop", $username, $password);
try {
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

//$data = $conn->query("SELECT * FROM album")->fetchAll();
// and somewhere later:
//foreach ($data as $row) { 
//    echo $row['titel'].  " " .$row['artiest'] ." ". $row['genre'] ." <br />\n";
//} 
?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Restaurant Keyan</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/album/"
    />

    <!-- Bootstrap core CSS -->
    <link href="css/main.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      href="/docs/5.1/assets/img/favicons/apple-touch-icon.png"
      sizes="180x180"
    />
    <link
      rel="icon"
      href="/docs/5.1/assets/img/favicons/favicon-32x32.png"
      sizes="32x32"
      type="image/png"
    />
    <link
      rel="icon"
      href="/docs/5.1/assets/img/favicons/favicon-16x16.png"
      sizes="16x16"
      type="image/png"
    />
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json" />
    <link
      rel="mask-icon"
      href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg"
      color="#7952b3"
    />
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico" />
    <meta name="theme-color" content="#7952b3" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>

  <style>
  #menuToggle {
  display: block;
  position: relative;
  top: 50px;
  left: 50px;
 
  z-index: 1;
 
  -webkit-user-select: none;
  user-select: none;
}
 
#menuToggle a {
  text-decoration: none;
  color: #232323;
 
  transition: color 0.3s ease;
}
 
#menuToggle a:hover {
  color: tomato;
}
 
#menuToggle input {
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -5px;
 
  cursor: pointer;
 
  opacity: 0; /* hide this */
  z-index: 2; /* and place it over the hamburger */
 
  -webkit-touch-callout: none;
}
 
/*
 * Just a quick hamburger
 */
#menuToggle span {
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
 
  background: #cdcdcd;
  border-radius: 3px;
 
  z-index: 1;
 
  transform-origin: 4px 0px;
 
  transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1),
    background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1), opacity 0.55s ease;
}
 
#menuToggle span:first-child {
  transform-origin: 0% 0%;
}
 
#menuToggle span:nth-last-child(2) {
  transform-origin: 0% 100%;
}
 
/* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span {
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #232323;
}
 
/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3) {
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}
 
/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2) {
  transform: rotate(-45deg) translate(0, -1px);
}
 
/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu {
  position: absolute;
  width: 300px;
  margin: -100px 0 0 -50px;
  padding: 50px;
  padding-top: 125px;     
 
  background: #ededed;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
 
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
 
  transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1);
}
 
#menu li {
  padding: 10px 0;
  font-size: 22px;
}
 
/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul {
  transform: none;
}
</style>



  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">
                Add some information about the album below, the author, or any
                other background context. Make it a few sentences long so folks
                can pick up some informative tidbits. Then, link them off to
                some social networking sites or contact information.
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
        <nav role="navigation">
  <div id="menuToggle">
 
    <input type="checkbox" />
 

    <span></span>
    <span></span>
    <span></span>
     
 
    <ul id="menu">
      <a href="#"><li>Home</li></a>
      <a href="#"><li>Over ons</li></a>
      <a href="#"><li>Menu Kaart</li></a>
      <a href="#"><li>Contact</li></a>
    </ul>
  </div>
</nav>
          
        </div>
      </div>
    </header>

    <main>
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Restau Keyan</h1>
            <p class="lead text-muted">
              Welkom op de pagina van onze Restau. Mijn Restau heeft eten van alle culturen.
              Weet je niet waar je wilt eten dan weet je eigenlijk waar je naar toe moet gaan. 
            </p> 
          </div>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



          <?php 
          $data = $conn->query("SELECT * FROM album")->fetchAll();
        // and somewhere later:
foreach ($data as $row) { 
    //echo $row['titel'].  " " .$row['artiest'] ." ". $row['genre'] ." <br />\n";
?>
            <div class="col">
              <div class="card shadow-sm"> 
                <svg
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  xmlns="http://www.w3.org/2000/svg"
                  role="img"
                  aria-label="Placeholder: Thumbnail"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                >
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" />
                  <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                    <?php echo $row['titel'];?>
                  </text>
                </svg>

                <div class="card-body">
                  <p class="card-text">
                    Hier komt gerechttekst.
                  </p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      test

                    </div>
                    <small class="text-muted">Hoofdgerechten</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="container"></div>
            

            <?php
            }
            ?>
            
            
          </div>
        </div>
      </div>
    </main>

    <footer class="text-muted py-5">
      <div class="container">
        <p class="float-end mb-1">
          <a href="#">Back to top</a>
        </p>
        <p class="mb-1">
       Heeft u al interesse? Kom gerust eens een keer langs! Als u ook nog verdere vragen heeft willen wij die met alle liefde antwoorden.
        </p>
        <p class="mb-0">

        </p>
      </div>
    </footer>

    <script
      src="/docs/5.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
