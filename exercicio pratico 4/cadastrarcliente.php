<form id="cadastro" name="cadastro" method="post" action="salvarcadastro.php">

       <div>
       <font face="Avalon" size="6" COLOR="#838B83"><B><I>Cadastrar Cliente<hr></I></B></FONT>
       </div>
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="conteudo">
      <td width="10%" align="right">Nome:</td>
      <td width="20%" ><input name="nome" type="text" id="nome" /><font color="#CC0000">*</font></td>
      <td width="10%" align="right">Telefone:</td>
      <td width="20%" ><input name="telefone" type="text" id="telefone" /><font color="#CC0000">*</font></td>
    </tr>
    </table>
    
    <table width="100%" border="0" cellspacing="1" cellpadding="1" class="conteudo">
    <tr>
       <td colspan="5" align="center"><hr/><font color="#000000"></font><BR><BR></td>
    </tr>
      <tr>
      <td colspan="5"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Salvar" onclick="return confirm('Desejacadastrar o cliente?')"/>
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos" />
            <font color="#CC0000"<span>* Todos os campos são obrigatórios!</span></font></p>
      <p></p></td>
      </tr>

  </table>
</form>
