<!DOCTYPE html>

<html> <head>
<meta charset="utf-8" />

<title>Exibe os feedbacks</title>

</head> <body>
<h1>Feedback do Usuário</h1>

<?php
//Database connection details to mySQL
$host = 'localhost'; 
$user = 'aluno'; 
$passw = 'aluno'; 
$dbname = 'atv_prt_043_bd';



//Make a connection to the database
$conn = mysqli_connect($host, $user, $passw, $dbname) or die ("Unable to connect!");
//Create the SQL query
$query = "SELECT auto_id, fabricante, ano_fabricacao, quilometragem FROM autos ORDER BY auto_id ASC";
$result = mysqli_query( $conn, $query ) or die ("Error in query");

//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
$table[] = $row; //add each row into the table array
}

?>


<table>
<tr>
<td><strong>ID</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Fabricante</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Ano da Fabricação</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Quilometragem</strong></td>

</tr>


<?php

if ($table) { //Check if there are any rows to be displayed
//Retrieve each element of the array
foreach($table as $d_row) {

?>


<tr>
<td><?php echo($d_row["auto_id"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["fabricante"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["ano_fabricacao"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["quilometragem"]); ?></td>
</tr>

<?php

}
}

?>
</table>