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
        <a href="#delprosjekter" class="btn btn-primary">Delprosjekter</a>
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
            ny maritim kompetanse
          </p>
        </div>
        <div class="about-img">
          <img src="http://img.nymaritimkompetanse.no/Generell/IMG_3570.JPG" alt="food" />
        </div>
      </div>
    </section>
    <section id="food">
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
    </section>
    <section id="food-menu">
      <h2 class="food-menu-heading">Oversikt - delprosjekter</h2>
      <div class="food-menu-container container">
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://images.pexels.com/photos/8566532/pexels-photo-8566532.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Autonomi</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              quae.
            </p>
            <p class="food-price"> <?php echo $name; ?> </p>
          </div>
        </div>

        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://images.pexels.com/photos/698485/pexels-photo-698485.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="error" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Batteri</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              quae.
            </p>
            <p class="food-price"> <?php echo $name; ?> </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://images.pexels.com/photos/10670941/pexels-photo-10670941.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Hydrogen</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              quae.
            </p>
            <p class="food-price"> <?php echo $name; ?> </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://media.istockphoto.com/id/906720020/photo/science-concept-methane-or-ammonium-molecules-3d-rendered-illustration.jpg?s=612x612&w=is&k=20&c=cPIvvaW_HeAcKmpqWQlKe1GhG9dNgCshR02w4xoDZgs=" alt="" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Ammoniakk</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              quae.
            </p>
            <p class="food-price"> <?php echo $name; ?> </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://images.pexels.com/photos/9962890/pexels-photo-9962890.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" />
          </div>
          <div class="food-description">
            <h2 class="food-titile">Thorium</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              quae.
            </p>
            <p class="food-price"> <?php echo $name; ?> </p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <img src="https://i.postimg.cc/Xvh1jxG6/nmk.png" alt="" />
          </div>
          <div class="food-description">
            <h2 class="food-titile"></h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
              quae.
            </p>
            <p class="food-price"> <?php echo $name; ?> </p>
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
            <a href="/" data-w-id="7ad4b39d-87b1-13ae-b753-615a456eae87" aria-current="page" class="logolink w-nav-brand w--current" aria-label="home"><img src="https://uploads-ssl.webflow.com/638eedf9bea3b0030295c86a/63931627d6b1a3e1dff28b28_Group%2039.svg" loading="lazy" alt="" class="seamicon" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><img src="https://uploads-ssl.webflow.com/638eedf9bea3b0030295c86a/639316265f4f181346db5512_Group%2038.svg" loading="lazy" alt="" class="seamtext"></a>
              <p class="customer-name">Westcon/SEAM</p>
            </div>
          </div>
          <p class="testimonial-text">
          </p>
          </div>
          <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <!--<img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="" />-->
              <p class="customer-name">Norled</p>
            </div>
          </div>
          <p class="testimonial-text">
 
          </p>
        </div>
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <!--<img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="" />-->
              <p class="customer-name">NFK Sjøtransport</p>
            </div>
          </div>
          <p class="testimonial-text">

          </p>
        </div>
        <br>
          <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <!--<img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="" />-->
              <p class="customer-name">Siemens energy</p>
            </div>
          </div>
          <p class="testimonial-text">

          </p>
          </div>
          <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <!--<img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="" />-->
              <p class="customer-name">Corvus Energy</p>
            </div>
          </div>
          <p class="testimonial-text">

          </p>
          </div>
          <div class="customer-detail">
            <div class="customer-photo">
              <!--<img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="" />-->
              <p class="customer-name">Skoleskipet MS Gann</p>
            </div>
            <p class="testimonial-text">

            </p>
          </div>
          <!--
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
        -->
          <p class="testimonial-text">

          </p>
         
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