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
          <h2>Skoleskipet Gann</h2>
          <p>
          -tekst-
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
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/01.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/01.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/01.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/01.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/02.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/02.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/02.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/02.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/03.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/03.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/03.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/03.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/04.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/04.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/04.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/04.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/05.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/05.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/05.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/05.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>
          
          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/06.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/06.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/06.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/06.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/07.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/07.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/07.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/07.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>
          
          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/08.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/08.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/08.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/08.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/09.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/09.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/09.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/09.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/10.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/10.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/10.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/10.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/11.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/11.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/11.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/11.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/12.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/12.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/12.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/12.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/13.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/13.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/13.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/13.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/14.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/14.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/14.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/14.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/15.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/15.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/15.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/15.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/16.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/16.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/16.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/16.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

          <li class="slide">
            <img src="https://img.nymaritimkompetanse.no/Sites/Gann/17.jpg" alt=""
              srcset="https://img.nymaritimkompetanse.no/Sites/Gann/Phone/17.jpg 800w,
              https://img.nymaritimkompetanse.no/Sites/Gann/Tablet/17.jpg 1024w,
              https://img.nymaritimkompetanse.no/Sites/Gann/17.jpg 1025w"
              sizes="50vw"
            >
            <div class="overlay">
              <div class="center_text">
                <p>
                -tekst-
                </p>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </section>
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