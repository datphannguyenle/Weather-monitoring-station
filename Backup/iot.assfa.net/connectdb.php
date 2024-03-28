<?php
	$sever = "localhost";
	$user = "wseometc_admin";
	$pass = "Lytranquocuy@123";
	$db = "wseometc_nckh";

	$conn = new mysqli($sever, $user, $pass, $db);

	if (!$conn) {
		die("Ket noi db khong thanh cong!" . $conn->connect_error);
	}
	// else echo "ket noi thanh cong";
	$conn->query("set names 'utf8'");
	
?>