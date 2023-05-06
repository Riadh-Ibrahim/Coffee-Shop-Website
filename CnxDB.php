<?php class CnxDB
{
    private static $_dbname = "ooplogin";
    private static $_user = "root";
    private static $_pwd = "";
    private static $_host = "localhost";
    private static $_bdd = null;

    private function __construct()
    {
        try {
            self::$_bdd = new PDO("mysql:host=" . self::$_host . ";dbname=" . self::$_dbname . ";charset=utf8", self::$_user, self::$_pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$_bdd) {
            new CnxDB();
        }
        return (self::$_bdd);
    }
}