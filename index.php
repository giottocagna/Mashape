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






print_r(error_get_last());


if(isset($_GET['query'])) {
    // query index exists
    $query=$_GET['query'];
    switch($query);
    
        print_r(error_get_last());
    
}
else{
    header('Content-Type: application/json');
    $data=['Error'=>'Query Null'];
    
echo json_encode($data);
    print_r(error_get_last());
    
}


print_r(error_get_last());

?>


