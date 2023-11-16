
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
    echo "Connected successfully";
}



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
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $cnx->error;
}

?>

