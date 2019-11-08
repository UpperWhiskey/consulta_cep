<!DOCTYPE html>

<?php
    $cep = $_GET["cep"];
    $logradouro = $_GET["logradouro"];
    $bairro = $_GET["bairro"];
    $cidade = $_GET["cidade"];
    $estado = $_GET["uf"];
    $ibge = $_GET["ibge"];


     
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "sistemacep";

 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
 // Check connection
 if (!$conn) {
       die("Falha ao conectar: " . mysqli_connect_error());
 }
  
 echo "Connected successfully";
 

 $sql = "INSERT INTO consulta_cep (cep, logradouro,  bairro, estado) VALUES ('$cep', '$logradouro', '$bairro',  '$estado')";

 if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    

</head>
<body>
    <?php echo $cep?><br>
    <?php echo $rua?><br>
    <?php echo $bairro?><br>
    <?php echo $cidade?><br>
    <?php echo $uf?><br>
    <?php echo $ibge?><br>
</body>
</html>