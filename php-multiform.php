<?php 

function form_filtrele($post){
   return is_array($post) ? array_map("form_filtrele",$post) : htmlspecialchars(trim($post)); 

}
$_POST = array_map("form_filtrele", $_POST);

function post($name){
if(isset($_POST[$name])){
    return $_POST[$name];
}
}
if(post("giriş_yap")){
    print_r($_POST);
}
if(post("kayıt_ol")){
    print_r($_POST);
}
?>
<form action="" method="post">
    <h3>Giriş Yap</h3>
    Kulanıcı Adı: <br>
    <input type="text" name="kadi"> <br>
    Şifre: <br>
    <input type="password" name="sifre" ><br>
    <input type="hidden" name="giriş_yap" value="1">
    <button type="submit">giriş yap</button>
</form>
<hr>
<form action="" method="post">
    <h3>Kayıt ol</h3>
    Kulanıcı Adı: <br>
    <input type="text" name="kadi"> <br>
    Şifre: <br>
    <input type="password" name="sifre" ><br>
    E-posta: <br>
    <input type="email" name="mail"> <hr>
    <input type="hidden" name="kayıt_ol" value="2">
    <button type="submit">Kayıt ol</button>
</form>