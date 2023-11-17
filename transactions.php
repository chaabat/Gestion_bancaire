
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CHbank</title>
</head>

<body>

<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chbank";


// Create connection

$creerdb = "create database if not exists chbank" ;


$cnx = new mysqli($servername, $username, $password,$dbname);
?> -->
<header>
<a href="index.php" class="logo"><img src="logo.png" alt=""></a>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="clients.php">Clients</a>
            <a href="comptes.php">Comptes</a>
            <a href="transactions.php">Transactions</a>
        </nav>
    </header>
    
    
<section class ="tabclient">
    <!-- <h1>Clients</h1> -->

    <table >
        <thead>
            <tr >
                <th>ID</th>
                <th>Montant</th>
                <th>Type</th>
                <th>Clien ID</th>
               
            </tr>
<?php
$sql = "SELECT id, montant, types, clientID FROM transactions";
$result = $cnx->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["id"]. " </td>
    <td> " . $row["montant"]. "</td>
    <td> " . $row["types"]. " </td>
    <td>" . $row["clientID"]. "</td>
    </tr>"; 
 }
} else {
 /* echo "0 results";*/
}

$cnx->close();
?>

     </thead>
        
           
    </table>
    </section>
    <footer>
      <p>&#169; BY CHAABAT</p>
    </footer>
</body>
</html>


