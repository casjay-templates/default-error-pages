<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta name="generator" content="CasjaysDev" />

  <link rel="shortcut icon" href="//avatars2.githubusercontent.com/u/62282596?s=200&v=4" />

  <link href="//fonts.googleapis.com/css?family=Fira+Sans:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link
    href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css" />

  <link rel="stylesheet" type="text/css" href="/error/css/hacker.css" />
  <link rel="stylesheet" type="text/css" href="/error/css/casjaysdev.css" />

  <link rel="stylesheet" type="text/css"
    href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/darkly/bootstrap.min.css"
    integrity="sha512-YRcmztDXzJQCCBk2YUiEAY+r74gu/c9UULMPTeLsAp/Tw5eXiGkYMPC4tc4Kp1jx/V9xjEOCVpBe4r6Lx6n5dA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" crossorigin="anonymous" defer>
  </script>
  <script src="//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer>
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" defer></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer>
  </script>

  <script src="/error/js/errorpages/isup.js" defer></script>
  <script src="/error/js/errorpages/homepage.js" defer></script>
  <script src="/error/js/errorpages/loaddomain.js" defer></script>
  <script src="//cdn.passprotect.io/passprotect.min.js" defer></script>
  <title>Domain Doesn't Exist</title>
</head>

<body>
  <br /><br />
  <div class="vh-100">
    <div class="c1">
      <h2>UMMMMM</h2>
      <br />
      This site doesn't seem to exist<br />
      <br /><br />
      <img alt="error" height="400" width="400" src="/error/images/oops.gif" />
      <br /><br /><br />
    </div>
    <div class="c5">
      <br />
      <?php
      echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br />";
      echo "IP Address: " . $_SERVER['SERVER_ADDR'] . "<br />";
      ?> <br /><br />
      Linux OsVer: <?php echo shell_exec('cat /etc/*-release'); ?><br />
      ConfigVer: <?php echo shell_exec('cat /etc/casjaysdev/updates/versions/configs.txt'); ?>
      <br /><br />
      Powered by a docker container<br />
      <br />
      <br />
    </div>
  </div>
  <!-- Begin Casjays Developments Footer -->
  <hr />
  <div class="footer footer-custom col-sm-12">
    <div class="footer vh-100">
      <div class="footer-custom fs-5">
        <br />
        <br />
        <br />
        <!-- Begin last updated -->
        <span style="color: skyblue"> REPLACE_LAST_UPDATED_ON_MESSAGE </span>
        <br />
        <br />
        <!-- End last updated -->
        <!-- begin legal block --->
        <div class="legal">REPLACE_COPYRIGHT_FOOTER</div>
        <!-- end legal block --->
        <!-- begin engine block --->
        <div class="text-center" style="color: royalblue">
          <br />
          Made with 💜💜💜💜💜💜 by
          <br />
          <a href="//github.com/casjay" target="_blank" rel="noopener">Jason M. Hempstead (Casjay)</a>
          <br />
          This site is powered by an
          <a href="//github.com/casjay-templates/default-web-assets" target="_blank" rel="noopener">open source </a>theme
        </div>
        <br />
        <!-- end engine block --->
        <br />
        <br />
      </div>
    </div>
  </div>
  <br /><br /><br /><br /><br /><br /><br />
  <!-- Begin Casjays Developments Footer -->
</body>

</html>
