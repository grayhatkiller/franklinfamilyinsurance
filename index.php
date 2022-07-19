<?php
session_start();
include 'config.php';
if ($_SESSION['login']) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/styles2.css">
        <title>Franklin Family Insurance</title>
    </head>

    <body>
        <div class="polaroid">
            <a href="home.php" class="hov">
                <img class="mainLogo" src="img/nutsandboltAbouts.jpg" alt="Franklin Family Insurance Logo">
            </a>
            <img class="headerpic" src="img/headerpic.jpg" alt="Franklin Family">
        </div>

        <div id="myNav">

            <ul class="fix">
                <li>
                    <a href="index.php" class="active">
                        <img class="logo" src="img/logo.jpg" alt="Website's Logo                                    ">
                    </a>
                </li>
                <li>
                    <a href="home.php" class="hov">Home</a>
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
                    $sql = 'SELECT * from policys where firstname="' . $_SESSION["fname"] . '";';
                    $ret = $db->query($sql);
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        $id = $row['id'];
                        $drivers = $row['drivers'];
                        $policyno = $row['policyno'];
                        $fname = $row['firstname'];
                        $lname = $row['lastname'];
                    }
                    ?>
                </li>
            </ul>
        </div>
        <div>
            <h1><?php echo 'Hello ' . $_SESSION['fname'] .', here is your insurance ID card'; ?></h1>
            <div class="id-card-tag"></div>
            <div class="id-card-tag-strip"></div>
            <div class="id-card-hook"></div>
            <div class="id-card-holder">
                <div class="id-card">
                    <div class="header">
                        <img src="img/headerpic.jpg">
                    </div>
                    <div class="photo">
                        <img src="img/nutsandbolts.jpg">
                    </div>
                    <h2>Name: <?php echo $fname . " " . $lname; ?></h2>
                    <h2>Policy No: <?php echo $policyno; ?></h2>
                    <h2>Drivers: <?php echo $drivers; ?></h2><br>
                    <h2>franklinfamilyinsurance.com</h1>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!--
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
                                <li><a href="/help/talktous.html" rel="nofollow">franklin@ffinsurance.com</a></li>
                            </ul>
                        </div>
                        <!--/.footer-list-wrap-->
                        <div class="footer-list-wrap">
                            <h6 class="ftr-hdr-column2">About</h6>
                            <ul class="ftr-links-sub-column2">
                                <li><a href="/asp/aboutus/default-asp/_/posters.htm" rel="nofollow">Our Company</a></li>
                                <li><a href="http://corporate.art.com/careers" rel="nofollow">Our Customers</a></li>
                                <li><a href="/asp/landing/artistrising" rel="nofollow">Our Team</a></li>
                                <li><a href="/~/art-for-business" rel="nofollow"></a>Jobs</li>
                            </ul>
                        </div>
                        <!--/.footer-list-wrap-->
                        <div class="footer-list-wrap">
                            <h6 class="ftr-hdr-column3">My Account</h6>
                            <ul class="ftr-links-sub-column3">
                                <art:content rule="!loggedin">
                                    <li class="ftr-Login"><span class="link login-trigger">Login</span></li>
                                    <li><span class="link" onclick="link('/asp/secure/your_account/track_orders-asp/_/posters.htm')">Get
                                            a
                                            Quote</span></li>
                                    <li><span class="link" onclick="link('/asp/secure/your_account/track_orders-asp/_/posters.htm')">View
                                            Documents</span></li>
                                </art:content>
                            </ul>
                        </div>
                        <!--/.footer-list-wrap-->
                    </div>
                    <div class="footer-legal">
                        <p>&copy; franklinfamilyinsurance.com All Rights Reserved. | <a href="/help/privacy-policy.html" rel="nofollow">Privacy Policy</a> | <a href="/help/terms-of-use.html" rel="nofollow">Terms
                                of Use</a> |
                            <a href="/help/terms-of-sale.html" rel="nofollow">Terms of Sale</a>
                        </p>
                        <p>FrankklinFamilyInsurance.com and Photos [to] Art are trademarks or registered trademarks of F&F Insurance
                            Inc.</p>
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
<?php
} else {
    header('Location: home.php');
}
?>