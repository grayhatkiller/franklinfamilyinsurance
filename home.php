<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Franklin Family Insurance</title>
</head>

<body>

  <div class="polaroid">
    <a href="home.php" class="hov">
      <img class="mainLogo" src="img/nutsandbolts.jpg" alt="Franklin Family Insurance Logo">
    </a>
    <img class="headerpic" src="img/headerpic.jpg" alt="Franklin Family">
  </div>

  <div id="myNav">

    <ul class="fix">
      <li>
        <a href="index.php" class="hov">
          <img class="logo" src="img/logo.jpg" alt="Website's Logo                                    ">
        </a>
      </li>
      <li>
        <a href="home.php" class="active">Home</a>
      </li>
      <li>
        <a href="about.php" class="hov">About</a>
      </li>
      <li>
        <a href="contact.php" class="hov">Contact</a>
      </li>
      <li>
      <?php if ($_SESSION['admins'] == 1) {
                        echo '<a href="admin.php" class="hov">Admin</a>';
                    } else { echo '
        <a href="faq.php" class="hov">FAQ</a>';}?>
      </li>
      <li id="right">
        <?php if ($_SESSION['login']) {
          echo '<a href="logout.php" class="hov">Logout</a>';
        } else {
          echo '<a href="login.php" class="hov">Login</a>';
        }
        ?>
      </li>
    </ul>
  </div>
  <div class="form">
    <div class="title">Welcome</div>
    <div class="subtitle">Let's Get you a Quote!</div>
    <div class="input-container ic1">
      <input id="firstname" class="input" type="text" placeholder=" " />
      <div class="cut"></div>
      <label for="firstname" class="placeholder">First name</label>
    </div>
    <div class="input-container ic2">
      <input id="lastname" class="input" type="text" placeholder=" " />
      <div class="cut"></div>
      <label for="lastname" class="placeholder">Last name</label>
    </div>
    <div class="input-container ic2">
      <input id="email" class="input" type="text" placeholder=" " />
      <div class="cut cut-short"></div>
      <label for="email" class="placeholder">Email</>
    </div>
    <div class="input-container ic2">
      <input id="email" class="input" type="text" placeholder=" " />
      <div class="cut cut-short"></div>
      <label for="email" class="placeholder">Address</>
    </div>
    <div class="input-container ic2">
      <input id="email" class="input" type="text" placeholder=" " />
      <div class="cut cut-short"></div>
      <label for="email" class="placeholder">Phone</>
    </div>
    <button type="text" class="submit">submit</button>
  </div>
  </div>
  <!--</div>
            Code for sticky navigation bar, removes class "sticky" on scroll down
        -->
  <script type="text/javascript">
    window.onscroll = function() {
      myFunction()
    };

    var nav = document.getElementById("myNav");
    var sticky = nav.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        nav.classList.add("sticky");
      } else {
        nav.classList.remove("sticky");
      }
    }
  </script>
  <footer>
    <div class="footer-gray">
      <div class="footer-custom">
        <div class="footer-lists">
          <div class="footer-list-wrap">
            <h6 class="ftr-hdr-column1">Contact Phone</h6>
            <ul class="ftr-links-sub-column1">
              <li>1-800-443-501</li>
            </ul>
            <h6 class="ftr-hdr-column1">Address</h6>
            <ul class="ftr-links-sub-column1">
              <li>331 E Main Ave<br>Mountain View, OH 43026 USA</li>
            </ul>
            <h6 class="ftr-hdr-column1">Email Us</h6>
            <ul class="ftr-links-sub-column1">
              <li><a href="contact.php" rel="nofollow">franklin@ffinsurance.com</a></li>
            </ul>
          </div>
          <!--/.footer-list-wrap-->
          <div class="footer-list-wrap">
            <h6 class="ftr-hdr-column2">About</h6>
            <ul class="ftr-links-sub-column2">
              <li><a href="about.php" rel="nofollow">Our Company</a></li>
              <li><a href="about.php" rel="nofollow">Our Customers</a></li>
              <li><a href="about.php" rel="nofollow">Our Team</a></li>
              <li><a href="about.php" rel="nofollow"></a>Jobs</li>
            </ul>
          </div>
          <!--/.footer-list-wrap-->
          <div class="footer-list-wrap">
            <h6 class="ftr-hdr-column3">My Account</h6>
            <ul class="ftr-links-sub-column3">
              <art:content rule="!loggedin">
                <li class="ftr-Login"><span class="link login-trigger">Login</span></li>
                <li><span class="link" onclick="link('/asp/secure/your_account/track_orders-asp/_/posters.htm')">Get a Quote</span></li>
                <li><span class="link" onclick="link('/asp/secure/your_account/track_orders-asp/_/posters.htm')">View Documents</span></li>
              </art:content>
            </ul>
          </div>
          <!--/.footer-list-wrap-->
        </div>
        <div class="footer-legal">
          <p>&copy; FranklinFamilyInsurance.com All Rights Reserved. | <a href="/help/privacy-policy.html" rel="nofollow">Privacy Policy</a> | <a href="/help/terms-of-use.html" rel="nofollow">Terms of Use</a> | <a href="/help/terms-of-sale.html" rel="no                                    follow">Terms of Sale</a></p>
          <p>franklinfamilyinsurance.com and Photos [to] Art are trademarks or registered trademarks of FranklinFamily Inc.</p>
        </div>
        <!--/.footer-legal-->

        <!--/.footer-payment-->
      </div>
      <!--/.footer-custom-->
    </div>
    <!--/.footer-gray-->
  </footer>

</body>

</html>