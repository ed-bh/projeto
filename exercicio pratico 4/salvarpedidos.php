<?
include("conectar.php");

$redirecionar        = "sisfamas.php?id=listarpedido";
$redirecionar1       = "sisfamas.php?id=cadastrarpedido";
if($_SERVER["REQUEST_METHOD"] == "POST") {
$nome                    = $_POST["nome"];
$pizza                   = $_POST["pizza"];

$sql = "INSERT INTO tbl_pedido VALUES ('$nome','$pizza')";

$inserir = @mysql_query($sql);
					if ($inserir) {

          echo "<script type='text/javascript'>
                             alert('PEDIDO CADASTRADO COM SUCESSO!!!');
                            window.location = '" . $redirecionar . "';
                        </script>";
   }




}

?>
