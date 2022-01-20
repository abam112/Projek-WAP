<?php
    include('connection.php');

    class Cassyier {

        function __construct()
        {
            $this->database = new ConnectionDatabase();
        }

        function getAll($id){
            $query = "SELECT * FROM cassyier WHERE user_id= $id";
            $data = mysqli_query($this->database->connection, $query);
            
            $res = [];
    
            while($item = mysqli_fetch_array($data)) {
                $res[] = $item;
            }

            $this->database->closeConnection();
    
            return $res;
        }

        function store($barang, $tanggal, $nominal_harga, $id){
            $query = "INSERT INTO `cassyier` (`barang`, `tanggal`, `nominal_harga`,user_id) VALUES (?,?,?,?)";

            $process = $this->database->connection->prepare($query);

            if($process) {
                $process->bind_param('ssss', $barang, $tanggal, $nominal_harga,$id);
                $process->execute();
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return true;
        }
        function show($id){
            $result = null;
            $query = "SELECT * FROM cassyier WHERE id = ?";
            $process = $this->database->connection->prepare($query);
            
            if($process) {
                $process->bind_param('s', $id);
                $process->execute();

                $result = $process->get_result();
                $result = $result->fetch_assoc();
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return $result;
        }

        function update($id, $barang, $tanggal, $nominal_harga){
            $query = "UPDATE `cassyier` SET `barang` = ?, `tanggal` = ?, `nominal_harga` = ? WHERE id = ?";

            $process = $this->database->connection->prepare($query);

            if($process) {
                $process->bind_param('ssss', $barang, $tanggal, $nominal_harga, $id);
                $process->execute();
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return true;
        }
        function delete($id){
            $query = "DELETE FROM cassyier WHERE id = ?";

            $process = $this->database->connection->prepare($query);

            if($process) {
                $process->bind_param('s', $id);
                $process->execute();
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return true;
        }

    }
?>