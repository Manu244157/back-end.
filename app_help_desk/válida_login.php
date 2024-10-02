<?php

$usuario_auntenticado = false ; 

$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
    'senha'  => '12345'
    ]
];

foreach ($usuario_cadastrado as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_auntenticado = true;
    }
}


if ($usuario_auntenticado == true){
    echo "Usuário autenticado com sucesso";
}else{
    echo "Usuário ou senha incorreto";
}
?>
    

