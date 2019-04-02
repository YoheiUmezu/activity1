<?php
require 'connect.php';

 function addPost($comp_name, $comp_add, $comp_occu, $comp_year, $comp_time, $comp_salary, $comp_atm, $comp_comp, $comp_comment){
    $conn = connection();
    $sql = "INSERT INTO post (comp_name, comp_add, comp_occu, comp_year, comp_time, comp_salary, comp_atm, comp_comp, comp_comment)
            VALUES ('$comp_name', '$comp_add', '$comp_occu', '$comp_year', '$comp_time', '$comp_salary', '$comp_atm', '$comp_comp', '$comp_comment')";
            $result = $conn->query($sql);
            if($result){
                return $result;
            }
            else{
                echo $conn->error;
            }
 }
    
    

    function retrievePost(){
        $conn = connection();
        $sql = "SELECT * FROM post";
        $result=$conn->query($sql);
        $rows=array();
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }

    function retrieveonePost($id){
        $conn = connection();
        $sql = "SELECT * FROM post where `comp_id` = '$id'";
        $result=$conn->query($sql);
        $rows=array();
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }



 ?>   