
<?php
$host="localhost";
$username="root";
$userpass="sa123";
$dbname="cars";

try{
    $DB_con = new PDO("mysql:host={$host};dbname={$dbname}",$username,$userpass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>
<?php

class searchresult
{

    private $db;
    public $output;
    public $queryResult;

    public function __construct($DB_con)
    {
        $this->db = $DB_con;
    }

    public function createQuery($car_type,$make,$fuel,$mileagec,$transmisson,$price){

        $query = "SELECT id,make,car_type,mileagec,price,fuel,transmisson FROM car";
        $conditions = array();
        $conditions2 = array();

        if (!empty($car_type)){
            $conditions[] = "car_type='$car_type'";
        }
        if (!empty($make)){
            $conditions[] = "make='$make'";
        }
        if (!empty($fuel)){
            $conditions[] = "fuel='BOTH'";
        }
        if (!empty($price)){
            $conditions[] = "price >= '$price'";
        }
        if (!empty($milagec)){
            $conditions[] = "mileagec >= '$mileagec'";
        }
        if (!empty($transmisson)){
            $conditions[] = "transmisson='BOTH'";
        }
       

        $sql = $query;
        if (count($conditions)>0){
            $sql .=" WHERE ".implode(' AND ',$conditions);
        }

        $this->advanceSearch($sql);
        return true;
    }

    public function advanceSearch($sql)
    {
        $this->output = $sql;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while ($result = $stmt->fetchAll()) {
            $this->queryResult = $result;
            return true;
        }
    }

    public function getCarImages($id){
        $a = $id;
        $stmt_in = $this->db->prepare("SELECT photo1 FROM car WHERE id=$a");
        $stmt_in->execute();
        $stmt_in->setFetchMode(PDO::FETCH_ASSOC);
        while ($res = $stmt_in->fetchAll()) {
            foreach ($res as $key => $value){
                echo $value['photo1'];
            }
        return true;
        }
    }
	 public function getCartitle($id){
        $a = $id;
        $stmt_in = $this->db->prepare("SELECT title FROM car WHERE id=$a");
        $stmt_in->execute();
        $stmt_in->setFetchMode(PDO::FETCH_ASSOC);
        while ($res = $stmt_in->fetchAll()) {
            foreach ($res as $key => $value){
                echo $value['title'];
            }
        return true;
        }
    }

    //formate car price for searchresult page
    public function moneyconv($amount)
    {
        //$amount = $this->queryResult['price'];
        $len = strlen($amount);
        $m = '';
        $money = strrev($amount);
        for($i=0;$i<$len;$i++){
            if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$len){
                $m .=',';
            }
            $m .=$money[$i];
        }
        echo strrev($m);
    }

  
 
}

$obj = new searchresult($DB_con);