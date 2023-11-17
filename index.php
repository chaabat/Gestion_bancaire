<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
   
    <title>CHbank</title>
</head>

<body>

   <header>
        <a href="index.php" class="logo"><img src="logo.png" alt=""></a>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="clients.php">Clients</a>
            <a href="comptes.php">Comptes</a>
            <a href="transactions.php">Transactions</a>
        </nav>
    </header>
    <section>
        <div class="home">
          <span class="main">Bienvenue sur CHBANK Manager</span>
        
        </div>
    </section>
    <footer>
      <p>&#169; BY CHAABAT</p>
    </footer>
</body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chbank";


// Create connection

$creerdb = "create database if not exists chbank" ;



$cnx = new mysqli($servername, $username, $password,$dbname);
// Check connection
if (!$cnx->query($creerdb)) {
    die("Connection failed: " . $cnx->error);
} else {
    // echo "Connected successfully";
}


//client table
$sql = "CREATE TABLE if not exists client (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    dateNais DATE NOT NULL,
    nationalite VARCHAR(30) NOT NULL,
    genre VARCHAR(30) NOT NULL
    )";

$cnx->query($sql);

$sql = "INSERT INTO client (id,nom,prenom,dateNais,nationalite,genre)
VALUES ('', 'indiana', 'jones','1970/11/03','maroccain','female')";

if ($cnx->query($sql) === TRUE) {
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $cnx->error;
}

//comptes table
$sql = "CREATE TABLE if not exists comptes (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  balance VARCHAR(30) NOT NULL,
  devise VARCHAR(30) NOT NULL,
  rib VARCHAR(30) NOT NULL,
  clientid VARCHAR(30) NOT NULL
 
  )";
$date = date("ymdHis");
$rib = $date;

$cnx->query($sql);

$sql = "INSERT INTO comptes (id,balance,devise,rib,clientid)
VALUES ('', '250', 'MAD','$rib','maroccain')";

if ($cnx->query($sql) === TRUE) {
// echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $cnx->error;
}

//transaction table
$sql = "CREATE TABLE if not exists transactions (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  montant VARCHAR(30) NOT NULL,
  types VARCHAR(30) NOT NULL,
  clientID VARCHAR(30) NOT NULL
 
  )";

$cnx->query($sql);

$sql = "INSERT INTO transactions (id,montant,types,clientID)
VALUES ('', '250','credit','maroccain')";

if ($cnx->query($sql) === TRUE) {
// echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $cnx->error;
}



?>

