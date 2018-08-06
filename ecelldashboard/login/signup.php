<!DOCTYPE html>
<html>
<head>
       <title>User Registration</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel ="stylesheet" type ="text/css" href="style.css">
</head>

<body >
 <div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="box-shadow: 0px 2px 5px 0px rgba(84,84,84,1);">
    <div class="container-fluid">
        <div class="navbar-header ">
            <button style="border-style:none;background-color:transparent" type="button" class="navbar-toggle animated pulse collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar" style="background-color: whitesmoke"></span>
						<span class="icon-bar" style="background-color: whitesmoke"></span>
						<span class="icon-bar" style="background-color: whitesmoke"></span>
					</button>
                <a class="navbar-brand"  href="#"><img src="img/logo1.png" class="img-responsive" style="width: 14pc" >
                </a>
        </div>
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 0.996094px;">
					<ul class="nav navbar-nav navbar-right">
						<li class="current"><a href="#about" style="text-align:center">About</a></li>
						<li><a href="speakers.html"  style="text-align:center">Speakers</a></li>
						<li><a href="sponsors.html"  style="text-align:center">Sponsors</a></li>
						<li><a href="#blog" style="text-align:center">Blog</a>
						</li><li><a href="faq.html"  style="text-align:center">FAQ</a></li>
						<li><a href="team.html"  style="text-align:center">team</a></li>
						<li><a href="shirt.html"  style="text-align:center">T-Shirt</a></li>
						<li><a href="gallery.html" style="text-align:center" >Gallery</a></li>
						<li><a href="biz-quiz.html"  style="text-align:center" >Biz Quiz</a></li>
						<li><a href="http://register.ecellmnnit.in"  style="text-align:center">Register</a></li>
						<li><a href="#contact" style="text-align:center">Contact</a></li>
					</ul>
					
				</div>
      </div>
</nav>
   </div>
       <div id="home">
        <div style="padding-top: 3pc">
            <form  method="post" action="includes/signup.inc.php" >

                <div class="header">
                        <h2> Sign Up </h2>
                </div>
		<div class="input-group">
			
                        <input type="text" name="first" size="100%" autocomplete="off" placeholder="Firstname">
		</div>
		<div class="input-group">
			
                    <input type="text" name="last" size="100%" autocomplete="off" placeholder="Lastname">
		</div>
                <div class="input-group">
			
                    <input type="text" name="email" size="100%" autocomplete="off" placeholder="Email">
		</div><div class="input-group">
			
                    <input type="text" name="uname" size="100%" autocomplete="off" placeholder="Username">
		</div>
                <div class="input-group">
                    <input type="password" name="pwd" size="100%"  placeholder="Password">
		</div>
            <div style="padding-top: 5px;">  
                <button type="submit" name="submit" class="btn " style="font-family: sans-serif;width: 100%"  >Sign up</button>
            </div>
            </form>
        </div>
    </div>    
 </body>
</html>
