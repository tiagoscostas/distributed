<!DOCTYPE html>

<html>

<head>
	<title>TRABALHO SISTEMAS DISTRIBUIDOS</title>
	
	<meta charset="utf-8" />
	
	
</head>

<body>
<?php
$nota1 =  $nota2 = $nota3 = "";
        $mediaFinal = $ef = "";
?>
	<h2>FANIOR - FACULDADE INDEPENDENTE DO NORDESTE</h2>
                <h2>MÉDIA PARA PROVA FINAL</h2>
                
	
	<form action="index.php" method="post">
		
                        <br>
			<input type="text" name="nota1" placeholder="Digita a Nota 1" value="<?php echo $nota1;?>" />
			<label for="name">Nota 1</label>
                        <br>
	
                        
	
			<input type="text" name="nota2" placeholder="Digita a Nora 2" value="<?php echo $nota2;?>"/>
			<label for="email">Nota 2</label>
                        <br>
		
		
			<input type="text" name="nota3" placeholder="Digita a Nota 3" value="<?php echo $nota3;?>"/>
			<label for="web">Nota 3</label>
			<input name="acao" type="hidden" value="enviar"/>

		
                    <br>
			<input type="submit" value="Resultado" />
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        
                        <br>
                        
	
	</form>
                
                
                
                
<?php
if(isset($_POST['acao']) && $_POST['acao'] == "enviar") {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        
        
        $media = ($nota1 + $nota2 + $nota3)/3;
 
if($media >= 7 ){
    echo "ALUNO APROVADO";
}

if($media < 4){
    echo "REPROVADO SEM DIREITO A PROVA FINAL";
}
  
 if ( $media >= 4 && $media < 7){   
    $ef = (50 - (7*$media))/3;
    echo "PRECISA OBTER NOTA: ".round($ef, $precision = 2)." NO EXAME FINAL";
 }
}

        ?>
                
                
                
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                
                Por: Tiago Souza
		Código diponível em:   
		https://github.com/tiagoscostas/distributed.git
</body>

</html>



