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
 if(post('submit')){
    print_r($_POST);
 }
 

?>

<form action=""method="post" enctype="multipart/form-data">
AD: <br>
<input type="text"name="ad" readonly value="ayberk catal">

<hr>
Hakımda: <br>
<textarea  name="hakımda" placeholder="hakında bir şeyler yaz"  cols="50" rows="10"><?php echo post("hakımda"); ?></textarea>
<hr>
meslek: <br>
<select  name="meslek" >
    <option >-- Seç --</option>
    <option <?php echo post("meslek")=="web-developer"?"selected": null ?> value="web-developer">web Developer</option>
    <option <?php echo post("meslek")=="front-end-developer"?"selected": null ?> value="front-end-developer">Front-end Developer</option>
    <option <?php echo post("meslek")=="back-end-developer"?"selected": null ?> value="back-end-developer">Back-end Developer</option>
</select>
<hr>

cinseyet: <br>
<label>
<input type="radio"  name="cinsiyet"value="erkek">
erkek
</label>
<label >
<input type="radio" checked name="cinsiyet"value="kadın">
kadın
</label>
<br>
<label for="input">buraya tıkla</label>
<input required type="text" id="input"> <hr>

İlgi alanları: <br>
<label>
<input type="checkbox" <?php echo post('ilgi_alani') && in_array('css', post('ilgi_alani')) ? ' checked' : null ?> name="ilgi_alani[]" value="css"> CSS
</label>
<label>
<input type="checkbox" <?php echo post('ilgi_alani') && in_array('html', post('ilgi_alani')) ? ' checked' : null ?> name="ilgi_alani[]" value="html"> HTML
</label>
<label>
<input type="checkbox" <?php echo post('ilgi_alani') && in_array('php', post('ilgi_alani')) ? ' checked' : null ?> name="ilgi_alani[]" value="php"> PHP
</label><hr>
Fotoraf: <br>
<input type="file" name="fotograf" > <hr>

<select name="meslek2[]" multiple size="5">
    <option>-- Seç --</option>
    <option value="web-developer">web Developer</option>
    <option selected value="front-end-developer">Front-end Developer</option>
    <option selected value="back-end-developer">Back-end Developer</option>
</select>
<hr>
<input type="hidden" name="submit" value="1">
<button type="submit">Gönder</button>

<!-- <input type="button" value="Gönder"> -->
</form>

