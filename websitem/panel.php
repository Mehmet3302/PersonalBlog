<!DOCTYPE html>
<html>
<head>
<title>Admin Paneli</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
}

#baslik{
  text-align:center;
  color:red;
}
</style>
<link rel="shortcut icon" href="img/Sunucu Sahibi.png" type="image/x-icon">
</head>
<body>

<h1 id="baslik">Admin Panel</h1>

<table id="customers">
  <tr>
    <th>Ad ve Soyad</th>
    <th>Telefon</th>
    <th>E Mail</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>

  <?php


    session_start();
    if($_SESSION["user"] == "")
    {
      echo "<script>window.location.href = 'cikis.php'</script>";
    }
    else
    {
      echo "Hoşgeldiniz Sayın = " .$_SESSION['user']."<br><br>";
      echo "<a href='cikis.php'><b>ÇIKIŞ YAP</b></a><br><br><br><br>";
      include("baglanti.php");

      $sec = "Select * From iletisim";
      $sonuc = $baglan -> query($sec);

      if($sonuc -> num_rows > 0)
      {
        while($cek = $sonuc -> fetch_assoc())
        {
          echo "
          <tr>
              <td>".$cek['adsoyad']."</td>
              <td>".$cek['telefon']."</td>
              <td>".$cek['email']."</td>
              <td>".$cek['konu']."</td>
              <td>".$cek['mesaj']."</td>
            </tr>
        
          ";
        }
      }
      else
      {
        echo "Veritabanında Kayıtlı Hiçbir Veri Bulunamamıştır";
      }
    }
  ?>

</table>

</body>
</html>

