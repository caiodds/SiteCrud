<script>
    var senha=prompt("Digite sua senha adm");

    if(senha == 181920){
        alert("Senhaa correta!");
    }else{
        alert(window.location.href='senha incorreta');
    }
function myFunction()
{

var idade=prompt("Digite a senha administrador:");

if (idade == 181920){

}else{
    alert('acesso negado..');
    alert(window.location.href='home.php');
}

}
</script>

<h1>Listar Usuários</h1>
<?php
include("config.php");
    $sql = "SELECT * FROM player";
    $res = $con->query($sql);
    $qtd = $res->num_rows;
    if ($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered' >";
            print"<tr>";
            print"<th>Id</th>";
            print"<th>Nome</th>";
            print"<th>E-mail</th>";
            print"</tr>";
        while ($row = $res->fetch_object()) {
            print"<tr>";
            print"<td>".$row->id."</td>";
            print"<td>". $row->nome."</td>";
            print"<td>". $row->email."</td>";
            print"<td>
               
            </td>";

            print"</tr>";
        }
        print"</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultado</p>";
    }
?>