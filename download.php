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
  <link rel="stylesheet" href="<?php echo $assetsFolder; ?>/css/custom.css" />
  <link rel="stylesheet" href="<?php echo $assetsFolder; ?>/css/main.css" />
  <link rel="stylesheet" href="<?php echo $assetsFolder; ?>/css/color-picker.css" />
  <link rel="icon" href="<?php echo $assetsFolder; ?>/images/logo-icon.svg">
  <title>DOMINATOR.DOMAINS | Download </title>
</head>
<body>
  <div class="mainContainer">
    <!-- header start -->
    <header class="headerSection">
      <div class="autoContainer">
        <div class="headerSection__inner">
          <div class="headerSection__inner-logo">
            <a href="../">
              <img src="<?php echo $assetsFolder; ?>/images/logo.svg" alt="" />
            </a>
          </div>
          <div class="headerSection__inner-group">
            <a href="./convert.php" class="button button--primary _xlg"><span>Back</span></a>
            <button class="button button--primary _xlg" id="howMenuBtn">
              <span>How it works</span>
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
    <!-- section start -->
    <section class="menuSection" id="howMenu">
      <div class="autoContainer">
        <div class="menuSection__inner">
          <div class="menuSection__inner-title">
            How to convert a Domain name to an NFT Instantly.
          </div>
          <div class="menuSection__inner-buttons" id="tabBtns">
            <button class="button button--border active" data-event="tabBtn" data-parent="#tabBtns">
              <span>Step 1</span>
            </button>
            <button class="button button--border" data-event="tabBtn" data-parent="#tabBtns">
              <span>Step 2</span>
            </button>
            <button class="button button--border" data-event="tabBtn" data-parent="#tabBtns">
              <span>Step 3</span>
            </button>
            <button class="button button--border" data-event="tabBtn" data-parent="#tabBtns">
              <span>Step 4</span>
            </button>
            <div class="menuSection__popup">
              Select the suitable background from the selection
            </div>
            <div class="menuSection__popup">
              Select the proper font, color and style from the next section
            </div>
            <div class="menuSection__popup">
              The choices and the text will appear on the right side.
            </div>
            <div class="menuSection__popup">
              If you are satisfied press "Convert Domain Name to NFT" button.
              In the next screen you will be able to mint your NFT.
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section end -->
    <section class="createNft" style="align-self: center;">
        <img src="<?php echo $url; ?>" alt="" id="nftBg" style="margin:20px;">
        <div class="hero__inner-banner">
            <div class="hero__inner-apps">
                <div class="" style="position: relative;">
                    <div class="createNft__inner-banner-buttons">
                        <a class="button button--primary" href="<?php echo $url; ?>" download="created_image.png" id="imageDownloadBtn" style="margin:20px; width: -webkit-fill-available;">
                            <span>Download Image</span>
                        </a>
                    </div>
                    <div class="button button--primary color--green _google" style="width: -webkit-fill-available; margin:20px 20px 20px 20px;">
                        <span>Convert Domain Name to NFT</span>
                    </div>
                    <div class="hero__inner-apps-tab _google">
                        Will be live shortly
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
    <script src="<?php echo $assetsFolder; ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $assetsFolder; ?>/js/menu.js"></script>
    <script src="<?php echo $assetsFolder; ?>/js/script1.js"></script>
  </div>
</body>
</html>