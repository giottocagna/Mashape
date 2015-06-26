<?php

require_once( "simple_html_dom.php");

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
   sw($query);
   
        print_r(error_get_last());
    
}
else{
    
    header('Content-Type: application/json');
    $data=['Error'=>'Query Null'];
    
echo json_encode($data);
    print_r(error_get_last());
    
}





function find(){
    
    
}



function explore(){
    echo explore();
    $html = file_get_html('https://www.mashape.com/explore');
    foreach($html->find('h4') as $element) 
       echo $element->value . '<br>';
     print_r(error_get_last());
    
}





?>


