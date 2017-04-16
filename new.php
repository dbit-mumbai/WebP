<?php

 $_connect= mysqli_connect("localhost","root","","student")or die("couldn't find server");
echo "connected";
	if(isset($_POST['Submit']))
	{
		$sname = $_POST['sname'];

		$mname = $_POST['mname'];

		$lname = $_POST['lname'];

		$fname = $_POST['fname'];

		$Mname = $_POST['Mname'];

        $bday = $_POST['bday'];

        $gen = $_POST['gender'];

        $stream = $_POST['stream'];

		$phy = $_POST['phy'];

		$chem = $_POST['ch'];

		$math = $_POST['math'];

		$eng = $_POST['eng'];

		$sql = "INSERT INTO marksheet VALUES('$sname','$mname','$lname','$fname','$Mname','$bday','$gen','$stream','$phy','$chem','$math','$eng')";

		if(mysqli_query($_connect ,$sql)){
			echo "Successful";
		}
		else{

			echo "UNSUCCESSFUL";
		}

	}




?>
