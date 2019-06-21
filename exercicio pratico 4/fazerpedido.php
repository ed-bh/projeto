
<font face="Avalon" size="6" COLOR="#838B83"><B><I>Fazer Pedido<hr></I></B></FONT>

<form name="formCompra" id="formCompra" method="post" action="carrinhonovo.php?id=salvar_Pedido">


  <table width="780" border="0" cellspacing="1" cellpadding="1" class="conteudo">

    <tr>
        <td align="right">Cliente:</td>
       <td>
         <select name="nome" id="nome"align="rigth" style="width: 190px" >
         <option>--Selecione um cliente--</option>
           <?php
           $result = mysql_query ("SELECT * FROM tbl_cliente");
           while($ln = mysql_fetch_assoc($result)){
           echo '<option value="'.$ln['telefone'].'">'.$ln['nome'].'</option>';}
           ?>
         </select><font color="#CC0000">*</font></td>
    </tr>
        <tr>
        <td align="right">Pizza:</td>
       <td>
         <select name="pizza" id="pizza"align="rigth" style="width: 190px" >
         <option>--Selecione uma pizza--</option>
           <?php
           $result = mysql_query ("SELECT * FROM tbl_pizza");
           while($ln = mysql_fetch_assoc($result)){
           echo '<option value="'.$ln['sabor'].'">'.$ln['sabor'].'</option>';}
           ?>
         </select><font color="#CC0000">*</font></td>
    </tr>
    <tr>
     <td colspan="20" align="center"><font color="#000000"><H2>Endere&ccedil;o Do Cliente</H2></font></td>
    </tr>

    <tr>
       <td align="right">Logradouro:</td>
       <td><input type="text" name="logradouro" id="logradouro" readonly="readonly" value="<? echo $_SESSION['logradouro'] ?>" size ="24%"/></td>
       <td align="right">Numero:</td>
       <td><input type="text" name="numero" id="numero" readonly="readonly" value="<? echo $_SESSION['numero']?>" size ="20%"/></td>
       <td width="10%" align="right">Compl:</td>
       <td width="15%"><input type="text" name="complemento" id="complemento" readonly="readonly" value="<? echo $_SESSION['complemento'] ?>" size ="5%"/></td>
    </tr>
    <tr>
       <td  align="right">Bairro:</td>
       <td><input type="text" name="bairro" id="bairro" readonly="readonly" value="<? echo $_SESSION['bairro'] ?>" size ="24%"/></td>
       <td  align="right">Cidade:</td>
       <td><input type="text" name="cidade" id="cidade" readonly="readonly" value="<? echo $_SESSION['cidade'] ?>" size ="20%"/></td>
       <td  align="right">UF:</td>
       <td><input type="text" name="uf" id="uf" readonly="readonly" value="<? echo $_SESSION['uf'] ?>" size ="5%"/></td>
    </tr>
    <tr>
       <td align="right">Cep:</td>
       <td><input type="text" name="cep" id="cep" readonly="readonly" value="<? echo $_SESSION['cep'] ?> " size ="24%" /></td>
    </tr>
     </table>
    
    <table width="780" border="0" cellspacing="1" cellpadding="1" class="geral">
     <br><br>
     <tr>
      <td colspan="5"><input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar Pedido" />
       <font color="#CC0000"<span>* Campos obrigatórios!</span></font></td>
      </tr>
    </table>
     </form>
