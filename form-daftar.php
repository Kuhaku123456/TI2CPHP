<!DOCTYPE html>
<html>
<head>
<title>Formulir biodata</title>
</head>
<body>
<header>
<h3>Formulir Biodata</h3>
</header>
<form action="proses-pendaftaran.php" method="POST">
<fieldset>
<p>
<label for="nama">Nama: </label>
<input type="text" name="nama" placeholder="nama lengkap" />
</p>
<p>
<label for="tempat">tempat: </label>
<textarea name="tempat"></textarea>
</p>
<p>
<label for="usia">usia: </label>
<input type="text" name="usia" placeholder="usia" />
</p>
<p>
<label for="jenis_kelamin">jenis kelamin: </label>
<select name="jenis_kelamin">
<option>laki-laki</option>
<option>perempuan</option>
</select>
</p>
<p>
<label for="telepone">telepone: </label>
<input type="text" name="telepone" placeholder="no telepone" />
</p>
<p>
<input type="submit" value="Daftar" name="daftar" />
</p>
</fieldset>
</form>
</body>
</html>