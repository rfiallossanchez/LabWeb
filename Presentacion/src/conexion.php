<?php
header("Content-Type: text/html;charset=utf-8");
if(!isset($_SESSION))
{
    session_start();
}

class conexion {
    private $dbhost = "localhost";  // host
    private $dbuser = "root";  // usuario
    private $dbpass = "";  // password
    private $dbname = "tienda";  // base de datos
    private static $conn;    // identificador de la conexión

    private function __construct(){
        $this->conecta();
        mysqli_query($this->conn,"SET NAMES 'utf8'");
    }

    public static function getInstance(){
        if (!(self::$conn instanceof self)){
            self::$conn=new self();
        }
        return self::$conn;
    }
    public function conecta(){
        $this->conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass,$this->dbname);
        if (mysqli_connect_errno()) {
            die('Error al conectar con mysql');
        }
    }

    public function consulta($query){
        $resultado = array();

        $result = mysqli_query($this->conn,$query);
        if (!$result) {
            die('Error query BD:' . mysqli_error());
        }else{
            $num_rows= mysqli_num_rows($result);
            for($i=0;$i<$num_rows;$i++){
                $row = mysqli_fetch_assoc($result);
                array_push($resultado, $row);
            }
        }
        return $resultado;
    }

    public function validaUsuari($usuari, $contrasenya){
        $result = mysqli_query($this->conn,"select * from usuaris where nom = '".$usuari."' and contrasenya = '".$contrasenya."'");
        if (!$result) {
            die('Error query BD:' . mysqli_error());
        }else{
            $num_rows = mysqli_num_rows($result);
            $retorn = ($num_rows > 0 ? true : false);
        }
        return $retorn;
    }

    public function getCategorias() {
        return $this->consulta("select * from categoria");
    }

    public function getProductos($categoria) {
        return $this->consulta("select * from producto where categoria='".$categoria."'");

    }

    public function desconecta(){
        mysqli_close($this->conn);
    }
}
?>
