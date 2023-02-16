<html lang="nb">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $name; ?></title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="burger.css" />
  </head>
  <body>
    <?php
    $name = "NYMK";
    ?>
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a href="#home">Hjem</a></li>
              <li><a href="#about">Om</a></li>
              <li><a href="#food">Til nå</a></li>
              <li><a href="#food-menu">Delprosjekter</a></li>
              <li><a href="#testimonials">Våre samarbeidspartnere</a></li>
              <li><a href="#contact">Nyhetsbrev</a></li>
          </ul>
          <h1 class="logo"><?php echo $name; ?></h1>
      </div>
  </nav>
    <section class="showcase-area" id="showcase">
      <div class="showcase-container">
        <h1 class="main-title" id="home">Ny Maritim Kompetanse</h1>
        <p>Ny teknologi inn i det grønne skiftet</p>
        <a href="#deltakere" class="btn btn-primary">Deltakere</a>
      </div>
    </section>

    <section id="about">
      <div class="about-wrapper container">
        <div class="about-text">
          <p class="small">Om Oss</p>
          <h2>Hvem er vi og hva gjør vi</h2>
          <p>
            Vi er en gjeng med forskjellige bakgrunner og utdanninger, som har sett et behov for
            å skaffe opplæringsmatriell for de nye båtene, systemene, drivstoffene og teknologiene
            som er under stadig utvikling. Vi skal i dette prosjektet samle, bygge og produsere
            ny maritim kompetanse. <a href="about.php">Les mer...</a>
          </p>
        </div>
        <div class="about-img">
          <img src="http://img.nymaritimkompetanse.no/Generell/IMG_3570.JPG" alt="food" />
        </div>
      </div>
    </section>
    <!-- <section id="food">
      <h2>Noe av det vi har gjort</h2>
      <div class="food-container container">
        <div class="food-type fruite">
          <div class="img-container">
            <img src="https://i.postimg.cc/Xvh1jxG6/nmk.png" alt="error" />
            <div class="img-content">
              <h3>fruite</h3>
              <a
                href="https://en.wikipedia.org/wiki/Fruit"
                class="btn btn-primary"
                target="blank"
                >learn more</a
              >
            </div>
          </div>
        </div>
        <div class="food-type vegetable">
          <div class="img-container">
            <img src="https://i.postimg.cc/Xvh1jxG6/nmk.png" alt="error" />
            <div class="img-content">
              <h3>vegetable</h3>
              <a
                href="https://en.wikipedia.org/wiki/Vegetable"
                class="btn btn-primary"
                target="blank"
                >learn more</a
              >
            </div>
          </div>
        </div>
        <div class="food-type grin">
          <div class="img-container">
            <img src="https://i.postimg.cc/Xvh1jxG6/nmk.png" alt="error" />
            <div class="img-content">
              <h3>grin</h3>
              <a
                href="https://en.wikipedia.org/wiki/Grain"
                class="btn btn-primary"
                target="blank"
                >learn more</a
              >
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section id="food-menu">
      <h2 class="food-menu-heading">Oversikt - deltakere</h2>
      <div class="food-menu-container container">
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Børre.png" alt="Børre" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Børre Aasegg</h2>
            <p>Tittel: Prosjektleder</p>
            <p>Arbeidssted: Bodø Maritime</p>
            <p>Fokusområde: Batteri-, Hydrogenteknologi, Hybrid drift, nye drivstoff</p>
            <p>Bakgrunn: MARKOM, Lærer og fagkoordinator Bodin VGS og maritime fagskole.</p>
            <p class="food-price"> Nordland Fagskole </p>
          </div>
        </div>

        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Magne.JPG" alt="Magne" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Magne Mydland</h2>
            <p>Tittel: Kompetanseutvikler</p>
            <p>Arbeidssted: Fagskolen i Agder, Grimstad</p>
            <p>Fokusområde: Batteri-, Hydrogenteknologi, nye drivstoff</p>
            <p>Bakgrunn: Lærer og maskinskjef på sørlandets maritime vgs, elektriker ERV teknikk</p>
            <p class="food-price"> Fagskolen i Agder </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/siluett.svg" alt="Roy Lerand" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Roy Lerand</h2>
            <p>Tittle: Media-ansvarlig</p>
            <p>Arbeidssted: Big See</p>
            <p>Fokusområde: Media og videoproduksjon</p>
            <p>Bakgrunn: Big See AS, Tv2</p>
            <p class="food-price"> Big See </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Atle.jpg" alt="Atle Christiansen" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Atle Martin Christiansen</h2>
            <p>Tittel: Kompetanseutvikler</p>
            <p>Arbeidssted: USN</p>
            <p>Fokusområde: Autonomi og fjernstyring av maritime farkoster</p>
            <p>Bakgrunn: Instituttleder USN, Senioringeniør forsvarets forksningsinstitutt</p>
            <p class="food-price"> Universitetet i sør-øst Norge </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/siluett.svg" alt="Erlend Etellerannet" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Erlend Nicolay Morland</h2>
            <p>Tittel: Kompetanseutvikler</p>
            <p>Arbeidssted: USN</p>
            <p>Fokusområder: Crew kompetanse, Trening og utdanning for atomdrevne handelsskip</p>
            <p>Bakgrunn: Bachelor in electrical engineering and automation, Master of maritime management (Ongoing)</p>
            <p class="food-price"> Universitetet i sør-øst Norge </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/siluett.svg" alt="Bjørn-willy" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Bjørn-Willy</h2>
            <p>Tittel: Kompetanseutvikler</p>
            <p>Arbeidssted: Bodø Maritime</p>
            <p>Fokusområde: Maskiner og motorer</p>
            <p>Bakgrunn: Maskinistlærer</p>
            <p class="food-price"> Nordland Fagskole </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Bjørn.jpeg" alt="Bjørn J. Knutsen" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Bjørn Jostein Knutsen</h2>
            <p>Tittel: EDB-Systemansvarlig</p>
            <p>Arbeidssted: Fagskolen i Agder</p>
            <p>Fokusområde: Nettportal, delingsplattform</p>
            <p>Bakgrunn: Fagskolen i Agder, IKT-Agder</p>
            <p class="food-price"> Fagskolen i Agder </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Magnus.jpg" alt="Magnus Østlien" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Magnus Østlien</h2>
            <p>Tittel: Student</p>
            <p>Studiested: Fagskolen i Agder</p>
            <p>Fokusområde: Studentinnvolvering og tilbakemelding</p>
            <p>Bakgrunn: Student dekksofficer</p>
            <p class="food-price"> Fagskolen i Agder </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/siluett.svg" alt="Brynjar" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Brynjar</h2>
            <p>Tittel: Student</p>
            <p>Studeisted: Bodø Maritime</p>
            <p>Fokusområde: Studentinnvolvering og tilbakemelding</p>
            <p>Bakgrunn: Maskiniststudent</p>
            <p class="food-price"> Nordland Fagskole </p>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonials">
      <h2 class="testimonial-title">Våre samarbeidspartnere</h2>
      <div class="testimonial-container container">
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://uploads-ssl.webflow.com/638eedf9bea3b0030295c86a/638eedf9bea3b0d3e395c87c_SeamLogo.svg" width="16%" loading="lazy" alt="SEAM Logo">
                <!-- <p class="customer-name">Westcon/SEAM</p> -->
            </div>
          </div>
          <p class="testimonial-text"></p>
        </div>

        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
            <img src="https://norled.no/Static/img/logo.svg" loading="lazy" width="16%" alt="Norled Logo"/>
              <!-- <p class="customer-name">Norled</p> -->
            </div>
          </div>
          <p class="testimonial-text">
 
          </p>
        </div>

        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://www.nfk.no/kunde/grafikk/50871.NFK-logo-test%20(1).svg" loading="lazy" width="16%" alt="Nordland Fylkeskommune Logo" />
              <!-- <p class="customer-name">NFK Sjøtransport</p> -->
            </div>
          </div>
          <p class="testimonial-text">

          </p>
        </div>

        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Siemens_Energy_logo.svg" loading="lazy" width="16%" alt="SIEMENS ENERGY Logo" />
              <!--<p class="customer-name">Siemens energy</p>-->
            </div>
          </div>
        </div>


        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://corvusenergy.com/wp-content/themes/corvus/assets/images/Corvus-logo.svg" loading="lazy" width="16%" alt="Corvus Energy Logo" />
              <!-- <p class="customer-name">Corvus Energy</p> -->
            </div>
          </div>
        </div>
        <div class="testamonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://www.gann.no/s/gann2019/profile/Skoleskipet-Gann-logo-horisontal.svg" loading="lazy" width="16%" alt="Skoleskipet MS Gann Logo" />
                <!-- <p class="customer-name">Skoleskipet MS Gann</p> -->
            </div>
            <!-- <p class="testimonial-text"></p> -->
          </div>
          <!--
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">

          </p>-->
         
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="contact-container container">
        <div class="contact-img">
          <img src="https://images.pexels.com/photos/357499/pexels-photo-357499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" />
        </div>

        <div class="form-container">
          <h2>Meld deg på nyhetsbrev</h2>
          <input type="text" placeholder="Navn" />
          <input type="email" placeholder="E-Post" />
          <a href="#" class="btn btn-primary">Meld-på</a>
        </div>
      </div>
    </section>
    <footer id="footer">
      <h2><?php echo $name; ?> &copy; all rights reserved</h2>
    </footer>
  </body>
  <!-- 
    .................../ JS Code for smooth scrolling /...................... -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./smooth_scroll.js"></script>
</html>