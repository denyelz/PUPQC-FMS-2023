<?php

// function OpenCon()
    //  {
    // }
    // function CloseCon($conn)
    //  {
    //  $conn -> close();
    //  }


class Database
{
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $db = "fms";

    private $result = array();
    private $res = array();
    protected $connect;

    public function Opencon()
    {
        $this->connect = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->db) or die("Connect failed: %s\n". $this->connect -> error); 
        return $this->connect;
    }

    public function GetUsers()
    {
        $data = new Database;
        $db = $data->Opencon();
        $sql = "SELECT * FROM User_Accounts";
        $query = mysqli_query($db, $sql);
        return $query;
        // $this->result = mysqli_fetch_assoc($query);
        // $query = $db->query($sql);
        // $this->result = $query->fetch_all();
    }

    public function GetResults()
    {
        $values = $this->result;
        $this->result = array();
        return $values;
    }

    public function CloseCon($connect)
    {
        $connect -> close();
    }
}
?>