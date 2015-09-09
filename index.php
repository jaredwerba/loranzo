<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form';
		$to = 'example@domain.com';
		$subject = 'Message from Contact Demo ';

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Loranzo Gayle Catering</title>
        <meta name="description" content="">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/animate.css">


    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<section id="menu">
  <div class="menu">
    <div class="icon-close">
      <div class="menu1">
        <span class="menu1-item"></span>
        <span class="menu1-item"></span>
        <span class="menu1-item"></span>
      </div>
    </div>
    <ul>
      <li><a href="#boxes">Menu</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#options">Events</a></li>
      <li><a href="#catering">Contact</a></li>
    </ul>
  </div>
</section>

<section id="hero">
  <div class="container-fluid bg2">
    <div class="container">
      <div class="logo">
        <img src="img/logo.png" class="img-responsive center-block" alt="logo">
      </div>
  <div class="text-center">
    <h1 class="title">the ultimate in private dining</h1>
    <button class="btn btn-slides">MENU</button>
  </div>
  </div>
</section>

<section id="about">
  <div class="container-fluid">
    <div class="row">
      <div class="text-center">
      <div class="col-md-6">
        <h1 class="title-dark">Our Mission</h1>
        <p  ='enter bottom'>is to provide our customers with fresh, innovative and delicious dishes made from locally sourced, all-natural ingredients. We strive to create a unique and memorable experience for each client through custom menu design, attention to detail, and our true love for what we do.</p>
      </div>
      <div class="col-md-6">
        <h1 class="title-dark" ='enter bottom'>OUR COMMUNITY</h1>
        <p  ='enter bottom'>By pledging to source as much of our product as possible locally, we hope to contribute to a sustainable economy both in our home community and those we purchase from. Additionally, we hope that the relationships we build with our customers and our farmers creates a bridge that can stimulate overall local growth and collaboration.</p>
      </div>
    </div>
  </div>
  </div>
</section>

<section id="slider">
  <div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item lazyOwl"><img src="img/bg3.jpg" alt="The Last of us"></div>
    <div class="item lazyOwl"><img src="img/bg4.jpg" alt="GTA V"></div>
    <div class="item lazyOwl"><img src="img/bg5.jpg" alt="Mirror Edge"></div>
  </div>
</section>

<section id="options">
  <div class="container-fluid">
  	<div class="row text-left">
  		<div class="col-md-4">
  			<h1 class="title-dark">
          OUR FOOD
  			</h1>
  			<p>
          Our custom-built menus are made with only the freshest and highest quality ingredients available. We let the seasons determine what we cook, taking advantage of all that New England’s farms have to offer. Whole grains, natural and/or organic meats & dairy, with creative from-scratch sauces round out our delectable dishes. We are always more than happy to accommodate any dietary restrictions, allergies or food preferences.
  			</p>
  			<h1 class="title-dark">
          ALL NATURAL
  			</h1>
  			<p>
          Much of the food people eat today is loaded with chemicals and preservatives. We provide a tasty, all-natural product that we believe will inspire our customers to become more aware of what they eat. We are committed to putting more wholesome meals on your table, so you feel healthy and energized for your events.
  			</p>
  		</div>
  		<div class="col-md-8 text-center">
  			<h1 class="title-dark text-center">
          Seasonal MENU
  			</h3>
        <div class="row">
  			<div class="text-center tabbable" id="tabs-6611">
  				<ul class="nav nav-tabs">
  					<li>
  						<a href="#panel-spring" data-toggle="tab">Spring</a>
  					</li>
  					<li>
  						<a href="#panel-summer" data-toggle="tab">Summer</a>
  					</li>
            <li class="active">
  						<a href="#panel-fall" data-toggle="tab">Fall</a>
  					</li>
            <li>
  						<a href="#panel-winter" data-toggle="tab">Winter</a>
  					</li>
  				</ul>
  				<div class="tab-content">
  					<div class="tab-pane" id="panel-spring">
              <div class="row">
                <div class="col-md-6">
                  <h3>TORTELLINI SPINACH SOUP</h3>
                  <p>Ricotta Tortellini, Baby Spinach, Fire Roasted Tomatoes, Parmesan</p>
                </div>
                <div class="col-md-6">
                  <h4>PEAR & BLUE CHEESE SALAD</h4>
                  <p>Arugula, Pears, Candied Pecans, Buttermilk Blue Cheese, Sherry Vinaigrette</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h4>HEIRLOOM TOMATO SALAD</h4>
                  <p>Great Hill Blue Cheese, Fresh Basil, Sherry Vinaigrette</p>
                </div>
                <div class="col-md-6">
                  <h4>GRILLED LAMB SHANK</h4>
                  <p>Mint Chimichurri, Rum Gelée, Poblano Polenta</p>
                </div>
              </div>
            </div>
  					<div class="tab-pane" id="panel-summer">
              <div class="row">
                <div class="col-md-6">
                  <h4>GAZPACHO</h4>
                  <p>Diced Tomato, Red Chili, Cucumber Puree (Seafood Option)</p>
                </div>
                <div class="col-md-6">
                  <h4>FRUIT SPINACH SALAD</h4>
                  <p>Baby Spinach, Cantaloupe, Strawberry, Blueberry, Shaved Almonds, Raspberry Dressing</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h4>CEVICHE</h4>
                  <p>Fresh Whitefish, Seasoned Shellfish, Citrus and Cilantro Marinade</p>
                </div>
                <div class="col-md-6">
                  <h4>GRILLED SALMON</h4>
                  <p>Marinated in Balsamic & Honey, Topped with Mango Kiwi Relish, Quinoa Salad</p>
                </div>
              </div>
  					</div>
            <div class="tab-pane active" id="panel-fall">
              <div class="row">
                <div class="col-md-6">
                  <h4>SQUASH SOUP</h4>
                  <p>Butternut Squash, Whipped Sriracha Cream, Ginger, Shallots</p>
                </div>
                <div class="col-md-6">
                  <h4>BEET SALAD</h4>
                  <p>Mesclun Greens, Roasted Beets, Gorgonzola, Pickled Shallots, Candied Walnuts, Grape Vinaigrette</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h4>SMOKED FISH CAKES</h4>
                  <p>Maple and Lemon Glaze, Fresh Herbs, Seasoned Cayenne</p>
                </div>
                <div class="col-md-6">
                  <h4>CRANBERRY CHICKEN</h4>
                  <p>Pan Roasted Statler, Cranberry Orange Relish, Lime Cilantro Cream, Wild Rice Pilaf</p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="panel-winter">
              <div class="row">
                <div class="col-md-6">
                  <h4>BLACK BEAN AND CHORIZO</h4>
                  <p>Black Beans, Spicy Chorizo, Yellow Corn, Bell Peppers</p>
                </div>
                <div class="col-md-6">
                  <h4>ARANCINI</h4>
                  <p>Baby Portobello, Gorgonzola Crumble, Thyme, Shallots</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h4>WEDGE SALAD</h4>
                  <p>Iceberg Lettuce, Great Hill Blue Cheese, Slab Bacon, Diced Heirloom Tomato</p>
                </div>
                <div class="col-md-6">
                  <h4>SEARED DUCK BREAST</h4>
                  <p>Pomegranate Reduction, Oyster Mushrooms, Fingerling Potatoes, Braised Kale</p>
                </div>
              </div>
            </div>
  				</div>
  			</div>
  		</div>
      <div class="p20">
      <button class="btn btn-slides">Plan Your Menu</button>
    </div>
  	</div>
  </div>
  </div>
