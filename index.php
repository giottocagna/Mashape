<?php

function find(){
    
    
}



function explore(){
    
    
}

function switch($q){
 switch ($q) {
    case "find":     
         find();
        break;
     
    case "explore":
       explore();
        break;
     
}
}









if(isset($_GET['query'])) {
    // query index exists
    $query=$_GET['query'];
    switch($query);
    
        
    
}
else{
    header('Content-Type: application/json');
    $data=['Error'=>'Query Null'];
    
echo json_encode($data);
    
}




?>


