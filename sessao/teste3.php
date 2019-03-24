<?php

$nome = "masterdaweb";
$valor = $_FILES['file']['name'];
$expira = time() + 3600;
setcookie($nome, $valor, $expira);


// Lê o cookie "masterdaweb"
$ler = $_COOKIE['masterdaweb'];

// Lê o cookie "masterdaweb"
$ler = $_COOKIE['masterdaweb'];
$destino = '/home/lorrana/Downloads/';
echo ' < img src = "' . $destino.$valor.'" />';

?>
<input type="file" value="<?php $valor?>">