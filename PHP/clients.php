
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
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
        <a href="" class="logo">E-banking</a>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="clients.php">Clients</a>
            <a href="">Comptes</a>
            <a href="">Transactions</a>
        </nav>
    </header>
    
<section >
    <h1>Clients</h1>

    <table >
        <thead>
            <tr >
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Nationalité</th>
                <th>genre</th>
            </tr>
<?php
$sql = "SELECT id, nom, prenom, dateNais, nationalite, genre FROM Client";
$result = $cnx->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. " </td><td> " . $row["nom"]. "</td><td> " . $row["prenom"]. " </td><td>" . $row["dateNais"]. "</td><td> " . $row["nationalite"]. "</td><td>" . $row["genre"]. "</td></tr><br>";
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


