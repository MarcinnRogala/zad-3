<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <title>Zadanie3</title>
</head>

<body>

  <header class="header">
    <div class="header__hero">
      <span>
        <h1>Contact Us</h1>
      </span>
    </div>
    <div class="header__content">
      <span>Any question or remarks? Just write us a message!</span>
    </div>
  </header>
  <main>
    <footer class="footer">
      <div class="footer__info--hero">
        <span><strong>Contact Information</strong></span>
      </div>
      <div class="footer__info-top">
        <span>Fill up the form and our Team will get back to you within 24
          hours.</span>
      </div>
      <div class="footer__info footer__info__phone-mid">
        <img src="img\phone.png" alt="phone-icon" />
        <span>+0123 4567 8910</span>
      </div>
      <div class="footer__info footer__info__email-mid">
        <img src="img\message.png" alt="email-icon" />
        <span>hello@flowbase.com</span>
      </div>
      <div class="footer__info footer__info__localization-mid">
        <img src="img\lokalizacja.png" alt="localization-icon" />
        <span>102 Street 2714 Don</span>
      </div>
      <div class="footer-empty"></div>
      <div class="footer__info footer__info__media-bot">
        <img src="img\facebook.png" alt="facebook-icon" />
        <img src="img\twitter.png" alt="twitter-icon" />
        <img src="img\instagram.png" alt="instagram-icon" />
        <img src="img\in-icon.png" alt="in-icon" />
      </div>
    </footer>
    <div class="main__section">
      <div class="main__section-top">
        <div class="main__section main__section--input-left">
          <form class="contact" action="index.php" method="post">
            <label for="firstname"><span>First Name</span></label>
            <br />
            <input type="text" id="firstname" name="firstname" required size="24" pattern="[A-Za-z]{3,24}"/>

        </div>
        <div class="main__section main__section--input-right">

          <label for="lastname"><span>Last Name</span></label>
          <br />
          <input type="text" id="lastname" name="lastname" required size="24" pattern="[A-Za-z]{3,24}"/>

        </div>
      </div>
      <div class="main__section-bot">
        <div class="main__section main__section--input-left">

          <label for="email"><span>Mail</span></label>
          <br />
          <input type="email" id="email" name="email" required minlength="8" maxlength="24" size="24" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>

        </div>
      
        <div class="main__section main__section--input-right">

          <label for="phone"><span>Phone</span></label>
          <br />
          <input type="number" id="phone" name="phone" required minlength="9" maxlength="13" size="13" onkeypress="if(event.keyCode>57 || event.keyCode<48)return false"/>

        </div>
      </div>

      <div class="menu"></div>
      <div class="menu menu__info">

        <span><strong>What the of website do you need?</strong></span>
      </div>
      <div class="menu menu__radio">
        <div class="radio--input-top">
          <input class="btn" type="checkbox" name="radiobutton" value="Web Design" />
          <span>Web Design</span>
        </div>
        <div class="radio--input-left">
          <input class="btn" type="checkbox" name="radiobutton" value="Web Development" checked />
          <span>Web Development</span>
        </div>
        <div class="radio--input-right">
          <input class="btn" type="checkbox" name="radiobutton" value="Logo Design" />
          <span>Logo Design</span>
        </div>
        <div class="radio--input-bot">
          <input class="btn" type="checkbox" name="radiobutton" value="Other" />
          <span>Other</span>
        </div>
      </div>
      <div class="menu menu__input">
        <label for="message"><span>Message</span></label>
        <input type="message" id="message" name="message" required minlength="1" maxlength="54" size="54" />
      </div>
      <div class="menu menu__button">
        <button type="submit" value="Submit">Send Message</button>
        </form>
      </div>
    </div>
  </main>
</body>

</html>