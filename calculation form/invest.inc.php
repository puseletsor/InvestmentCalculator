<?php

		include ("dbh.inc.php");

		$amount = $_POST['payment'];
		$months = $_POST['months'];
		
		if (isset($_POST['button1'])) {
		

		$insert = mysqli_query($conn, "insert into investment values('$amount', '$months')");
		if ($insert) {
			echo "Data inserted successful...!!";
		}
		else {
			echo "Data inserted not successful...!!";
		}
	}

	?>