<?php

$iv = "pHqePoKl";
$bit_check=8;


function deszyfer($iv,$bit_check,$zaszyfrowany,$key){
$szyszka = mcrypt_module_open(MCRYPT_TRIPLEDES,'','cbc','');
mcrypt_generic_init($szyszka, $key, $iv);
$deszycha = mdecrypt_generic($szyszka,base64_decode($zaszyfrowany));
mcrypt_generic_deinit($szyszka);
$ost=substr($deszycha,-1);
for($i=0;$i<$bit_check-1; $i++){
    if(chr($i)==$ost){

        $deszycha=substr($deszycha,0,strlen($decrypted)-$i);
        break;
    }
}

return $deszycha;
}

?>





<style type="text/css">
<!--
body {
	background-color: #DAA520;
}
.style1 {font-family: "Courier New", Courier, monospace}
.style3 {font-family: "Courier New", Courier, monospace; font-size: 24px; }
.style5 {font-family: "Courier New", Courier, monospace; font-weight: bold; }
-->
</style>
<table width="802" border="0" align="center">
  <tr>
    <td width="100" align="left" valign="bottom"><span class="style5"> Menu:</span></td>
    <td width="490"><p align="center" class="style3">Deszyfrator</p>
    <p class="style3">&nbsp;</p>    </td>
    <td width="20">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100" border="0">
      <tr>
        <td class="style1"><a href="deszyfrator.php">Deszyfrowanie</a></td>
      </tr>
      <tr>
        <td class="style1"><a href="index.php">Szyfrowanie</a></td>
      </tr>
    
    </table></td>
    <td><span class="style1">Tekst Odszyfrowany: <?php

@$content = $_POST['zawka'];
@$key = $_POST['Klucz'];
 
$content = deszyfer($iv,$bit_check,$content,$key);
echo $content;

?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td>&nbsp;</td>
      
  </tr>
</table>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">by Tomasz Soko&#322;owski 143819</p>
