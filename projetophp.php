<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
 echo"<p>";
 $nome=$_GET["nome"];
 $email=$_GET["email"];
 $Telefone=$_GET["Telefone"];
 $Assunto=$_GET["Assunto"];
 $Menssagem=$_GET["Menssagem"];

 echo "Nome: $nome <br>";
 echo "E-mail: $email <br>";
 echo "Telefone: $Telefone <br>";
 echo "Assunto: $Assunto<br>";
 echo "Mensagem:$Menssagem<br>";
 
 $con=mysqli_connect('localhost','root', null,'cadastro');
 
 echo "Mensagem: " . mysqli_get_host_info($con);
 
 $query = "insert into cliente values (null, '$nome', '$email', '$Telefone','$Assunto','$Menssagem')";

 mysqli_query($con,$query);
 
 $sql = mysqli_query($con,"select * from cliente");
 while ($row = mysqli_fetch_assoc($sql)){
	echo "ID:".$row["id"]."<br>";
	echo "Nome:".$row["nome"]."<br>";
	echo "e-mail:".$row["email"]."<br>";
	echo "Telefone:".$row["Telefone"]."<br>";
	echo "Assunto:" .$row["Assunto"]."<br>";
	echo "Menssagem" .$row["Menssagem"]."<br>";
 }
 


 
 ?>
</body>
</html>
	
