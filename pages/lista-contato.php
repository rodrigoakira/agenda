<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('header.php'); ?>
</head>

<body class="back-cidades">
	<?php include_once('nav-dashboard.php'); ?>

	<div class="register-box">
		<div class="listing-contato-box-body">
			<div class="row" style="text-align: center">
				<span class="register-title">
					Listagem do Cadastro de Contatos
				</span>
            </div>
            <hr class="hr-separator">
            <div class="row">
                <table class="table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <td style="width: 50px"><b>#</b></td>
                            <td style="width: 120px"><b>Nome</b></td>
                            <td style="width: 120px"><b>Endereco</b></td>
                            <td style="width: 120px"><b>Nro End</b></td>
                            <td style="width: 120px"><b>Complemento</b></td>
                            <td style="width: 120px"><b>Bairro</b></td>
                            <td style="width: 120px"><b>Cidade-ID</b></td>
                            <td style="width: 120px"><b>CEP</b></td>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $host     = "localhost";
                            $user     = "root";
                            $password = "";
                            $database = "agenda";

                            // Faz a conexão com o servidor MySQL
                            $con = mysqli_connect($host, $user, $password);

                            // Verifica se ocorreu erro de conexão
                            if (!$con) {
                                // Se sim, então encerra o programa com uma mensagem de erro
                                die("Erro de conexão com o servidor do BD");
                            }

                            // Determina qual banco de dados que será utilizado
                            $db = mysqli_select_db($con, $database);

                            // Verifica se ocorreu erro na seleção
                            if (!$db) {
                                // Se sim, então encerra o programa com uma mensagem de erro
                                die("Erro ao selecionar o banco de dados.");
                            }

                            $sql = "select * from tbl_contatos order by nome";

                            $result = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                                echo "
                                <tr>
                                    <td>$row[0]</td>
                                    <td>". utf8_encode($row[1]) ."</td>
                                    <td>$row[2]</td>
                                    <td>$row[3]</td>
                                    <td>". utf8_encode($row[4]) ."</td>
                                    <td>$row[5]</td>
                                    <td>$row[6]</td>
                                    <td>$row[7]</td>
                                    <td>$row[8]</td>
                                    <td>    
                                        <a href=\"alt-contato.php?id=$row[0]\">
                                            <button class=\"btn btn-primary btn-xs\">
                                                <i class=\"fa fa-pencil-alt\"></i>
                                            </button>
                                        </a>
                                        &nbsp;
                                        <a href=\"exc-contato.php?id=$row[0]\">
                                            <button class=\"btn btn-danger btn-xs\">
                                                <i class=\"fa fa-trash-alt\"></i>
                                            </button>
                                        </a>

                                    </td>
                                </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
		</div>
	</div>

<?php
	include_once('footer.php');
	include_once('js.php');
?>
</body>
</html>