

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://html5-templates.com/" />
    <title>Automated Drink Mixer</title>
	<meta name="description" content="A minimalist Bootstrap theme by StartBootstrap. Contains everything you need to get started building your website. All you have to do is change the text and images.">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start Mixing</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href='calibrate.php'>Calibrate Drink Mixer</a>
		    </li>
		    <li>
			<a href='mixdrinks.php'>Mix Drinks</a>

		    </li>
                    <li>
                        <a href="services.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Mix Drinks
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Whiskey Coke</h4>
                    </div>
                    <div class="panel-body">
                        <body>
			<form method='post'> 
			<input type='submit' value='Mix Drink' name='wc'></input>
			</form>
			<br></br>
			</body>
                    </div>
                </div>
            </div>



	    <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Whiskey and Seven</h4>
                    </div>
                    <div class="panel-body">
                        <body>
			<form method='post'> 
			<input type='submit' value='Mix Drink' name='ws'></input>
			</form>
			<br></br>
			</body>
                    </div>
                </div>
            </div>
	


	    <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Rum and Coke</h4>
                    </div>
                    <div class="panel-body">
                        <body>
			<form method='post'> 
			<input type='submit' value='Mix Drink' name='rc'></input>
			</form>
			<br></br>
			</body>
                    </div>
                </div>
            </div>
	


	    <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Vodka and Seven </h4>
                    </div>
                    <div class="panel-body">
                        <body>
			<form method='post'> 
			<input type='submit' value='Mix Drink' name='vs'></input>
			</form>
			<br></br>
			</body>
                    </div>
                </div>
            </div>
	


	    <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Tequila Shot </h4>
                    </div>
                    <div class="panel-body">
                        <body>
			<form method='post'> 
			<input type='submit' value='Mix Drink' name='ts'></input>
			</form>
			<br></br>
			</body>
                    </div>
                </div>
            </div>
	

            
        </div>
        <!-- /.row -->





<?php 
if ($_POST[wc]){
        $result1 = shell_exec('sudo python /home/pi/whiskey.py & sudo python /home/pi/coke.py &');
	echo('Whiskey and Coke Mixed');
}

if ($_POST[ws]){
        $result1 = shell_exec('sudo python /home/pi/whiskey.py & sudo python /home/pi/sevenup.py &');
	echo('Whiskey and SevenUp Mixed');
}

if ($_POST[rc]){
        $result1 = shell_exec('sudo python /home/pi/rum.py & sudo python /home/pi/coke.py &');
	echo('Rum and Coke Mixed');
}

if ($_POST[vs]){
        $result1 = shell_exec('sudo python /home/pi/vodka.py & sudo python /home/pi/sevenup.py &');
	echo('Vodka and SevenUp Mixed');
}

if ($_POST[ts]){
        $result1 = shell_exec('sudo python /home/pi/tequila.py');
	echo('Tequila Trevor Initiated');
}




?>

