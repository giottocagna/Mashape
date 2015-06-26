<?php

function find(){
    
    
}



function explore(){
    
    
}

function switch(){
 switch ($query) {
    case "find":
     {
         find();
        break;
     }
    case "explore":
     {  explore();
        break;
     }
}






header('Content-Type: application/json');
$query=null;

if(isset($_GET['query'])) {
    // query index exists
    $query=$_GET['query'];
    
    
        
    
}
else{
    $data=['Error'=>'Query Null'];
    
echo json_encode($data);
    
}




?>


