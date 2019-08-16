<?php

$host = 'localhost'; 
$user = 'aluno'; 
$passw = 'aluno'; 
$dbname = 'atv_prt_043_bd';

//Make a connection to the database
$link = mysqli_connect($host, $user, $passw, $dbname) or die
("Unable to connect!");

$quilometragem = $_POST['quilometragem'];
$fabricante = $_POST['fabricante'];
$ano_fabricacao = $_POST['ano_fabricacao'];

//Create the SQL query
$query = "INSERT INTO autos (quilometragem, fabricante, ano_fabricacao) VALUES ('$quilometragem', '$fabricante', '$ano_fabricacao')";
$result = mysqli_query($link, $query) or die ("Error in query");

mysqli_close($link);

?>
</body>
</html>