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
 $cidade=$_GET["cidade"];
 $foto=$_GET["foto"];
 $sexo=$_GET["sexo"];
 $depoimento=$_GET["depoimento"];

 echo "Nome: $nome <br>";
 echo "E-mail: $email <br>";
 echo "Cidade: $cidade <br>";
 echo "Foto: $foto<br>";
 echo "Sexo: $sexo<br>";
 echo "Depoimento:$depoimento<br>";
 
 $con=mysqli_connect('localhost','root', null,'BDdepoimento');
 
 echo "Mensagem: " . mysqli_get_host_info($con);
 
 $query = "insert into depoimento values (null, '$nome', '$email', '$cidade', '$foto', '$sexo','$depoimento')";

 mysqli_query($con,$query);
 
 $sql = mysqli_query($con,"select * from depoimento");
 while ($row = mysqli_fetch_assoc($sql)){
	echo "ID:".$row["id"]."<br>";
	echo "Nome:".$row["nome"]."<br>";
	echo "E-mail:".$row["email"]."<br>";
	echo "Cidade:".$row["cidade"]."<br>";
	echo "Foto:" .$row["foto"]."<br>";
	echo "Sexo:" .$row["sexo"]."<br>";
	echo "Depoimento" .$row["depoimento"]."<br>";
 }
     ?>


</body>
</html>