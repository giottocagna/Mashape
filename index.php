<?php





include("simple_html_dom.php");
include("utils.php");
















function sw($q)
{
    
    
 switch ($q) {
    case "find":     
        find();
        break;
     
    case "explore":
     explore();
        break;
     
}
    
    
  //  print_r(error_get_last());
}






header('Content-Type: application/json');
 
if((isset($_GET['query']))&&($_GET['query']!=null)) {
    // query index exists
    $query=$_GET['query'];
   sw($query);
    
   
   //     print_r(error_get_last());
    
}
else{
    
    header('Content-Type: application/json');
   
    $data=array('Error'=>'Query Null');
    
echo json_encode($data);
  
    
 //   print_r(error_get_last());
    
}





function find(){
    echo "find aperto";
    
}









?>


