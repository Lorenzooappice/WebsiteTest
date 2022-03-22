<?php 
include '../Bootstrap/header.php';
session_start();
include("DB_create.php");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../FileCss/header.css">
</head>
<body>
<?php 
$genere = $_POST["genere"];
$_SESSION["genere"]=$genere;

if ($genere == "Fantascienza") {
 $query= "SELECT A.titolo, A.anno, A.durata, A.trama, A.linktrailer FROM film A, generi B WHERE A.idgenere = B.id_genere AND A.idgenere= 1";

$results = $conn -> query($query);
echo'<table class="table table-hover">
  <thead>
    <tr bgcolor="btn btn-dark">
      <th scope="col">Titolo</th>
      <th scope="col">Anno</th>
      <th scope="col">Durata</th>
      <th scope="col">Trama</th>
      <th scope="col">Link trailer</th>
    </tr>
  </thead>';
while ($row = $results -> fetch_assoc()) {
	$linkref=$row["linktrailer"];
	echo'
  <tbody>
   <tr class="table-light">
      <th scope="row">'.$row["titolo"].'</th>
      <td>'.$row["anno"].'</td>
      <td>'.$row["durata"].'</td>
      <td>'.$row["trama"].'</td>
      <td> <a class="btn btn-dark" href="'.$linkref.'">VIDEO</a></td>
   </tr>
     </tbody>';
}
echo'</table>';
}

if ($genere == "Horror") {
 $query= "SELECT A.titolo, A.anno, A.durata, A.trama, A.linktrailer FROM film A, generi B WHERE A.idgenere = B.id_genere AND A.idgenere= 2";

$results = $conn -> query($query);
echo'<table class="table table-hover">
  <thead>
    <tr bgcolor="btn btn-dark">
      <th scope="col">Titolo</th>
      <th scope="col">Anno</th>
      <th scope="col">Durata</th>
      <th scope="col">Trama</th>
      <th scope="col">Link trailer</th>
    </tr>
  </thead>';
while ($row = $results -> fetch_assoc()) {
	$linkref=$row["linktrailer"];
	echo'
  <tbody>
   <tr class="table-light">
      <th scope="row">'.$row["titolo"].'</th>
      <td>'.$row["anno"].'</td>
      <td>'.$row["durata"].'</td>
      <td>'.$row["trama"].'</td>
      <td> <a class="btn btn-dark" href="'.$linkref.'">VIDEO</a></td>
   </tr>
     </tbody>';
}
echo'</table>';
}

if ($genere == "Romantico") {
 $query= "SELECT A.titolo, A.anno, A.durata, A.trama, A.linktrailer FROM film A, generi B WHERE A.idgenere = B.id_genere AND A.idgenere= 3";

$results = $conn -> query($query);
echo'<table class="table table-hover">
  <thead>
    <tr bgcolor="btn btn-dark">
      <th scope="col">Titolo</th>
      <th scope="col">Anno</th>
      <th scope="col">Durata</th>
      <th scope="col">Trama</th>
      <th scope="col">Link trailer</th>
    </tr>
  </thead>';
while ($row = $results -> fetch_assoc()) {
	$linkref=$row["linktrailer"];
	echo'
  <tbody>
   <tr class="table-light">
      <th scope="row">'.$row["titolo"].'</th>
      <td>'.$row["anno"].'</td>
      <td>'.$row["durata"].'</td>
      <td>'.$row["trama"].'</td>
      <td> <a class="btn btn-dark" href="'.$linkref.'">VIDEO</a></td>
   </tr>
     </tbody>';
}
echo'</table>';
}

