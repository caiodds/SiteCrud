
<h1>Listar Usuários</h1>
<a href="home.php" style="text-decoration: none;">Fechar lista</a>
<?php

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