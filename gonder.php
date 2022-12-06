<?php 

//$_POST
//print_r($_POST);

//echo $_POST["ad"];

//strip_tags()
//htmlspecialchar()
//trim()

/*if(trim($_POST["hakımda"])==""){
//(!$_POST["hakımda"])

echo"lütfen hakınızda bışey yazın";
}else{
    print_r($_POST);
}*/

//echo strip_tags($_POST["hakımda"]); 
//$hakımda= htmlspecialchars($_POST["hakımda"]) ; 
//echo htmlspecialchars_decode($hakımda) ;
 function form_filtrele($post){
   return is_array($post) ? array_map("form_filtrele",$post) : htmlspecialchars(trim($post)); 

}
$_POST = array_map("form_filtrele", $_POST);

function post($name){
if(isset($_POST[$name])){
    return $_POST[$name];
}
}
//print_r($_POST);
//echo $_POST["hakımda"];
echo post("test");  //echo post("hakımda");



?>