<?php
//Connessione al server
$conn = new mysqli("localhost","root", "");//localhost-root-password (root la directory dove troverà il server)
if($conn->connect_error)//oppure !$connect
die("Errore - impossibile connettersi al server");
//connessione con il database
  if($conn->select_db('Cinema'))
  {}
  else
{
   $conn->close();
   die("Errore di connessione al database.<br>");
}



$query = "INSERT INTO generi (id_genere,genere) VALUES (1,'Fantascienza')";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");}

$query = "INSERT INTO generi (id_genere,genere) VALUES (2,'Horror')";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");}
$query = "INSERT INTO generi (id_genere,genere) VALUES (3,'Romantico')";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");}

$query = "INSERT INTO generi (id_genere,genere) VALUES (4,'Anime')";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");}
$query = "INSERT INTO generi (id_genere,genere) VALUES (5,'Comico')";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");}
$query = "INSERT INTO generi (id_genere,genere) VALUES (6,'Drammatico')";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");}
$query = "INSERT INTO generi (id_genere,genere) VALUES (7,'Avventura')";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");}

$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (1,2021,'Stowaway','1h 56m','Un team di astronauti in viaggio verso Marte scopre un clandestino a bordo poco dopo il decollo, ma sono già troppo lontani per pensare di poter tornare indietro.','https://www.youtube.com/watch?v=A_apvQkWsVY',1)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("1");}
$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (2,2014,'Interstellar','2h 49m','Durante una tempesta Joseph Cooper ex ingegnere della Nasa e la figlia Murph si imbattono in un curioso fenomeno fisico toccherà a Cooper tentare un viaggio estremo per risolvere la Teoria del tutto e salvare l umanità','https://www.youtube.com/watch?v=EIVMVIr3q3Y',1)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("2");}

$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (3,2019,'Escape Room','1h 39m','Sei sconosciuti visitano un edificio misterioso per provare un gioco che ha come scopo la risoluzione di una serie di enigmi. Presto però si rendono conto che ogni stanza è una elaborata trappola che fa parte di un piano sadico e mortale.','https://www.youtube.com/watch?v=t2U14h20lv4',2)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("3");}
$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (4,2020,'The Grudge','1h 34m','Una giovane madre uccide la propria famiglia nella sua stessa casa. Le indagini mostrano come l edificio sia maledetto e abitato da un fantasma in cerca di vendetta, che condanna i nuovi inquilini a una morte violenta.','https://www.youtube.com/watch?v=6MNAQWZYJeU',2)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("4");}
$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (5,2019,'After','1h 45m','Tessa è una studentessa modello, fidanzata da anni con un bravo ragazzo molto innamorato di lei. Tuttavia, quando incontra il misterioso Hardin Scott, la giovane donna intraprende con lui una relazione, e la sua vita cambia radicalmente.
','https://www.youtube.com/watch?v=baeusCkoMjU',3)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("5");}
$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (6,2019,'Promare','1h 51m','Dopo trent anni dall arrivo dei Burnish, i quali hanno distrutto mezza popolazione, arriva sulla Terra un nuovo gruppo di mutanti, i Rescue. I due capigruppo si sfidano: il perfido Lio Fotia contro Galo Thymos, nuovo membro dei Rescue.','https://www.youtube.com/watch?v=Z-Ir16E7IQ8',4)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("6");}
$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (7,2020,'Miyo','1h 44m','Miyo è una studentessa del secondo anno delle medie che si è innamorata di Hinode Kento, un suo compagno di classe che cerca di evitare in ogni modo le sue sempre più insistenti e stravaganti avance','https://www.youtube.com/watch?v=jF_BjEVuZh0',4)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("7");}
$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (8,2020,'Tolo Tolo','1h 43m','Dopo che il suo ristorante di sushi è fallito miseramente, Checco deve scappare dai suoi creditori e decide di rifugiarsi in Africa, dove si improvvisa cameriere in una struttura alberghiera.','https://www.youtube.com/watch?v=X7nl6aEqHZs',5)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("8");}
$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (9,2021,'Nomadland','1h 50m','Dopo aver perso il marito e il lavoro durante la Grande recessione, la sessantenne Fern lascia la città Empire, Nevada. Fern vuole attraversare gli Stati Uniti occidentali a bordo del suo furgone.
','https://www.youtube.com/watch?v=AFMfuInz-JM',6)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("9");}
$query = "INSERT INTO  film(id_film, anno, titolo, durata, trama, linktrailer, idgenere) VALUES (10,2019,'Jumanji','2h 3m','Quando Spencer torna nel fantastico mondo di Jumanji, gli amici Martha, Fridge e Bethany rientrano nel gioco per riportarlo a casa, ma scoprono che esistono più ostacoli e più pericoli da superare di quanti ne ricordassero.
','https://www.youtube.com/watch?v=rBxcF-r9Ibs',7)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("10");}

$query = "INSERT INTO nazioni(id_nazioni, genere) VALUES (1, 'USA')";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");
 }


$query = "INSERT INTO attori(id_attori, nome, sesso, datanascita, idnazione) VALUES (1,'Anna Kendrick','femminile','1985-08-09',1)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("errore 1");}


$query = "INSERT INTO attori(id_attori, nome, sesso, datanascita, idnazione) VALUES (2,'Matthew McConaughey','maschile','1969-11-04',1)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("errore 2");}

$query = "INSERT INTO interpretato(id_inter, idutente, idattore) VALUES (1,1,1)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");}
$query = "INSERT INTO interpretato(id_inter, idutente, idattore) VALUES (2,2,1)";
if($conn->query($query))
  {}
  else{$conn->close();
   die("");}


   ?>