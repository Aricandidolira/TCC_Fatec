<?php
	include "cabec.php";
?>
<section class="introducao_cadastro">
	<div class="container">

		<div class="grid-4 intro_start">
				<h3></h3>			
		</div>

		
		<form class="contato_form  grid-8" method="POST" action="#" id="CadastrarUsuario">
		   <h2 class="subtitulo">Cadastro</h2>
		   <input type="hidden" name="id"/>
		 
			
				<label for="nome">Nome completo:</label>
				<input type="text" name="nome"/>
			
			
				<label for="email">E-mail:</label>
				<input type="text" name="email"/>
			
			
				<label for="senha">Escolha uma senha:</label>
				<input type="password" name="senha"/>
			
				<label for="cidade">Cidade:</label>
				<input type="text" name="cidade"/>
			
				<label for="endereco">Endereço (Rua número bairro):</label>
				<input type="text" name="logradouro"/>
			
				<label for="celular">Celular:</label>
				<input type="text" name="celular"/>
			<br>
				<input type="submit" name="cadastrar" value="Cadastrar-se"/> 
			
		</form>
		<div class="grid-4 intro_end">
				<h3></h3>
		</div>

	</div>
</section> 
<?php
	include "rodape.html";
?>