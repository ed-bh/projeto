<?php
include("conectar.php");

$redirecionar        = "sisfamas.php?id=listarpizza";

$sabor                    = $_POST["sabor"];
$tamanho                  = $_POST["tamanho"];

$sql = "UPDATE tbl_ppzza SET sabor = '$sabor',
                            tamanho = '$tamanho',
         WHERE sabor = '$sabor'";


$inserir = mysql_query($sql);
					if ($inserir) {
                           echo "<script type='text/javascript'>
                           alert('Pizza Alterado com Sucesso!!!');
                           window.location = '" . $redirecionar . "';
                           </script>";
                        //percorre os itens do carrinho para cadastrar

   		} else {
                            echo "<script type='text/javascript'>
                            alert('Pizza não Alterado, tentar novamente mais tarde!!');
                            window.location = '" . $redirecionar . "';
                            </script>";

                 }



?>




