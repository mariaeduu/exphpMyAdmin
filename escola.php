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
$dbname = 'atv_prt_041_bd';



//Make a connection to the database
$conn = mysqli_connect($host, $user, $passw, $dbname) or die ("Unable to connect!");
//Create the SQL query
$query = "SELECT membros.nome, membros.email, membros.escola, membros.funcao, escolas.estado, equipe.nome_equipe from membros, equipe, escolas where membros.num_equipe = equipe.num_equipe and membros.escola = escolas.nome_escola";
$result = mysqli_query( $conn, $query ) or die ("Error in query");

//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
$table[] = $row; //add each row into the table array
}

?>


<table>
<tr>
<td><strong>Membro</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Escola</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Email</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Função</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Estado</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Nome da Equipe</strong></td>



</tr>
<?php

if ($table) { //Check if there are any rows to be displayed
//Retrieve each element of the array
foreach($table as $d_row) {

?>


<tr>

<td><?php echo($d_row["nome"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["escola"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["email"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["funcao"]); ?></td>
<td><?php echo($d_row["num_equipe"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["nome_escola"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["estado"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["num_equipe"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["nome_equipe"]); ?></td>
<td width="10">&nbsp;</td>

</tr>

<?php

}
}

?>
</table>