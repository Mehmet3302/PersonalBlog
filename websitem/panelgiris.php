<!DOCTYPE html>
<html>
<head>
<title>Admin Panel Girişi</title>
<link rel="shortcut icon" href="img/Sunucu Sahibi.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: linear-gradient(blue,red);
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background: linear-gradient(blue,red);
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
  background: linear-gradient(red,blue);
}

#panelbaslik{
  text-align: center;
  color: red;
}
</style>
</head>
<body>
<form action="panelgiris.php" method="post" style="max-width:500px;margin:auto" name="Form1">
  <h2 id="panelbaslik">Panel Girişi</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="kullanici" required>
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Şifreniz" name="sifre" required>
  </div>

  <button type="submit" class="btn">Giriş Yap</button>
</form>

</body>
</html>


<?php

  session_start();
  if(isset($_POST["kullanici"], $_POST["sifre"]))
  {
    if ($_POST["kullanici"] == "Mehmet1903" && $_POST["sifre"] == "190333")
    {
        $_SESSION["user"] = $_POST["kullanici"];
        header("location: /websitem/panel.php");
    }
    else
    {
      echo "<script>alert('Kullanıcı Adi veya Şifreniz Yanlıştır!!!!')</script>";
    }
}

?>