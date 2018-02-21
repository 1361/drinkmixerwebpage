<html>

<br></br>
<a href='index.html'><button>Home Page</button></a>
<br></br>
<a href='calibrate.php'><button>Calibrate Mixer</button></a>
<br></br>
<br></br>

<body>
<form method='post'> 
<input type='submit' value='Mix Drink' name='wc'> Whiskey and Coke </input>
</form>
<br></br>
</body>



</html>


<?php 
if ($_POST[wc]){
        $result1 = shell_exec('sudo python /home/pi/whiskey.py & sudo python /home/pi/coke.py &');
	echo('Whiskey Coke Mixed');
}




?>

