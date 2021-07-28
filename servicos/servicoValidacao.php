<?php
/**
 * Created by Dev-nei
 * Date: 28/07/2021
 * time: 16:14
 */

declare(strict_types=1);
function validaNome(string $nome) : bool
{
    if(empty($nome))
{
	    setarMensagemErro(mensagem: 'O nome não pode ser vazio. Por favor preencha novamente.');
	    return false;
}

else if(strlen($nome) < 3)
{
    setarMensagemErro(mensagem: 'O nome deve conter mais de 3 caracteres. ');
	    return false;
}

else if(strlen($nome) > 40)
{
    setarMensagemErro(mensagem: 'O nome muito extenso.');
        return false;
}
return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
{
    setarMensagemErro(mensagem: 'Informe um número para idade.');
	    return false;
}
return true;

}





?>