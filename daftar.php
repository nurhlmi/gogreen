<?php
	if(isset($_GET['user'])) {
		
		if($_GET['user'] == "guru") {
			$user = "Guru";
		}
		
		else if($_GET['user'] == "siswa") {
			$user = "Siswa";
		}
		
		else if($_GET['user'] == TRUE) {
			echo "<script>location=history.back()</script>";
		}
	
	} else {echo "<script>location=history.back()</script>";} 
?>

<!Doctype HTML>
<html>
	<head>
		<title>Daftar <?php echo $user ?></title>
		<link href="style.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body class="daftar"><center>
		<div class="form-daftar">
			<i class="fa fa-fw fa-arrow-left" onclick="history.back()"></i> <b>Daftar <?php echo $user ?></b><br>
			
			<?php if($user == "Siswa"){ ?>
			<form method="post">
				<div class="input">
					<input name="nd" class="form-input" placeholder="Nama Depan" required>
				</div>
				<div class="input">
					<input name="nb" class="form-input" placeholder="Nama Belakang" required>
				</div>
				<div class="input">
					<input name="kode" class="form-input" placeholder="Kode Kelas" minlength="6" maxlength="6" required>
				</div>
				<div class="input">
					<input name="telp" class="form-input" placeholder="Nomor Telepon" minlength="11" required>
				</div>
				<div class="input">
					<input name="email" type="email" class="form-input" placeholder="Email" required>
				</div>
				<div class="input">
					<input name="password" type="password" class="form-input" placeholder="Kata Sandi" required>
				</div>
				<div class="input">
					<input name="repassword" type="password" class="form-input" placeholder="Ulangi Kata Sandi" required>
				</div>
				<div class="input">
					<input type="submit" class="form-submit" value="Buat Akun">
				</div>
			</form>
			
			<?php } else { ?>
			<form method="post">
				<div class="input">
					<input name="telp" class="form-input" placeholder="Nomor Telepon" required>
				</div>
				<div class="input">
					<input name="email" type="email" class="form-input" placeholder="Email" required>
				</div>
				<div class="input">
					<input name="password" type="password" class="form-input" placeholder="Kata Sandi" required>
				</div>
				<div class="input">
					<input name="repassword" type="password" class="form-input" placeholder="Ulangi Kata Sandi" required>
				</div>
				<div class="input">
					<input type="submit" class="form-submit" value="Buat Akun">
				</div>
			</form>
			<?php } ?>
		</div>
	</body>
</html>