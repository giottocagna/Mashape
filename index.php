<?php
header('Content-Type: application/json');
if(isset($_GET['query'])) {
    // query index exists
    $query=$_GET['query'];
    
}
else{
    $data=['Error'=>'Query Null'];
    
echo json_encode($data);
    echo "ciao";
}

?>


