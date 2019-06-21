<?php
include("conectar.php");
$id = $_GET['tipo'];
$busca = mysql_query("SELECT * FROM tbl_pizza WHERE tbl_pizza.sabor = '$id'");

while($l = mysql_fetch_array($busca)) {
$sabor                    = $l["sabor"];
$tamanho                   = $l["nome"];
}

?>
<form method="POST" action="salvaralteracao.php">
  <table width="100%" border="0" cellspacing="2" cellpadding="2" class="conteudo">

  </tr>
     <tr>
       <td colspan="5" align="center"><font color="#000000"><H4>Alterar Pizza<H4></font></td>
    </tr>
    <tr>
       <td><span>Sabor :</span><input type="text" value="<?php echo $sabor ?>" name="sabor" size="35" readonly="true"  />
       <td><span>Tamanho :</span><input type="text" value="<?php echo $tamanho ?>" name="tamanho" size="35" readonly="true" />
    </tr>

  <input type="submit" value="editar" />
</form>
