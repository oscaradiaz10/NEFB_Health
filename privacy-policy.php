<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEFB Health Plans - FAQ</title>

    <?php include 'sub/links.php'; ?>
 
</head>

<body>

<script>
$(document).ready(function(){
  $(".scrollspy-menu").focus();
  $(":focus").css("background-color", "yellow");
});

// Initialization for ES Users
import { Scrollspy, initMDB } from "mdb-ui-kit";

initMDB({ Scrollspy });
</script>

<?php include 'sub/main-menu.php';?>

<main class="container">
    <div class="row">
        <h1>Privacy Policy</h1>
        <div class="col-lg-3 col-md-12">
            <!-- Scrollspy -->
            <div id="scrollspy-collapsible" class="sticky-top">
                <ul class="nav flex-column scrollspy-menu">
                    <li class="nav-item active" aria-current="true">
                        <a href="#example-1">Notice of Privacy Practices</a>
                    </li>
                    <li class="nav-item">
                        <a href="#example-2">Website</a>
                    </li>
                    <li class="nav-item">
                        <a href="#example-3">Collection and use of personal information</a>
                    </li>
                    <li class="nav-item">
                        <a href="#example-4">Collection and use of browser information and cookies</a>
                    </li>
                    <li class="nav-item">
                        <a href="#example-5">Remarketing</a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy -->
        </div>

        <div class="col-lg-9 col-md-12">
            <!-- Spied element -->
            <div data-mdb-scrollspy-init data-mdb-target="#scrollspy1" data-mdb-offset="0" class="scrollspy-example">
                <section id="example-1">
                    <h3>Notice of Privacy Practices</h3>
                    <p>THIS NOTICE DESCRIBES HOW MEDICAL INFORMATION ABOUT YOU MAY BE USED AND DISCLOSED AND HOW YOU CAN GET ACCESS TO THIS INFORMATION. PLEASE REVIEW IT CAREFULLY AND KEEP ON FILE FOR REFERENCE.</p>
                    <button type="button" class="btn btn-primary">
                        <a href="media/Notice-of-Privacy-Practices_txt.pdf" target="_blank">Notice of Privacy Practices</a>
                    </button>
                </section>
                <section id="example-2">
                    <h3>Website</h3>
                    <p>By using or accessing the Nebraska Farm Bureau website, you are accepting the practices described in this privacy policy. Your use of the website indicates you have read and accepted our privacy policy. Nebraska Farm Bureau reserves the right to update this policy by uploading the new policy directly to the website.</p>
                    <p>Our company is located and our website is hosted in the United States of America and therefore subject to U.S. state and federal law. Our website is intended to serve those in the United States of America. Any questions about our policy or use of your data may be submitted to Nebraska Farm Bureau.</p>
                    <p>This website is not directed to children and therefore does not attempt to collect any personal information from those under the age of 13.</p>
                </section>
                <section id="example-3">
                    <h3>Collection and use of personal information</h3>
                    <p>Any information you provide voluntarily to Nebraska Farm Bureau including registrations, surveys, download requests, or contact forms on the Nebraska Farm Bureau website will be used only in ways you have authorized, such as sending email newsletters. From time to time, we may ask for information that may include your name, e-mail addresses, company name, and phone number. This personally identifiable information is kept confidential. As we value your privacy, we will never give, lease, sell, or otherwise share the information you have given us on our site.</p>
                    <p>Nebraska Farm Bureau does link to other websites not controlled by Nebraska Farm Bureau. Unfortunately, Nebraska Farm Bureau has no control over how these websites protect your privacy or use information you provide once you leave the site. Please visit their individual privacy policies to discover how other websites use your information.</p>
                </section>
                <section id="example-4">
                    <h3>Collection and use of browser information and cookies</h3>
                    <p>Our website uses a third party service, Google Analytics, to collect, monitor and analyze information your browser sends whenever you visit pages on our site in order to improve the Nebraska Farm Bureau website and enhance your user experience. Google Analytics places a cookie on your device to accomplish this. This data may include browser type, your computer's Internet Protocol (“IP”) address, the pages of our site that you visit, when you visit, the page you visited right before accessing our site, time spent on Nebraska Farm Bureau pages, and other statistics. Google Analytics does not collect any personal identifiers such as name or address. From time to time, we may use non-personally-identifying information collected to report, in aggregate, trends and usage of the site.</p>
                    <p>A more detailed explanation of how Google uses data from your browser can be found <a href="https://policies.google.com/privacy" target="_blank">here</a>.</p>
                    <p>You may opt out of providing browsing information to Google Analytics <a href="https://tools.google.com/dlpage/gaoptout/" target="_blank">here</a>.</p>
                </section>
                <section id="example-5">
                    <h3>Remarketing</h3>
                    <p>Nebraska Farm Bureau may use remarketing services such as Google AdWords and Facebook's retargeting platform to advertise on third-party websites. These ads may be based on the specific pages of the Nebraska Farm Bureau website you visit or whether or not you completed a particular task on our site, for example, submitting a contact form.</p>
                    <p>Third-party vendors, including Google AdWords and Facebook, use cookies placed on your device to serve relevant and useful ads to you on other websites. These cookies do not in any way identify you or give access to your mobile device or computer.</p>
                    <p>If you wish to opt-out of remarketing, you may visit the links below.</p>
                    <button type="button" class="btn btn-primary">
                        <a href="https://support.google.com/My-Ad-Center-Help/answer/12155764?hl=en&visit_id=638593469563696253-4083220080&rd=1" target="_blank">Opt Out - Google Remarketing</a>
                    </button>
                    <button type="button" class="btn btn-primary">
                        <a href="https://www.facebook.com/settings/?tab=ads" target="_blank">Opt Out - Facebook Remarketing</a>
                    </button>
                    <p>Opt out of a third-party vendor's use of cookies by visiting the <a href="https://optout.networkadvertising.org/?c=1" target="_blank">Network Advertising Initiative</a> opt-out page.</p>
                </section>
            </div>
            <!-- Spied element -->
        </div>
    </div>
</main>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php include 'sub/components/call-to-action-agent.php'; ?>
        </div>
    </div>
</div>

<?php include 'sub/components/call-to-action-jumbotron.php'; ?>

<?php include 'sub/footer.php'; ?>

</body>
</html>