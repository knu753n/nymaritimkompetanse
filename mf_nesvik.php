<html lang="nb">
  <head>
  <?php $name = "NYMK"; ?>
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
    <link rel="stylesheet" href="karusell.css" />
    <link rel="stylesheet" href="articles.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a href="index.php">Hjem</a></li>
              <li><a href="#slides">Bilder</a></li>
              <li><a href="#testimonials">Våre samarbeidspartnere</a></li>
              <!--<li><a href="#contact">Nyhetsbrev</a></li>-->
          </ul>
          <h1 class="logo"><?php echo $name; ?></h1>
      </div>
  </nav>
    <section class="showcase-area" id="showcase">
      <div class="showcase-container">
        <h1 class="main-title" id="home">Ny Maritim Kompetanse</h1>
        <p>Ny teknologi inn i det grønne skiftet</p>
        <a href="#slides" class="btn btn-primary">Bilder</a>
      </div>
    </section>

    <section id="about">
      <div class="about-wrapper container">
        <div class="about-text">
          <p class="small">Artikler</p>
          <h2>MF-Nesvik</h2>
          <p>
          NyMK reiste med hybrid fergen MF Nesvik i februar og var så heldige å få en omvisning av mannskapet.<br> 
          Fergen driftes av Norled, er designet av LMG Marin AS og bygget av Westcon Yard.<br> 
          Den har en kapasitet på 80 biler og ca. 300 passasjerer inkludert mannskap.<br>
          Nesvik har to fremdriftslinjer (en i hver ende) som består av batteripakke,<br> 
          omformere og styringselektronikk og elektrisk drevne schottler.<br>
          Vanligvis klarer den seg med lading via ladetårn på anløpene for å dekke driften,<br> 
          men har også mulighet for å kjøre dieselgeneratorer for å kunne lade batteripakkene.<br>
          MF Nesvik er søsterskip til MF Hydra som skal driftes på samme måte,<br> 
          men den kan også driftes på brenselsceller som går på hydrogen.<br> 
          Det er tatt høyde for at MF Nesvik kan bygges om til hydrogen drift på sikt.<br>
          En stor takk til mannskapet som velvillig tok imot oss.
          </p>
        </div>
      </div>
    </section>
    <section id="slides">
      <div class="karusell" data-karusell>
        <button class="karusell-button prev" data-karusell-button="prev">&#8656;</button>
        <button class="karusell-button next" data-karusell-button="next">&#8658;</button>
        <ul data-slides>

          <li class="slide" data-active="true">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/01.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/01.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/01.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/01.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                MF Nesvik til kai, man ser ladetårnet til høyre.
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/02.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/02.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/02.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/02.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Salong under bildekk med kapasitet på ca. 300 passasjerer
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/03.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/03.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/03.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/03.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Kontrollrom for chief med eSEAMatic Blue overvåknings og drifts system
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/04.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/04.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/04.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/04.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Maskinrom midtskips for hjelpesystemer og generatorsett.
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/05.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/05.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/05.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/05.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                eSEAMatic Blue Overvåkning i maskinrom
                </p>
              </div>
            </div>
          </li>
          
          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/06.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/06.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/06.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/06.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Systembilde som viser layout på fremdriftssystemet ombord
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/07.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/07.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/07.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/07.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Motor computer til NOGVA dieselgeneratorsettene
                </p>
              </div>
            </div>
          </li>
          
          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/08.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/08.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/08.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/08.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                2 x NOGVA generatorsett med Scania motor og Stamford generator på hver 480 kW. Da vi var om bord, var de bare kjørt ca. 30 timer siste mnd.
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/09.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/09.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/09.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/09.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Verksted
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/10.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/10.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/10.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/10.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Ett av to tavlerom
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/11.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/11.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/11.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/11.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                2 x batteripakker (forut/akterut) fra Corvus av type Orca Energy på hver 791 kWh, totalt 1582 kWh
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/12.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/12.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/12.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/12.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Klimaanlegg til batterirommet
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/13.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/13.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/13.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/13.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Gassdetektor i batterirom
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/14.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/14.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/14.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/14.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Aktre Schottelrom med elektrisk drevet schottel og hjelpesystemer
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/15.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/15.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/15.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/15.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Utsikt på siden av bro
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/16.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/16.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/16.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/16.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Bro utrusting, fører snur stolen til den retningen han skal kjøre fergen.
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/17.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/17.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/17.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/17.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Stor skjerm for kameraovervåkning
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/18.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/18.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/18.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/18.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Ladetårn på land med plugg
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/19.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/19.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/19.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/19.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Ladeluke åpen, ladeplugg kjøres automatisk for tilkobling
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/20.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/20.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/20.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/20.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                MF Nesvik tilkoblet ladetårnet
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/21.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/21.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/21.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/21.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Lading pågår
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/22.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/22.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/22.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/22.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Ladeluke og ladeplugg tilkoblet
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/23.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/23.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/23.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/23.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                Søsterskip MF Hydra ligger til utrustning for drift på hydrogen, testtur er planlagt i mars 23
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/24.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Phone/24.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/Tablet/24.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/MF-Nesvik/24.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                MF Hydra og hydrogen fylletårn
                </p>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </section>
    <section><p><br></p></section>
    <section id="testimonials">
      <h2 class="testimonial-title">Våre samarbeidspartnere</h2>
      <div class="testimonial-container container">
        <!--<div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://uploads-ssl.webflow.com/638eedf9bea3b0030295c86a/638eedf9bea3b0d3e395c87c_SeamLogo.svg" width="16%" loading="lazy" alt="SEAM Logo">
              <img src="https://img.nymaritimkompetanse.no/Partners/SeamLogo.svg" loading="lazy" alt="SEAM Logo">

                <p class="customer-name">Westcon/SEAM</p>
            </div>
          </div>
          <p class="testimonial-text"></p>
        </div>-->

        <!--<div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
            <img src="https://img.nymaritimkompetanse.no/Partners/Norledlogo.svg" loading="lazy" alt="Norled Logo"/>
              <p class="customer-name">Norled</p>
            </div>
          </div>
          <p class="testimonial-text">
 
          </p>
        </div>-->

        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://img.nymaritimkompetanse.no/Partners/NFKlogo.svg" loading="lazy" alt="Nordland Fylkeskommune Logo" />
              <!-- <p class="customer-name">NFK Sjøtransport</p> -->
            </div>
          </div>
          <p class="testimonial-text">

          </p>
        </div>

        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://img.nymaritimkompetanse.no/Partners/SE_Logo_White_RGB.svg" loading="lazy" alt="SIEMENS ENERGY Logo" />
              <!--<p class="customer-name">Siemens energy</p>-->
            </div>
          </div>
        </div>


        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://img.nymaritimkompetanse.no/Partners/Corvus-logo.svg" loading="lazy" alt="Corvus Energy Logo" />
              <!-- <p class="customer-name">Corvus Energy</p> -->
            </div>
          </div>
        </div>
        <div class="testamonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img src="https://img.nymaritimkompetanse.no/Partners/Skoleskipet-Gann-logo-horisontal.svg" loading="lazy" alt="Skoleskipet MS Gann Logo" />
                <!-- <p class="customer-name">Skoleskipet MS Gann</p> -->
            </div>
          </div>
          
         
        </div>
      </div>
    </section>
    <!--
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
    </section>-->
    <footer id="footer">
      <h2><?php echo $name; ?> &copy; all rights reserved | <a href="https://www.facebook.com/groups/722747985846125/">Facebook</a></h2>
    </footer>
  </body>
  <!-- 
    .................../ JS Code for smooth scrolling /...................... -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./smooth_scroll.js"></script>
  <script src="./karusell.js" defer></script>
</html>