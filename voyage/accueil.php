<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Simplon voyages</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="css/acceuil.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link href="css/contact.css" rel="stylesheet">
</head>


<body>
  <!-- header-->
  <?php include('head.php'); ?>
  <!--fin header-->



  <!-- slider-->
  <div class="container-fluid">
    <div class="row">
      <div id="carouselSlides" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselSlides" data-slide-to="0" class="active"></li>
          <li data-target="#carouselSlides" data-slide-to="1"></li>
          <li data-target="#carouselSlides" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://d2wl5ewipdp1qd.cloudfront.net/elpaisviajes/golfo-persico/1LG.jpg" class="d-block w-100"
              alt="Responsive image">
            <div class="carousel-caption d-md-block">
              <h1> DÉCOUVRIR <br>
                S'ÉVADER | CODER</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://media.routard.com/image/10/5/new-york.1468105.c1000x300.jpg" class="d-block w-100"
              alt="Responsive image">
            <div class="carousel-caption  d-md-block ">
              <h1> DÉCOUVRIR <br>
                S'ÉVADER | CODER</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://www.vehicle-rent.com/vrmedia/images/Geneva.max-2000x1000.jpg" class="d-block w-100"
              alt="Responsive image">
            <div class="carousel-caption  d-md-block">
              <h1> DÉCOUVRIR <br>
                S'ÉVADER | CODER</h1>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselSlides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselSlides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>
    </div>
  </div>
  <!--fin slider-->

<!-- section voyages -->
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-1"></div>
    <div class="col-lg-6 col-md-6 col-sm-10 d-flex justify-content-center">
      <span class="hr font-weight-bold">Top 6 des Destinations 2019</span>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-1"></div>
  </div>
  </div>



  <div class="container ">
    <div class="card-deck ">
      <div class="card">
        <img src="https://cdn.northstarmoving.com/wp-content/uploads/Google-headquarters.jpg" height="192"
          class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Stage en Californie </h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem nesciunt similique
            necessitatibus doloribus</p>
        </div>
        <div class="card-footer">
          <a href="voyagegoogle.php" class="btn btn-primary">En savoir plus <img src="img/info.svg" height="20" class="icon-info"
              alt="..."></a>
        </div>
      </div>
      <div class="card">
        <img src="https://bnetcmsus-a.akamaihd.net/cms/page_media/MYW704IZDDKJ1479758205091.jpg" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Stage en Californie </h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem nesciunt similique
            necessitatibus doloribus</p>
        </div>
        <div class="card-footer">
          <a href="voyageblizzard.php" class="btn btn-primary">En savoir plus <img src="img/info.svg" height="20" class="icon-info"
              alt="..."></a>
        </div>
      </div>
      <div class="card">
        <img src="https://www.twice.com/.image/t_share/MTUxMTI0NzUxMzM2MjE5OTM4/article.jpg" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Stage à Tokyo</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem nesciunt similique
            necessitatibus doloribus</p>
        </div>
        <div class="card-footer">
          <a href="voyagetokyo.php" class="btn btn-primary">En savoir plus <img src="img/info.svg" height="20" class="icon-info"
              alt="..."></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card-deck">
      <div class="card">
        <img src="https://static01.nyt.com/images/2011/12/03/nyregion/FACEBOOK/FACEBOOK-jumbo.jpg" height="192"
          class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Stage à New York</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem nesciunt similique
            necessitatibus doloribus</p>
        </div>
        <div class="card-footer">
          <a href="voyageny.php" class="btn btn-primary">En savoir plus <img src="img/info.svg" height="20" class="icon-info"
              alt="..."></a>
        </div>
      </div>
      <div class="card">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_9fD4S95PyQmyqhk46NbrZvIzUstWNe3xKCXQt7YiPzG6xgclSw"
          class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Stage à Dubai</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem nesciunt similique
            necessitatibus doloribus</p>
        </div>
        <div class="card-footer">
          <a href="voyagedubai.php" class="btn btn-primary">En savoir plus <img src="img/info.svg" height="20" class="icon-info"
              alt="..."></a>
        </div>
      </div>
      <div class="card">
        <img src="https://pulsedigital.ae/wp-content/uploads/2017/05/Pulse-Logo-.png" height="180" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Stage à Genève</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem nesciunt similique
            necessitatibus doloribus</p>
        </div>
        <div class="card-footer">
          <a href="voyagegeneve.php" class="btn btn-primary">En savoir plus <img src="img/info.svg" height="20" class="icon-info"
              alt="..."></a>
        </div>
      </div>
    </div>
  </div>

<!--fin section voyages-->

  <!-- section com-->


  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-1"></div>
    <div class="col-lg-6 col-md-6 col-sm-10 d-flex justify-content-center">
      <span class="hr font-weight-bold">La parole est aux Simplonien(ne)s</span>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-1"></div>
  </div>
  </div>
  </div>



  <div class="container-fluid">
    <div class="row">
      <div id="carouselSlides" class="carousel slide col-sm-12 col-md-12 col-l2" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-color: white">
            <div class="caption">
              <h1 class="animed fadeInLeftBig">Romain P</h1>
              <center>
                <div class="image-cercle" style="background: url(img/avatar-petit.romain.jpg) no-repeat 0px 0px"></div>
              </center>
              <br>
              <p class="animed fadeInLeftBig">Super stage à DUBAI. Magnifique pays, encore merci Simplon, merci Dubai et
                bonsoir.</p>
              Romain P
            </div>
          </div>
          <div class="carousel-item" style="background-color:white">
            <div class="caption">
              <h1 class="animed fadeInLeftBig">"Benoit C"</h1>
              <center>
                <div class="image-cercle" style="background: url(img/bc.jpg) no-repeat 0px 0px"></div>
              </center>
              <br>
              <p class="animed fadeInLeftBig">Inoubliable stage chez Google. J'y ai enfin trouvé ma voie: médiateur à Simplon.</p>
              Benoit C
            </div>
          </div>
          <div class="carousel-item" style="background-color:white">
            <div class="caption">
              <h1 class="animed fadeInLeftBig">"Romain P"</h1>
              <center>
                <div class="image-cercle" style="background: url(img/avatar-petit.romain.jpg) no-repeat 0px 0px"></div>
              </center>
              <br>
              <p class="animed fadeInLeftBig">Super stage à DUBAI. Magnifique pays, encore merci Simplon, merci Dubai et
                bonsoir.</p>
              Romain P
            </div>
          </div>
          <div class="carousel-item" style="background-color:white">
            <div class="caption">
              <h1 class="animed fadeInLeftBig">"Benoit C"</h1>
              <center>
                <div class="image-cercle" style="background: url(img/bc.jpg) no-repeat 0px 0px"></div>
              </center>
              <br>
              <p class="animed fadeInLeftBig">Inoubliable stage chez Google. J'y ai enfin trouvé ma voie: médiateur à Simplon.</p>
              Benoit C
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--fin section com-->

  <!-- footer-->

  <?php include('foot.php'); ?>

  <!--fin footer-->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous">
  </script>
</body>

</html>
