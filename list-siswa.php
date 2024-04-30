<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="file.css">
</head>
<style>
    </style>
<body>
     <header>
          <h3>Siswa yang sudah mendaftar</h3>
     </header>

     <nav>
         <a href="form-daftar.php">[+] Tambah Baru</a>
     </nav>

     <br>

     <table border="1">
     <thead>
         <tr>
             <th>Id</th>
             <th>Nama</th>
             <th>Tempat</th>
             <th>Usia</th>
             <th>Jenis Kelamin</th>
             <th>Telepone</th>
             <th>Tindakan</th>
         </tr>
     </thead>
     <tbody>


<?php
         $sql = "SELECT * FROM catatan";
         $query = mysqli_query($db, $sql);

         while($siswa = mysqli_fetch_array($query)){
             echo "<tr>";
             echo "<td>".$siswa['id']."</td>";
             echo "<td>".$siswa['nama']."</td>";
             echo "<td>".$siswa['tempat']."</td>";
             echo "<td>".$siswa['usia']."</td>";
             echo "<td>".$siswa['jenis_kelamin']."</td>";
             echo "<td>".$siswa['telepone']."</td>";
             echo "<td>";
             echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
             echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
             echo "</td>";
             echo "</tr>";
         }
         ?>

     </tbody> 
     </table>
     <p>Total: <?php echo mysqli_num_rows($query) ?></p>
     </body>
</html>