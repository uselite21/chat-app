<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <form method="post" action="reg.php">
Username:<br>
    <input type="text" name="username"><br>
Password<br>
    <input type="password" name="password"><br>
   Nama:<br>
    <input type="text" name="nama"><br>
    Email:<br>
    <input type="text" name="email"><br>
    Kota Asal:<br>
    <input type="text" name="kota"><br>
<input type="submit">

</form>
    
  </form>
</body>
</html>
<?php
              
if(isset($_POST['username']))
{
$data=$_POST['username'];
$password=$_POST['password'];
$fp = fopen('users.txt', 'a');
$sekat = '|';
fwrite($fp, $data);
fwrite($fp, $sekat);
fwrite($fp, $password);
fclose($fp);
header("location: login.html");
}
?>