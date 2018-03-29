<?php>
	$servername = "ns01.000webhost.com";
	$username = "id4431762_puzznluk";
	$password = "wX!0!L9MWE";
	$dbName = "id4431762_puzzleadmindb";
	
	//Make connection
	
	$conn = new mysql($servername, $username, $password, $dbName);
	
	//Check connection
	
	if(!$conn){
		die("Connection Failed. " . mysqli_connect_error();
	}else{
		echo("Connection Success");
	}
	
	$sql = "SELECT ID, Name, Surname, Avatar, Date FROM Users";
	$result = mysqli_query($sql);
	
	if(mysql_num_rows($result){
		//Show data for each row
		while($row = mysql_fetch_assoc($result){
			echo "ID: ".$row['ID'] . "Name: " .$row['Name'] . "Surname: " .$row['Avatar'] . "Date: " .$row['Date'] . "<br>";
		}
	}
?>