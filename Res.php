3<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rspuesta";

        $cont = $_POST['cont'];
        
$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn) {
		  die("Falla en la conexón" . mysqli_connect_error());	  
	  }
 
       
echo "Realizando el insert"; 
$sql = "INSERT INTO `respuesta` (`id`, `contesta`) VALUES (NULL, '$cont')";
$rs = mysqli_query($conn, $sql);
if ($rs){
	echo "Contact Records Inserted";
}
else {
	echo(CONNECTION_ABORTED);
}
?>

