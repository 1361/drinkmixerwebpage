
<html>

<br></br>
<a href='index.html'><button>Home Page</button></a>
<br></br>
<a href='mixdrinks.php'><button>Mix Drinks</button></a>
<br></br>



<body>

<br></br>
<p>Select the beverage type  position 1 </p>

<form action='' method='post'>
	<select name= 'beverage1'>
		<option value='none' selected>None</option>
		<option value='whiskey'>Whiskey</option>
		<option value='coke'>Coke</option>
	</select>
	<input type='submit'>
</form>
<br></br>

<br></br>
<p>Select the beverage type  position 2 </p>

<form action='' method='post'>
        <select name= 'beverage2'>
                <option value='none' selected>None</option>
                <option value='whiskey'>Whiskey</option>
                <option value='coke'>Coke</option>
        </select>
	<input type='submit'>
</form>
<br></br>


</body>
</html>

<?php 
switch ($_POST[beverage1]){
	case 'none':
		break;
	case 'whiskey':
		$position1a = 37;
		$position1 = json_encode($position1a);
		$file = '/tmp/whiskey';
		file_put_contents($file, $position1);
		break;
	case 'coke' :
		$position1a = 37;
                $position1 = json_encode($position1a);
                $file = '/tmp/coke';
                file_put_contents($file, $position1);
                break;

}

switch ($_POST[beverage2]){
        case 'none':
                break;
        case 'whiskey':
                $position2a = 35;
                $position2 = json_encode($position2a);
                $file = '/tmp/whiskey';
                file_put_contents($file, $position2);
                break;
        case 'coke' :
                $position2a = 35;
                $position2 = json_encode($position2a);
                $file = '/tmp/coke';
                file_put_contents($file, $position2);
                break;

}




?>
