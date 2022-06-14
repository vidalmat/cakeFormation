
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title_for_layout; ?></title>

	<?= $this->fetch('css') ?></div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>

  </head>
  <body>
    <!-- Navigation -->
    <div class="title-bar" data-responsive-toggle="realEstateMenu" data-hide-for="small">
      <button class="menu-icon" type="button" data-toggle></button>
      <div class="title-bar-title">Menu</div>
    </div>
    
    <div class="top-bar" id="realEstateMenu">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Lien URL</li>
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="#">My Account</a></li>
          <li><a class="button">Login</a></li>
        </ul>
      </div>
    </div>
    <!-- /Navigation -->

	<header>
		<p>&nbsp;</p>
		<div class="container">
			<div class="row"><?= $this->fetch('content') ?></div>
		</div>
	</header>
    
	<?= $this->fetch('script') ?></div>
  </body>
</html>
