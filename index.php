<?php







print_r(error_get_last());


if(isset($_GET['query'])) {
    // query index exists
  //  $query=$_GET['query'];
    //switch($query);
    echo "ciao";
        print_r(error_get_last());
    
}
else{
    echo "ciao";
    header('Content-Type: application/json');
    $data=['Error'=>'Query Null'];
    
echo json_encode($data);
    print_r(error_get_last());
    
}


print_r(error_get_last());
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


?>


