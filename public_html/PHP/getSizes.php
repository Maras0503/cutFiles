<?php
    $typeType = $_POST['typeType'];
    //SELECT INFORMATION ABOUT PRODUCTS
    $query = "select * from type_tab where type_type='".$typeType."' order by type_type, type_name";        
    
    function select($query){
        include('connection.php');
        $returnArray = array();
        $fetch = $mysqli->query($query); 
            while ($row = $fetch->fetch_array()) {
                $rowArray['type_id'] = $row['type_id'];
                $rowArray['type_name'] = $row['type_name'];
                array_push($returnArray,$rowArray);
            }
            $mysqli->close();
        return $returnArray;
    }   
    
    echo json_encode(select($query));