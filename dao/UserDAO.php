<?php

require_once '../model/User.php';

class UserDAO
{

  public static $instance;

  public function __construct()
  {
    //
  }

    /**
     * @return UserDAO
     * Este método retorna uma instancia
     * de UsurDAO não Deixando ela ser novamente instanciada.
     */
  public static function getInstance ()
  {

    if (!isset(self::$instance)) {
      self::$instance = new UserDAO();
    }

    return self::$instance;
  }

  public function inserir (User $user)
  {
    try {

        $sql = 'INSERT INTO users
        (
          nome,
          email,
          telefone,
          celular
        )
        VALUES
        (
          :nome,
          :email,
          :telefone,
          :celular
        ) ';

        $prepare = Conexao::getInstance()->prepare($sql);

        $prepare->bindValue(":nome",$user->getNome());
        $prepare->bindValue(":email",$user->getEmail());
        $prepare->bindValue(":telefone",$user->getTelefone());
        $prepare->bindValue(":celular",$user->getCelular());

        return $prepare->execute();

    }   catch (Exception $e) {

        print "Ocorreu um erro ao inserir um usuário";

    }
  }

}