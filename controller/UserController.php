<?php

require_once '../model/User.php';
require_once '../dao/UserDAO.php';

if(isset($_POST['nome'])) {

    $user = new User (
                        $_POST['nome'],
                        $_POST['email'],
                        $_POST['telefone'],
                        $_POST['celular']
    );

    $udao = new UserDAO();
    $udao::getInstance();
    return json_encode($udao->inserir($user));
}