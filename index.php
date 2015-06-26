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
    echo "find aperto";
    
}



function explore(){
    
 echo "explore aperto";
    
    $html = file_get_html('https://www.mashape.com/explore');
   
    
   
    $name=array();
    $owner=array();
    $image=array();     
    foreach($html->find('h4') as $element) {
        if( $element->class =="name"){
            //echo $element->plaintext."<br>";
            array_push($name, $element->plaintext);
               
        }
        
    }
    foreach($html->find('div') as $element) {
    if( $element->class =="owner"){
            //echo $element->plaintext."<br>";
            array_push($owner, $element->plaintext);
            array_push($image,$element->src);
        }
    }
    $result = array_merge($name,$owner);
    echo json_encode($result);
    echo "<br";
    echo json_encode($image);
  //  echo json_encode($owner);
     print_r(error_get_last());
     
    
}





?>