</section>

<section id="catering">
  <div class="clearfix">
    <div class="container">
      <div class="row">
        <div class="text-center catering">
          <h1 class="title-dark">Events We Cater</h1>
        <div class="col-md-6">
          <ul class="catering">
            <h3>
            <li  ='enter bottom'>Weddings</li>
            <li>Intimate Dinners</li>
            <li>Garden Parties</li>
            <li>Holiday Parties</li>
            <li>Birthdays</li></h3>
          </ul>
        </div>
          <div class="col-md-6">
            <ul class="catering">
              <h3>
              <li>Bridal / Baby Showers</li>
              <li>Anniversaries</li>
              <li  ='enter bottom'>Graduation Parties</li>
              <li>Backyard Parties</li>
              <li>Corporate Events</li></h3>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="who">
  <div class="container-fluid">
    <div class="row text-center">
      <h1 class="title-dark">
        Who is loranzo?
      </h1>
      <div class="who">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    </div>
    </div>
</section>

<section id="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">

      </div>
      <div class="col-md-6">
        <div class="container">
      		<div class="row">
      			<div class="col-md-6 col-md-offset-3">
      				<h1 class="page-header text-center">Contact Form Example</h1>
    				<form class="form-horizontal" role="form" method="post" action="index.php">
    					<div class="form-group">
    						<label for="name" class="col-sm-2 control-label">Name</label>
    						<div class="col-sm-10">
    							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
    							<?php echo "<p class='text-danger'>$errName</p>";?>
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="email" class="col-sm-2 control-label">Email</label>
    						<div class="col-sm-10">
    							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
    							<?php echo "<p class='text-danger'>$errEmail</p>";?>
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="message" class="col-sm-2 control-label">Message</label>
    						<div class="col-sm-10">
    							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
    							<?php echo "<p class='text-danger'>$errMessage</p>";?>
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
    						<div class="col-sm-10">
    							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
    							<?php echo "<p class='text-danger'>$errHuman</p>";?>
    						</div>
    					</div>
    					<div class="form-group">
    						<div class="col-sm-10 col-sm-offset-2">
    							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
    						</div>
    					</div>
    					<div class="form-group">
    						<div class="col-sm-10 col-sm-offset-2">
    							<?php echo $result; ?>
    						</div>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>   
      </div>
    </div>
  </div>
</section>


























        <!-- Add your site or application content here -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src='js/scrollReveal.min.js'></script>
        <script>

          window.sr = new scrollReveal();

        </script>
        <script src="js/owl.carousel.js"></script>

        <script>
        $(document).ready(function() {

          $("#owl-demo").owlCarousel({

              navigation : true, // Show next and prev buttons
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem:true,
              lazyLoad: true

              // "singleItem:true" is a shortcut for:
              // items : 1,
              // itemsDesktop : false,
              // itemsDesktopSmall : false,
              // itemsTablet: false,
              // itemsMobile : false

          });

        });
        </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
