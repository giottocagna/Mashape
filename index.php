<?php





include("simple_html_dom.php");









print_r(error_get_last());







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
    print_r(error_get_last());
}



function writeMsg() {
    echo "Hello world!";
}


print_r(error_get_last());


if((isset($_GET['query']))&&($_GET['query']!=null)) {
    // query index exists
    $query=$_GET['query'];
  // sw($query);
    explore();
   
        print_r(error_get_last());
    
}
else{
    
    header('Content-Type: application/json');
    $data=['Error'=>'Query Null'];
    
echo json_encode($data);
    print_r(error_get_last());
    
}





function find(){
    echo "find aperto";
    
}



function explore(){
    
 echo "explore aperto";
    
    $html = file_get_html('https://www.mashape.com/explore');
   
    
   
    
    
    foreach($html->find('h4') as $element) {
       print_r($element);
    }
     print_r(error_get_last());
     
    
}





?>


