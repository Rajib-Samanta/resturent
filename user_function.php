<?php

include('db_connection.php');

function getAllProducts(){
    global $conn;
    $sql="SELECT * FROM item";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
} 

function getAllabout(){
    global $conn;
    $sql="SELECT * FROM about";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
} 
function getAllrecipe(){
    global $conn;
    $sql="SELECT * FROM recipe";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
} 

?>