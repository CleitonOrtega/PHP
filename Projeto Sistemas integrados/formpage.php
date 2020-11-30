
<!DOCTYPE html>
<html lang="en">


    <head>
	<?php 
		include ('conexao.php');

		if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
			header("Location: login.html");
			exit;
		}
		
		
		
		?>
		<!-- //!isset($_SESSION["nome"]) ||  -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Popup Email Form - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="form.css" >
        <style>

/*General */

.teste:hover{
	background-color: rgba(255,0,0,92%) !important;
	color: black !important;
}

.container 
{
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url("images/Ishida.png");
	background-size: cover;
    background-repeat:no-repeat;    
    padding-top: 300px;
}

		</style>
		
		<script src="form.js"></script>
		
    </head>
    <body>

        <div class="container" style= "padding-bottom: 275px;">
        <div class="modal-content" style="width: 50%; position: absolute;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ><a href="logout.php">&times;</a></button>
                <h4 class="modal-title">
                    Olá <?php echo $_SESSION['nome']; ?>
                </h4>
            </div>
            <div class="modal-body" >
                <form role="form" action = "atualizar.php" method="post">
                    <p>Para atualizar os dados insira-os nos campos de texto<br> E envie clickando no verde(atualizar!)<hr>Ou para excluir a conta clicke no vermelho(Apagar Conta!)</p>
                    <div class="form-group">
                        <label for="name"> Nome: </label>
                        <input type="text" value = "<?php echo $_SESSION['nome']; ?>" class="form-control" id="name" name="nome" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email:</label>
                        <input type="email" value = "<?php echo $_SESSION["email"]; ?>"class="form-control" id="email" name="email" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="name">Senha:</label>
						<input type="senha" value="<?php echo $_SESSION['senha']; ?>" class="form-control" id="senha" name="senha" required maxlength="50">
                    </div>
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Atualizar! </button>
					<button style="background-color:red;background-image: -webkit-linear-gradient(); " type="button" class="teste btn btn-lg btn-block " id="btnContactUs"  ><a href="deletar.php" style = "color:white; text-decoration:none; " >Apagar Conta!<a></button>
				</form>
            </div>
        	</div>
    	</div>
    </body>
	
</html>