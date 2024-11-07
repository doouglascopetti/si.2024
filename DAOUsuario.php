<?php
namespace DAO;
mysqli_report(MYSQLI_REPORT_STRICT);
$separator = DIRECTORY_SEPARATOR;
$root = $_SERVER['DOCUMENT_ROOT'].$separador;

require_once('../model/Usuario.php');

use models\Usuario;
/**
 * Esta classe é responsavel por fazer a comunicação com o banco de dados, provendo os metódos de logar e incluir Usuário.
 * @author Douglas Copetti
 */

 class DAOUsuario{
    private function conectarDB(){
        $separator = DIRECTORY_SEPARATOR;
        $diretorioBase = dirname((__FILE__).$separator);
        require($diretorioBase.'configdb.php');

        try{
            $conn = new \MySQLi($dbhost, $banco, $user, $password);
            return $conn;
        } catch(mysqli_sql_exception $e){
            throw new \Exception($e);
            die;
        }
    }

    /**
     * Este metódo tem a função de validar os dados fornecidos pelo usuário para logar no sistema.
     * @param string $login Login do usuário
     * @param string $senha Senha do usuário
     */
    
     public function logar($login, $senha){
        $conexaoDB = $this->conectarDB();
        $usuario = new Usuario();
        $sql = $conexaoDB->prepare('select login, nome, email, celular from usuario where login = ? and senha = ?');
        $sql->bind_param("ss", $login, $senha);
        $sql->execute();

        $resultado = $sql->get_result();

        if($resultado->num_rows === 0){
            $usuario->addUsuario(null, null, null, null, FALSE);
        } else{
            while($linha = $resultado->fetch_assoc()){
                $usuario->addUsuario($linha['login'], $linha['nome'], $linha['email'], $linha['celular'], TRUE);
            }
            $sql->close();
            $conexaoDB->close();

            return $usuario;
        }
     }
     
 }
?>