if ($genere == "Anime") {
 $query= "SELECT A.titolo, A.anno, A.durata, A.trama, A.linktrailer FROM film A, generi B WHERE A.idgenere = B.id_genere AND A.idgenere= 4";

$results = $conn -> query($query);
echo'<table class="table table-hover">
  <thead>
    <tr bgcolor="btn btn-dark">
      <th scope="col">Titolo</th>
      <th scope="col">Anno</th>
      <th scope="col">Durata</th>
      <th scope="col">Trama</th>
      <th scope="col">Link trailer</th>
    </tr>
  </thead>';
while ($row = $results -> fetch_assoc()) {
	$linkref=$row["linktrailer"];
	echo'
  <tbody>
   <tr class="table-light">
      <th scope="row">'.$row["titolo"].'</th>
      <td>'.$row["anno"].'</td>
      <td>'.$row["durata"].'</td>
      <td>'.$row["trama"].'</td>
      <td> <a class="btn btn-dark" href="'.$linkref.'">VIDEO</a></td>
   </tr>
     </tbody>';
}
echo'</table>';
}

if ($genere == "Comico") {
 $query= "SELECT A.titolo, A.anno, A.durata, A.trama, A.linktrailer FROM film A, generi B WHERE A.idgenere = B.id_genere AND A.idgenere= 5";

$results = $conn -> query($query);
echo'<table class="table table-hover">
  <thead>
    <tr bgcolor="btn btn-dark">
      <th scope="col">Titolo</th>
      <th scope="col">Anno</th>
      <th scope="col">Durata</th>
      <th scope="col">Trama</th>
      <th scope="col">Link trailer</th>
    </tr>
  </thead>';
while ($row = $results -> fetch_assoc()) {
	$linkref=$row["linktrailer"];
	echo'
  <tbody>
   <tr class="table-light">
      <th scope="row">'.$row["titolo"].'</th>
      <td>'.$row["anno"].'</td>
      <td>'.$row["durata"].'</td>
      <td>'.$row["trama"].'</td>
      <td> <a class="btn btn-dark" href="'.$linkref.'">VIDEO</a></td>
   </tr>
     </tbody>';
}
echo'</table>';
}

if ($genere == "Drammatico") {
 $query= "SELECT A.titolo, A.anno, A.durata, A.trama, A.linktrailer FROM film A, generi B WHERE A.idgenere = B.id_genere AND A.idgenere= 6";

$results = $conn -> query($query);
echo'<table class="table table-hover">
  <thead>
    <tr bgcolor="btn btn-dark">
      <th scope="col">Titolo</th>
      <th scope="col">Anno</th>
      <th scope="col">Durata</th>
      <th scope="col">Trama</th>
      <th scope="col">Link trailer</th>
    </tr>
  </thead>';
while ($row = $results -> fetch_assoc()) {
	$linkref=$row["linktrailer"];
	echo'
  <tbody>
   <tr class="table-light">
      <th scope="row">'.$row["titolo"].'</th>
      <td>'.$row["anno"].'</td>
      <td>'.$row["durata"].'</td>
      <td>'.$row["trama"].'</td>
      <td> <a class="btn btn-dark" href="'.$linkref.'">VIDEO</a></td>
   </tr>
     </tbody>';
}
echo'</table>';
}

if ($genere == "Avventura") {
 $query= "SELECT A.titolo, A.anno, A.durata, A.trama, A.linktrailer FROM film A, generi B WHERE A.idgenere = B.id_genere AND A.idgenere= 7";

$results = $conn -> query($query);
echo'<table class="table table-hover">
  <thead>
    <tr bgcolor="btn btn-dark">
      <th scope="col">Titolo</th>
      <th scope="col">Anno</th>
      <th scope="col">Durata</th>
      <th scope="col">Trama</th>
      <th scope="col">Link trailer</th>
    </tr>
  </thead>';
while ($row = $results -> fetch_assoc()) {
	$linkref=$row["linktrailer"];
	echo'
  <tbody>
   <tr class="table-light">
      <th scope="row">'.$row["titolo"].'</th>
      <td>'.$row["anno"].'</td>
      <td>'.$row["durata"].'</td>
      <td>'.$row["trama"].'</td>
      <td> <a class="btn btn-dark" href="'.$linkref.'">VIDEO</a></td>
   </tr>
     </tbody>';
}
echo'</table>';
}


?>
</body>
</html>