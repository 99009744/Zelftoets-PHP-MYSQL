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

    function insert($naam, $datum){
        $conn = connect();
        $sql = $conn->prepare("INSERT INTO naam (`naam`, `datum`) VALUES (:naam, :datum)");
        $sql->bindParam(':naam', $naam);
        $sql->bindParam(':datum', $datum);
        $sql->execute();
        $conn = null;
        header("main.php");
    }
    function getById($id){
        $conn = connect();
        $sql = $conn->prepare("SELECT * FROM naam WHERE `id` = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        $user = $sql->fetchAll();
        $conn = null;
        return $user;
    }
    function edit($id, $datum, $naam){
        $conn = connect();
        $sql = $conn->prepare("UPDATE naam SET naam = :naam, datum = :datum where id = :id ");
        $sql->bindParam(':id',$id);
        $sql->bindParam(':datum', $datum);
        $sql->bindParam('naam', $naam);
        $sql->execute();
        $conn = null;
    }

?>