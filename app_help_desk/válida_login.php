<?php

$usuario_auntenticado = false ; 
//colocando usuario certo
$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
    'senha'  => '12345'
    ],
     ['email' => 'aluno@senai.br',
    'senha'  => 'abcde'
    ],
     ['email' => 'suporte@senai.br',
    'senha'  => '12345'
    ],
];

//fazendo verificação
foreach ($usuario_cadastrado as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_auntenticado = true;
    }
}

//verificação do usuario 
if ($usuario_auntenticado == true){
    echo "Usuário autenticado com sucesso";
    header('Location: painel.php');
}else{
    echo "Usuário ou senha incorreto";
    header('Location: index.php?login=erro');
}
?>
    

