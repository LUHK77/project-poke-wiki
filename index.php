<?php

$db = new PDO('sqlite:database.sqlite');

$q = $db->query('insert into usuario (id, nome, email, senha) 
values (:id, :nome :email, :senha)');

$users = $q->execute(
    [
        'id' => 1,
        'nome' => 'cleber',
        'email' => 'cleber@gg',
        'senha' => '1234',
    ]
);


//selecionar tudo que tem no banco
$query = $db->query('select * from usuario');

$usuario = $query->fetchAll();

var_dump($usuario);
