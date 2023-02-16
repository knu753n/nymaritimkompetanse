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
              <li><a href="#base">Til nå</a></li>
              <li><a href="#base-menu">Delprosjekter</a></li>
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
          <img src="http://img.nymaritimkompetanse.no/Generell/IMG_3570.JPG" alt="base" />
        </div>
      </div>
    </section>
    <!-- <section id="base">
      <h2>Noe av det vi har gjort</h2>
      <div class="base-container container">
        <div class="base-type fruite">
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
        <div class="base-type vegetable">
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
        <div class="base-type grin">
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
    <section id="base-menu">
      <h2 class="base-menu-heading">Oversikt - deltakere</h2>
      <div class="base-menu-container container">
        <div class="base-menu-item">
          <div class="base-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Børre.png" alt="Børre" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Børre Aasegg</h2>
            <p>Tittel: Prosjektleder</p>
            <p>Arbeidssted: Bodø Maritime</p>
            <p>Fokusområde: Batteri-, Hydrogenteknologi, Hybrid drift, nye drivstoff</p>
            <p>Bakgrunn: MARKOM, Lærer og fagkoordinator Bodin VGS og maritime fagskole.</p>
            <p class="base-bold"> <a href="https://www.fagskoleninordland.no" target="_blank">Nordland Fagskole</a> </p>
          </div>
        </div>

        <div class="base-menu-item">
          <div class="base-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Magne.JPG" alt="Magne" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Magne Mydland</h2>
            <p>Tittel: Kompetanseutvikler</p>
            <p>Arbeidssted: Fagskolen i Agder, Grimstad</p>
            <p>Fokusområde: Batteri-, Hydrogenteknologi, nye drivstoff</p>
            <p>Bakgrunn: Lærer og maskinskjef på sørlandets maritime vgs, elektriker ERV teknikk</p>
            <p class="base-bold"> <a href="https://www.fagskoleniagder.no" target="_blank">Fagskolen i Agder</a> </p>
          </div>
        </div>
        <div class="base-menu-item">
          <div class="base-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Roy.jpg" alt="Roy Lerand" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Roy Lerand</h2>
            <p>Tittle: Media-ansvarlig</p>
            <p>Arbeidssted: Big See</p>
            <p>Fokusområde: Media og videoproduksjon</p>
            <p>Bakgrunn: Big See AS, Tv2</p>
            <p class="base-bold"> <a href="https://no.linkedin.com/in/leraand" target="_blank">Big See</a> </p>
          </div>
        </div>
        <div class="base-menu-item">
          <div class="base-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Atle.jpg" alt="Atle Christiansen" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Atle Martin Christiansen</h2>
            <p>Tittel: Kompetanseutvikler</p>
            <p>Arbeidssted: USN</p>
            <p>Fokusområde: Autonomi og fjernstyring av maritime farkoster</p>
            <p>Bakgrunn: Instituttleder USN, Senioringeniør forsvarets forksningsinstitutt</p>
            <p class="base-bold"> <a href="https://www.usn.no/" target="_blank">Universitetet i sør-øst Norge</a> </p>
          </div>
        </div>
        <div class="base-menu-item">
          <div class="base-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Erlend.jpg" alt="Erlend Etellerannet" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Erlend Nicolay Morland</h2>
            <p>Tittel: Kompetanseutvikler</p>
            <p>Arbeidssted: USN</p>
            <p>Fokusområder: Crew kompetanse, Trening og utdanning for atomdrevne handelsskip</p>
            <p>Bakgrunn: Bachelor in electrical engineering and automation, Master of maritime management (Ongoing)</p>
            <p class="base-bold"> <a href="https://www.usn.no/" target="_blank">Universitetet i sør-øst Norge</a> </p>
          </div>
        </div>
        <div class="base-menu-item">
          <div class="base-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Bjørn-Willy.jpg" alt="Bjørn-willy" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Bjørn-Willy Arntsen</h2>
            <p>Tittel: Kompetanseutvikler</p>
            <p>Arbeidssted: Bodø Maritime</p>
            <p>Fokusområde: Maskiner og motorer</p>
            <p>Bakgrunn: Maskinistlærer</p>
            <p class="base-bold"> <a href="https://www.fagskoleninordland.no" target="_blank">Nordland Fagskole</a> </p>
          </div>
        </div>
        <div class="base-menu-item">
          <div class="base-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Bjørn.jpeg" alt="Bjørn J. Knutsen" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Bjørn Jostein Knutsen</h2>
            <p>Tittel: EDB-Systemansvarlig</p>
            <p>Arbeidssted: Fagskolen i Agder</p>
            <p>Fokusområde: Nettportal, delingsplattform</p>
            <p>Bakgrunn: Fagskolen i Agder, IKT-Agder</p>
            <p class="base-bold"> <a href="https://www.fagskoleniagder.no" target="_blank">Fagskolen i Agder</a> </p>
          </div>
        </div>
        <div class="base-menu-item">
          <div class="base-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Magnus.jpg" alt="Magnus Østlien" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Magnus Østlien</h2>
            <p>Tittel: Student Dekksoffiser</p>
            <p>Studiested: Fagskolen i Agder</p>
            <p>Fokusområde: Studentinnvolvering og tilbakemelding</p>
            <p>Bakgrunn: Matros Hagland shipping, Sommerkadett Ulabrand Marine</p>
            <p class="base-bold"> <a href="https://www.fagskoleniagder.no" target="_blank">Fagskolen i Agder</a> </p>
          </div>
        </div>
        <div class="base-menu-item">
          <div class="base-img">
            <img src="https://img.nymaritimkompetanse.no/Deltakere/Brynjar.jpg" alt="Brynjar" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Brynjar Duesund Valland</h2>
            <p>Tittel: Student Maskinoffiser</p>
            <p>Studeisted: Bodø Maritime</p>
            <p>Fokusområde: Studentinnvolvering og tilbakemelding</p>
            <p>Bakgrunn: Motormann-lærling forsvaret, Matros Fjord 1</p>
            <p class="base-bold"> <a href="https://www.fagskoleninordland.no" target="_blank">Nordland Fagskole</a> </p>
          </div>
        </div>
        <div class="base-menu-item">
          <div class="base-img">
            <!--<img src="https://img.nymaritimkompetanse.no/Deltakere/siluett.svg" alt="Brynjar" />
          </div>
          <div class="base-description">
            <h2 class="base-titile">Brynjar Duesund Valland</h2>
            <p>Tittel: Student Maskinoffiser</p>
            <p>Studeisted: Bodø Maritime</p>
            <p>Fokusområde: Studentinnvolvering og tilbakemelding</p>
            <p>Bakgrunn: Motormann-lærling forsvaret, Matros Fjord 1</p>
            <p class="base-bold"> Nordland Fagskole </p>-->
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