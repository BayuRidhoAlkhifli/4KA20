<?php 
	if (isset($_POST['btn_submit'])) {
		$pw=$_POST['txtPassword'];
		$cp=$_POST['txtConfirm'];
		$npm=$_POST['txtNPM'];
		$nama=$_POST['txtNama'];
		$kelas=$_POST['txtKelas'];
		
		if (empty($pw) || empty($cp) || empty($npm) || empty($nama) || empty($kelas)) {
			header("Location: ../index.php?register=empty&pass=$pw&npm=$npm&nama=$nama&kelas=$kelas");
			exit();
		} 
		if (!empty($pw) && !empty($npm) && !empty($nama) && !empty($kelas)){
			if ($txtPassword == $txtConfirm) {
				header("Location: ../index.php?register=succes&pass=$pw&cPas=$cp&npm=$npm&nama=$nama&kelas=$kelas");
			} else {
				header("Location: ../index.php?register=succes&pass=$pw&npm=$npm&nama=$nama&kelas=$kelas");
			}
		}
	}
	error_reporting( error_reporting() & ~E_NOTICE )
?>