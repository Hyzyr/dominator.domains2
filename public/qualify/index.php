<?php
$assetsFolder = '../public/assets';
$name = isset($_POST['domain']) ? $_POST['domain'] : '';
$url = isset($_POST['image']) ? $_POST['image'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo $assetsFolder; ?>/css/main.css" />
  <title>DOMINATOR.DOMAINS | Search Domain</title>
</head>
<body>
  <div class="mainContainer">
    <!-- header start -->
    <header class="headerSection">
      <div class="autoContainer">
        <div class="headerSection__inner">
          <div class="headerSection__inner-logo">
            <img src="<?php echo $assetsFolder; ?>/images/logo.svg" alt="" />
          </div>
          <div class="headerSection__inner-group">
            <button class="button button--primary _xlg" id="howMenuBtn">
              <span>Back</span>
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
    <!-- createNft section start -->
    <section class="createNft">
      <div class="autoContainer">
        <div class="createNft__bg">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="createNft__inner">
          <div class="createNft__inner-content">
            <h1 class="createNft__inner-content-title _lg gradientTitle wow animate fadeInUp" wow-delay=".1s">
              <span>5 Million $DomDom Airdrop </span>
            </h1>
            <div class="createNft__inner-content-body">
              <h4 class="gradientText gradientText--secondary wow animate fadeInUp" wow-delay=".2s">
                <span>How to qualify</span>
              </h4>
              <ul>
                <li class="gradientText gradientText--light wow animate fadeInUp" wow-delay=".3s">
                  <strong>1.</strong>
                  <span>Download the image</span>
                </li>
                <li class="gradientText gradientText--light wow animate fadeInUp" wow-delay=".4s">
                  <strong>2.</strong>
                  <span>Tag 3 friends and tweet the downloaded image with
                    hasthtag #DominatorDomains</span>
                </li>
                <li class="gradientText gradientText--light wow animate fadeInUp" wow-delay=".5s">
                  <strong>3.</strong>
                  <span>
                    Retweet the pinned tweet on our twitter @Domdomdomains
                  </span>
                </li>
                <li class="gradientText gradientText--light wow animate fadeInUp" wow-delay=".6s">
                  <strong>4.</strong>
                  <span>Follow us on twitter @domdomdomains</span>
                </li>
                <li class="gradientText gradientText--light wow animate fadeInUp" wow-delay=".7s">
                  <strong>5.</strong>
                  <span>Visit this link to submit wallet details</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="createNft__inner-banner">
            <div class="createNft__inner-banner-img wow animate zoomIn">
              <div class="createNft__img">
                <img src="<?php echo $url; ?>" alt="" />
                <div class="createNft__img-text">
                  Convert Domain Name to NFT
                </div>
              </div>
            </div>
            <div class="createNft__inner-banner-buttons">
              <a href="<?php echo $url; ?>" class="button button--primary" download="created_image.png"
                id="imageDownloadBtn">
                <span>Download image</span>
              </a>
              <div class="popup__outer active">
                <button type="button" class="button button--primary color--green">
                  <span>Convert Domain Name to NFT</span>
                </button>
                <div class="popup">Will go LIVE after token launch</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section end -->

    <!-- footer end -->
    <footer class="footerSection _sm">
      <div class="autoContainer">
        <div class="footerSection__bg">
          <div class="footerSection__bg-img">
            <img src="<?php echo $assetsFolder; ?>/images/footer-bg.svg" alt="" />
          </div>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="footerSection__inner">
          <div class="footerSection__inner-title">
            <h3><span>Contact Us</span></h3>
          </div>
          <div class="footerSection__inner-links">
            <a href="#" class="iconButton">
              <img src="<?php echo $assetsFolder; ?>/images/icons/git.svg" alt="git" />
            </a>
            <a href="#" class="iconButton">
              <img src="<?php echo $assetsFolder; ?>/images/icons/insta.svg" alt="insta" />
            </a>
            <a href="#" class="iconButton">
              <img src="<?php echo $assetsFolder; ?>/images/icons/M.svg" alt="M" />
            </a>
            <a href="#" class="iconButton">
              <img src="<?php echo $assetsFolder; ?>/images/icons/reddit.svg" alt="reddit" />
            </a>
            <a href="#" class="iconButton">
              <img src="<?php echo $assetsFolder; ?>/images/icons/telegram.svg" alt="telegram" />
            </a>
            <a href="#" class="iconButton">
              <img src="<?php echo $assetsFolder; ?>/images/icons/twitter.svg" alt="twitter" />
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <script src="<?php echo $assetsFolder; ?>/js/menu.js"></script>
    <script src="<?php echo $assetsFolder; ?>/js/wow.js"></script>
    <script>
      new WOW({ boxClass: "animate", animateClass: "animated" }).init();
    </script>
  </div>
</body>
</html>