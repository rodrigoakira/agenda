<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('header.php'); ?>
</head>

<body class="back-cidades">
	<?php include_once('nav-dashboard.php'); ?>

	<div class="register-box">
		<div class="register-box-body">
			<div class="row" style="text-align: center">
				<span class="register-title">
					Cadastro de Contatos
				</span>
			</div>
			<hr class="hr-separator">
			<div class="row" style="text-align: center">
				<p class="register-subtitle">Forneça os dados abaixo</p>
			</div>

			<!-- Formulário de cadastramento de cidades -->
			<form action="grava-contato.php" method="post" autocomplete="off">

				<!-- nome do contato -->
				<div class="input-group">
					<span class="input-group-addon" id="input-user-name">
						<span class="fas fa-globe"></span>
					</span>
					<input type="text" class="form-control"
						name="nome" required placeholder="Nome do Contato"
						aria-describedby="input-nome">
				</div>
				<br>

				<!-- endereco do contato -->
				<div class="input-group">
					<span class="input-group-addon" id="input-user-name">
						<span class="fas fa-globe"></span>
					</span>
					<input type="text" class="form-control"
						name="endereco" required placeholder="Endereco"
						aria-describedby="input-endereco">
				</div>
				<br>

				<!-- nro_endereco -->
				<div class="input-group">
					<span class="input-group-addon" id="input-user-name">
						<span class="fas fa-globe"></span>
					</span>
					<input type="text" class="form-control"
						name="nro_endereco" required placeholder="Nro_endereco"
						aria-describedby="input-nro_endereco">
				</div>
				<br>
				<!-- complemento -->
				<div class="input-group">
					<span class="input-group-addon" id="input-user-name">
						<span class="fas fa-globe"></span>
					</span>
					<input type="text" class="form-control"
						name="complemento" required placeholder="Complemento"
						aria-describedby="input-complemento">
				</div>
				<br>
				<!-- bairro -->
				<div class="input-group">
					<span class="input-group-addon" id="input-user-name">
						<span class="fas fa-globe"></span>
					</span>
					<input type="text" class="form-control"
						name="bairro" required placeholder="Bairro"
						aria-describedby="input-bairro">
				</div>
				<br>
				<!-- cidade_id -->
				<div class="input-group">
					<span class="input-group-addon" id="input-user-name">
						<span class="fas fa-globe"></span>
					</span>
					<input type="text" class="form-control"
						name="cidade_id" required placeholder="Cidade_id"
						aria-describedby="input-cidade_id">
				</div>
				<br>
				<!-- cep -->
				<div class="input-group">
					<span class="input-group-addon" id="input-user-name">
						<span class="fas fa-globe"></span>
					</span>
					<input type="text" class="form-control"
						name="cep" required placeholder="CEP"
						aria-describedby="input-cep">
				</div>
				<br>


				<!-- Botão de envio -->
				<div class="row" style="margin-bottom:10px">
					<div class="col-xs-12">
						<button type="submit"
							class="btn btn-primary btn-block btn-flat">
							Inserir <span class="fas fa-chevron-circle-right"></span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

<?php
	include_once('footer.php');
	include_once('js.php');
?>
</body>
</html>