<?php
//arama kısmında
// üye-düzenle.php?id=5
//key=value&key=value
//?kelime=ayberk&id=5
function form_filtrele($post){
    return is_array($post) ? array_map("form_filtrele",$post) : htmlspecialchars(trim($post)); 
 
 }
 $_GET = array_map("form_filtrele", $_GET);

 function get($name){
    if(isset($_GET[$name])){
        return $_GET[$name];
    }
 }
 if(get('submit')){
    print_r($_GET);
 }

//echo get("deneme");

$id=(int) get("id");
if (!is_int($id)|| !$id) {
    echo " sadece sayı olmalıdır";
}else{
    echo "ID: ". get("id");
}



?>


<form action="" method="get">
    arama:
    <input type="text" value="<?php  echo get("kelime"); ?>" name="kelime">
    <hr>
    

</form>
