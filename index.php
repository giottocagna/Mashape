<?php







print_r(error_get_last());


if((isset($_GET['query']))&&($_GET['query']!=null)) {
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
/*



print_r(error_get_last());
function find(){
    
    
}



function explore(){
    
    
}
*/

function switch($q)
{
    
    echo $q;
 /*switch ($q) {
    case "find":     
        echo "find";
        break;
     
    case "explore":
      echo "explore";
        break;
     
}*/
    
}


?>


