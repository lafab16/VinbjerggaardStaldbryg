<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- Ænder her hvis du vil have ny title på fanebladet -->
    <title>Vinbjerggaard-staldbryg om os</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/stylesheet.min.css" rel="stylesheet">

  </head>


  <body>

    <!-- Back to top button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-prim mb-3">Brygget med kærlighed</span>
      <span class="site-heading-lower text-primary">Vinbjerggaard staldbryg</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="beertypes.php">Øl typer
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">Om os</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="gallery.php">Galleri</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="text-prim cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-lower">Kim Fabricius</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              <li class="list-unstyled-item list-hours-item d-flex">
                Email:
                <span class="ml-auto">kim-fabricius@hotmail.com</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                Telefon:
                <span class="ml-auto">+45 2013 8126</span>
              </li>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="text-prim cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-lower">Tommy Hamann</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              <li class="list-unstyled-item list-hours-item d-flex">
                Email:
                <span class="ml-auto">t.hamann@hotmail.com</span>
              </li>
              <li class="list-unstyled-item list-hours-item d-flex">
                Telefon:
                <span class="ml-auto">+45 5077 5157</span>
              </li>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="Billeder/topsmall.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Hvordan det hele startede!</span>
                  <span class="section-heading-lower">Et hjemmebryggeri i en lille stald</span>
                </h2>
                <p class="text-prim">Lysten til at prøve at brygge øl har længe ligget hos os begge, men det var først efter (endnu) et besøg på Frederikssund ølfestival i Januar 2019, at vi blev overbevist om at det var nu vi skulle igang. Vi mødte flere hjemmebryggerer på denne festival som sagde <em>"det er da bare at komme igang"</em> og <em>"så svært er det heller ikke"</em> og lignende opmuntrende ord. Og da to af de lokale Frederikssund bryggere (Morten og Morten) inviterede os til at deltage når de skulle brygge næste gang, ja så slog vi til! Vi brygger alt vores øl i den tidligere stald på Vinbjerggaard i Gerlev, så vores brand blev derfor meget nærligende til <em>"Vinbjerggaard Staldbryg"</em>.</p>
                <p class="text-prim">Da vi begge er meget stor Queen fans og synes at der ligger rigtig mange gode øl-titler gemt i Queens musik, ja så vil de første mange øl blive navngivet efter nogle af de store Queen klassiker.</p>
                <p class="text-prim">Vi brygger kun for sjov, men det er også præcis hvad det er!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
