<?php
if($_REQUEST['submit']){
$name = $_POST['name'];
if(empty($name)){
	$make = '<h4>Le champs est vide!</h4>';
}else{
	$make = '<h4>Rien trouve!</h4>';
	$sele = "SELECT * FROM videogames WHERE name LIKE '%$name%'";
	$result = mysql_query($sele);
	
	if($mak = mysql_num_rows($result) > 0){
		while($row = mysql_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['id'];
		echo '<br> name						: '.$row['name'];
		echo '</h4>';
	}
}else{
echo'<h2> Search Result</h2>';
print ($make);
}
mysql_free_result($result);
mysql_close($conn);
}
}
?>
