<?php

class DBController
{
  private $dbHost = "localhost";
  private $dbUser = "root";
  private $dbPassword = "";
  private $dbName = "vizew";
  private $connection;

  public function openConnection()
  {
    $this->connection = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
    if ($this->connection->connect_errno) {
      echo "Error in Connection : " . $this->connection->connect_errno;
      return false;
    } else {
      return true;
    }
  }

public function closeConnection()
{
    if($this->connection){
        $this->connection->close();
    }
    else {
        echo " connection is not opened";
    }
}

    public function select($qry)
    {
        $result=$this->connection->query($qry);
        if(!$result)
        {
            echo "Error : ".mysqli_errno($this->connection);
            return false;
        }
        else 
        {
           return $result->fetch_all(MYSQLI_ASSOC);
        }
      
    }

    public function insert($qry)
    {
        $result = $this->connection->query($qry);
        if($result == false)
        {
            echo "Error in Query";
            return false;
        }
        else
        {
            return $this->connection->insert_id;
        }
    }

    
}

?>
