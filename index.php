<?php


function sw($query)
{
    
    
 switch ($q) {
    case "find":     
        echo "find";
        break;
     
    case "explore":
      echo "explore";
        break;
     
}
    
}



function writeMsg() {
    echo "Hello world!";
}


print_r(error_get_last());


if((isset($_GET['query']))&&($_GET['query']!=null)) {
    // query index exists
    $query=$_GET['query'];
   sw($query);
   
        print_r(error_get_last());
    
}
else{
    
    header('Content-Type: application/json');
    $data=['Error'=>'Query Null'];
    
echo json_encode($data);
    print_r(error_get_last());
    
}
/*



print_r(error_get_last());
function find(){
    
    
}



function explore(){
    
    
}
*/




?>


