<?
include("conectar.php");

$redirecionar        = "sisfamas.php?id=listarpizza";
$redirecionar1       = "sisfamas.php?id=cadastrarpizza";
if($_SERVER["REQUEST_METHOD"] == "POST") {
$sabor                    = $_POST["sabor"];
$tamanho                  = $_POST["tamanho"];

$sqlvalida = mysql_query("SELECT * FROM tbl_pizza WHERE sabor = '".$tamanho."'");

if(mysql_num_rows($sqlvalida) > '0'){
				  echo "<script type='text/javascript'>
                             alert('PIZZA JÁ CADASTRADO!!!');
                            window.location = '" . $redirecionar1 . "';
                        </script>";
      
$sql = "INSERT INTO tbl_pizza VALUES ('$sabor','$tamanho')";

$inserir = @mysql_query($sql);
					if ($inserir) {
                                
          echo "<script type='text/javascript'>
                             alert('PIZZA CADASTRADO COM SUCESSO!!!');
                            window.location = '" . $redirecionar . "';
                        </script>";
   }




}

?>
