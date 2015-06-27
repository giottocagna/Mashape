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
    $image_owner=array();    
    $image_api=array();
    $desc=array();
    $prices=array();
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
        foreach($element->find('img') as $img)
            array_push($image_owner,$img->src);
        }
        if($element->class=="panel-body"){
            foreach($element->find("div") as $div){
                
                
               foreach($div->find("img") as $img)
                array_push($image_api,$img->src);
                
                if($div->class=="description"){
                    foreach($div->find("p") as $p)
                   array_push($desc,$p->plaintext);
                  
                    foreach($div->find("div") as $price)
                        if($price->class=="price text-center")
                        array_push($prices,$price->plaintext);
               }
                    
            }
        }
    }
    echo json_encode($name)."<br>";
      echo json_encode($owner)."<br>";  
    echo json_encode($image_owner)."<br>";   
   echo json_encode($image_api)."<br>";    
   echo json_encode($desc)."<br>"; 
  echo json_encode($prices)."<br>";    
   
    
   
 
     print_r(error_get_last());
     
    
}





?>


