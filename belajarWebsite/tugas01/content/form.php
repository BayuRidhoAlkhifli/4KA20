<div class="form">
	<form class="form_input" method="post" action="content/proses.php">
		<center><h2 style="color: rgba(243, 156, 18,1.0); border-bottom: 1px dotted rgba(243, 156, 18,1.0); padding-bottom: 10px">Register</h2></center>
		<?php
			if (isset($_GET['pass'])) {
				$pass=$_GET['pass'];
				echo '<div><input type="Password" id="form_password" name="txtPassword" placeholder="Ketikan password anda" value="'.$pass.'" tabindex="1" ></div>';
			} else {
				echo '<div><input type="Password" id="form_password" name="txtPassword" placeholder="Ketikan password anda" tabindex="1" required></div>';
			}
			
			if (isset($_GET['cp'])) {
				$cp=$_GET['cp'];
				echo '<div><input type="password" id="form_confirm" name="txtConfirm" placeholder="Ketikan kembali password anda" value="'.$cp.'" tabindex="2" ></div>';
			} else {
				echo '<div><input type="Password" id="form_confirm" name="txtConfirm" placeholder="Ketikan kembali password anda" tabindex="2" required></div>';
			}

			if (isset($_GET['npm'])) {
				$npm=$_GET['npm'];
				echo '<div><input type="text" id="form_npm" name="txtNPM" placeholder="Ketikan NPM anda" value="'.$npm.'" tabindex="3" ></div>';
			} else {
				echo '<div><input type="text" id="form_npm" name="txtNPM" placeholder="Ketikan NPM anda" tabindex="3" required></div>';
			}
			
			if (isset($_GET['nama'])) {
				$nama=$_GET['nama'];
				echo '<div><input type="text" id="form_nama"  name="txtNama" placeholder="Ketikan nama anda" value="'.$nama.'" tabindex="4" ></div>';
			} else {
				echo '<div><input type="text" id="form_nama"  name="txtNama" placeholder="Ketikan nama anda" tabindex="4" required></div>';
			}

			if (isset($_GET['kelas'])) {
				$kelas=$_GET['kelas'];
				echo '<div><input type="text" id="form_kelas"  name="txtKelas" placeholder="Ketikan kelas anda" value="'.$kelas.'" tabindex="5" ></div>';
			} else {
				echo '<div><input type="text" id="form_kelas"  name="txtKelas" placeholder="Ketikan kelas anda" tabindex="5" required></div>';
			}


		?>
		<input type="submit" name="btn_submit" value="Submit">
		<center><a href="content/table.php">Lihat Tabel</a></center>
		<?php
			if (!isset($_GET['register'])) {
				exit();
			} else {
				$registerCheck = $_GET['register'];

				if ($registerCheck == "empty") {
					echo "<p class='error_form'>Anda tidak mengisi semua data!</p>";
					exit();
				} else {
						
			}
		}
		?>
	</form>
</div>