<?
include("conectar.php");

$redirecionar        = "sisfamas.php?id=listarcliente";
$redirecionar1       = "sisfamas.php?id=cadastrarcliente";
if($_SERVER["REQUEST_METHOD"] == "POST") {
$nome                    = $_POST["nome"];
$telefone                = $_POST["telefone"];

$sqlvalida = mysql_query("SELECT * FROM tbl_cliente WHERE telefone = '".$telefone."'");

if(mysql_num_rows($sqlvalida) > '0'){
				  echo "<script type='text/javascript'>
                             alert('CLIENTE JÁ CADASTRADO!!!');
                            window.location = '" . $redirecionar1 . "';
                        </script>";
      
$sql = "INSERT INTO tbl_cliente VALUES ('$nome','$telefone')";

$inserir = @mysql_query($sql);
					if ($inserir) {
                                
          echo "<script type='text/javascript'>
                             alert('CLIENTE CADASTRADO COM SUCESSO!!!');
                            window.location = '" . $redirecionar . "';
                        </script>";
   }




}

?>
