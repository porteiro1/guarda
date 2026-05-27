<html>
    <head>
        <title>Meu simples site...</title>

    </head>
    <body>

		<div class="divLogin">
			<form method="post" action="cadastrarBanco.php">
        <label>Nome </label>
        <input type="text" name="name" id="name" size="20"><br />
				
				<label>idade </label>
				<input type="number" name="idade" id="idade" size="20">
				<br>
				<label>tem carteira de motorista? </label>
				<input type="radio" name="choose" value="sim">
				<label for="sim">sim </label>
				<input type="radio" name="choose" value="nao">
				<label for="nao">não </label>
				<br>
					<input type="submit" value="LOGAR"  />
			</form>
		</div>

		<a href="informacoes.php">informações</a>

    </body>
</html>
