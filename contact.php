<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/765557ebc1.js"
      crossorigin="anonymous"></script>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet" />
    <link rel="stylesheet" href="/css/styles.css" />
    <title>Contact | DeluxeNFTs</title>
  </head>
  <body>
    <?php include "header.php" ?>

    <section class="section-1-cont">
      <p class="cont">Contact Us</p>
    </section>

    <section class="section-2-cont">
      <h3 class="inquiries">
        Feel free to drop us a message for any inquiries
      </h3>
      <div class="section-div">
        <!-- <div class="cont-div">
          <h1 class="cont-address">Address:</h1>
          <p class="cont-desc-2">33 Albert Avenue Salina, KS 67401, USA</p>
        </div> -->

        <div class="cont-div">
          <h1 class="cont-address">DeluxeNFTs</h1>
          <p class="cont-desc-2">
           The fast and easiest platform to trade your NFTs
          </p>
        </div>

        <div class="cont-div">
          <h1 class="cont-address">Email Address:</h1>
          <a class="reach-us" href="mailto:support@deluxenfts.online"
            >support@deluxenfts.online</a
          >
        </div>

        <!-- <div class="cont-div">
          <h1 class="cont-address">Phone Address:</h1>
          <a class="reach-us" href="#">Phone: +17249390022</a>
        </div> -->

        <div class="cont-div">
          <h1 class="cont-address">Email Address:</h1>
          <a class="reach-us" href="mailto:support@deluxenfts.online"
            >support@deluxenfts.online</a
          >
        </div>

        <div class="cont-div">
          <h1 class="cont-address">Working Hours:</h1>
          <p class="cont-desc-2">
            Mon - Fri: 24 hours<br />
            Sat - Sun: 24 hours
          </p>
        </div>
      </div>

      <form action="" autocomplete="on">
        <div class="container">
          <div class="form-content">
            <div class="form-block">
              <div class="form-name">
                <label for="fname" class="form-label"
                  >Name</label
                ><br /><br />
                <input
                  type="text"
                  id="fname"
                  name="fname"
                  placeholder="Your fullname"
                  class="text" /><br />
              </div>
              <div class="form-name">
                <label for="email" class="form-label"
                  >Email address</label
                ><br /><br />
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Your email address"
                  autocomplete="on"
                  class="text" />
              </div>
            </div>
            <div class="form-block">
              <div class="form-name">
                <label for="tel" class="form-label"
                  >Phone</label
                ><br /><br />
                <input
                  type="tel"
                  id="tel"
                  name="tel"
                  placeholder="Your Number"
                  class="text" /><br />
              </div>
              <div class="form-name">
                <label for="Subject" class="form-label"
                  >Subject</label
                ><br /><br />
                <input
                  type="text"
                  id="subject"
                  name="subject"
                  autocomplete="off"
                  class="text" />
              </div>
            </div>
            <div class="msg-label">
              <label for="message" class="form-label"
                >Your Message</label
              ><br /><br />
              <textarea
                name=""
                id=""
                cols="154"
                rows="15"
                class="text-area"
                placeholder="Your Message"></textarea>
            </div>
            <div class="check">
              <input
                type="checkbox"
                id="agree"
                name="agree"
                value="checkbox"
                class="checkbox" />
              <label for="agree" class="agree"
                >I agree to the Privacy Policy and Terms of
                Use, and want to receive news.</label
              ><br />
            </div>

            <a href="" class="btn-link">Send message</a>
          </div>
        </div>
      </form>
    </section>

     <?php include "footer.php" ?>
     <script src="js/script.js"></script>

  </body>
</html>
