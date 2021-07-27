<?php
/**
 * Created by Dev-nei
 * Date: 17/05/2021
 * time: 20:14
 */

//Lista de Categorias

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r ($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if(empty($nome))
{
	$_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio. Por favor preencha novamente.';
	header('location: index.php');	
	return;
}

else if(strlen($nome) < 3)
{
	$_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres. ';
	header('location: index.php');
	return;
}

else if(strlen($nome) > 40)
{
	$_SESSION['mensagem-de-erro'] = 'O nome muito extenso.';
	header('location: index.php');
	return;
}

else if(!is_numeric($idade))
{
	$_SESSION['mensagem-de-erro'] = 'Informe um número para idade.';
	header('location: index.php');
	return;
}


//var_dump($nome);
//var_dump($idade);
//return 0;
 if($idade >= 6 && $idade <=12 )
 {
 	for($i = 0; $i <= count($categorias); $i++)
    {
    	if($categorias[$i] == 'infantil')
		{
			$_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome . " compete na categoria " . $categorias[$i];
			header('location: index.php');
			return;
		}
        	
		
    }
 }
 else if($idade >= 13 && $idade <= 18)
 {
 	for($i = 0; $i <= count($categorias); $i++)
    {
    	if($categorias[$i] == 'adolescente')
		{
			$_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome . " compete na categoria " . $categorias[$i];
			header('location: index.php');
			return;
		}
    }
 }
 else
  {
 	for($i = 0; $i <= count($categorias); $i++)
    {
    	if($categorias[$i] == 'adulto')
		{
			$_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome . " compete na categoria " . $categorias[$i];
			header('location: index.php');
			return;
		}
    }
 }

?>

