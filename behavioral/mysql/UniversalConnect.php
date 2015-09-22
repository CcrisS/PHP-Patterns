<?php



include_once('IConnectInfo.php');

class UniversalConnect implements IConnectInfo {

    private static $server    = IConnectInfo::HOST;
    private static $currentDB = IConnectInfo::DBNAME;
    private static $user      = IConnectInfo::UNAME;
    private static $pass      = IConnectInfo::PW;
    private static $hookup;

    public function doConnect() {
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);
        if (self::$hookup) {
            //echo "succesfull connection to MySQL";
        } elseif (mysqli_connect_error(self::$hookup)) {
            echo 'Here is the error: ' . mysqli_connect_error();
        }
        return self::$hookup;
    }
    public function query($query){die("primera");
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);
        $result = mysqli_query(self::$hookup, $query);
        var_dump($result);die("aqui");
    }

}
