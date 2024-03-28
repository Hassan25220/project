<?php 
include_once("dbconnection.php");

function getRecords($table_name)
{
    global $connection; 
    
    $data = array();
    
    $query_select= "SELECT * FROM $table_name";
    
        $query_select  = "SELECT * FROM $table_name";    
         
    $query =mysqli_query($connection,$query_select);
  
    while($row =  mysqli_fetch_assoc($query)){
        $data[]=$row;
    }
    
    return $data;

}
function getSingleRecord($table_name,$id)
{
    global $connection;        
      
    $querySingle = "SELECT * from  $table_name  WHERE id=".$id;

    $query =  mysqli_query($connection,$querySingle);
    
    return  mysqli_fetch_assoc($query);      
    
}
function deleteRecord($table_name,$id)
{
    global $connection;
    
   // $id = $_GET['id'];
   
   
    $querydel="DELETE FROM $table_name WHERE id=" . $id;
	

    $isDeleted =  mysqli_query($connection,$querydel);   
    
    return $isDeleted;
    
}
function addRecord($record,$table) {
   
    global $connection;

    $keys = array_keys($record);
    $values = array_values($record);
    $concatinateValues='';
    $concatinateKeys='';


    for($i=0;$i<count($values);$i++)
    {

        $concatinateKeys.=$keys[$i].",";
        $concatinateValues .="'$values[$i]'".",";  

    }
    
    $valuesLength = strlen( $concatinateValues );

    $concatinateValues  = substr( $concatinateValues , 0,$valuesLength-1 );  
    
    $keysLength = strlen( $concatinateKeys );

    $concatinateKeys  = substr( $concatinateKeys , 0,$keysLength-1 );  

    
    $query="INSERT INTO $table ($concatinateKeys) VALUES ($concatinateValues)";
            
    return mysqli_query($connection,$query);
}

function updateRecord($record,$table,$id)
{
    global $connection;
    
    $keys = array_keys($record);
    $values = array_values($record);
    $concatinateResult='';

    for($i=0;$i<count($values);$i++)
    {
       $concatinateResult.=$keys[$i]."="."'$values[$i]'".",";

    }    
    $valuesLength = strlen( $concatinateResult );

    $concatinateResult  = substr( $concatinateResult , 0,$valuesLength-1 );  
    
    
    $query="UPDATE $table SET $concatinateResult WHERE id =".$id;
	
	echo $query;

    return mysqli_query($connection,$query);
}
?>