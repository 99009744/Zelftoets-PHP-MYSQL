<?
    function connect(){
        $conn = new PDO("mysql:host=localhost;dbname=zelftoets", "root", "mysql");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // echo "Connected successfully";
            return $conn;
    }

    function getEverything(){
        $conn = connect();
        $sql = $conn->prepare("SELECT * FROM `naam` ORDER BY `datum` ");
        $sql->execute();
        $user = $sql->fetchAll();
        $conn = null;
        return $user;
    }

    function insert($postNaam, $postDatum){
        $conn = connect();
        $sql = $conn->prepare("INSERT INTO naam (`naam`, `datum`) VALUES (:naam, :datum)");
        $sql->bindParam(':naam', $postNaam);
        $sql->bindParam(':datum', $postDatum);
        $sql->execute();
        $conn = null;
        header("index.php");
    }

?>