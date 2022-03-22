<?php
//Connessione al server
$conn = new mysqli("localhost","root", "");//localhost-root-password (root la directory dove troverà il server)
if($conn->connect_error)//oppure !$connect
die("Errore - impossibile connettersi al server");

//creazione del database se non esiste
$query = "CREATE DATABASE IF NOT EXISTS Cinema";
if($conn->query($query))
{}
else
  {
  $conn->close();
  die("Ci sono stati dei problemi nella creazione del database");
  }
//connessione con il database
  if($conn->select_db('Cinema'))
  {}
  else
{
   $conn->close();
   die("Errore di connessione al database.<br>");
}
//creazione di una tabella
$query = "CREATE TABLE IF NOT EXISTS generi(
          id_genere INT(4) NOT NULL,
          genere VARCHAR(30) NOT NULL,
          PRIMARY KEY (id_genere))Engine InnoDB;";
  if($conn->query($query))
{}
  else
{
   $conn->close();
   die("Errore di creazione della tabella generi.<br>");
}

$query = "CREATE TABLE IF NOT EXISTS film(
          id_film INT(4) NOT NULL,
          anno int(4) NOT NULL,
          titolo VARCHAR(30) NOT NULL,
          durata varchar(10) NOT NULL,
          trama varchar(250) NOT NULL,
          linktrailer varchar(80) NOT NULL,
          idgenere int(4) NOT NULL,
          PRIMARY KEY (id_film))Engine InnoDB;";
  if($conn->query($query))
  {}
  else
{
   $conn->close();
   die("Errore di creazione della tabella film.<br>");
}

/*$query = "CREATE TABLE IF NOT EXISTS amministratore(
          NomeUtente varchar(10) not null,
          Password varchar(10) not null,
          PRIMARY KEY (NomeUtente)
         )Engine InnoDB;";
  if($conn->query($query))
  {}
  else
{
   $conn->close();
   die("Errore di creazione della tabella Amministratore.<br>");
}
*/


$query = "CREATE TABLE IF NOT EXISTS interpretato(
          id_inter INT(4) NOT NULL,
          idutente int(4) NOT NULL,
          idattore int(4) not null,
          PRIMARY KEY (id_inter))Engine InnoDB;";
  if($conn->query($query))
 {}
  else
{
   $conn->close();
   die("Errore di creazione della tabella interpretato.<br>");
}


$query = "CREATE TABLE IF NOT EXISTS attori(
          id_attori INT(4) NOT NULL,
          nome VARCHAR(30) NOT NULL,
          sesso VARCHAR(15) NOT NULL,
          datanascita date NOT NULL,
          idnazione INT(4) NOT NULL,
          PRIMARY KEY (id_attori))Engine InnoDB;";
  if($conn->query($query))
  {}
  else
{
   $conn->close();
   die("Errore di creazione della tabella attori.<br>");
}

$query = "CREATE TABLE IF NOT EXISTS nazioni(
          id_nazioni INT(4) NOT NULL,
          genere VARCHAR(30) NOT NULL,
          PRIMARY KEY (id_nazioni))Engine InnoDB;";
  if($conn->query($query))
{}
  else
{
   $conn->close();
   die("Errore di creazione della tabella nazioni.<br>");
}

$query= "ALTER TABLE film
         ADD FOREIGN KEY (idgenere) REFERENCES generi (id_genere)";
         if($conn->query($query))
  {}
  else
{
   $conn->close();
   die("errore creazione alter table 1.<br>");
}

$query= "ALTER TABLE interpretato
         ADD FOREIGN KEY (idattore) REFERENCES attori (id_attori)";
         if($conn->query($query))
 {}
else{$conn->close();
die("errore creazione alter table 2.<br>");}

$query= "ALTER TABLE interpretato
         ADD FOREIGN KEY (idutente) REFERENCES film (id_film)";
         if($conn->query($query))
  {}
  else{$conn->close();
   die("errore creazione alter table 3.<br>");}

$query= "ALTER TABLE attori
         ADD FOREIGN KEY (idnazione) REFERENCES nazioni (id_nazioni)";
         if($conn->query($query))
  {}
  else{$conn->close();
   die("errore creazione alter table 4.<br>");}

?>
