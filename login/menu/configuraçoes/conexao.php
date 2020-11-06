<?php
class Banco
{
    private static $dbNome = 'spaceparking_bdspace';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'spaceparking_db';
    private static $dbSenha = 'Alterar123';
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
                if ($cont){echo "conectado";}else{echo "não conectado";}
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}
?>