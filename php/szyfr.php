<?php
$iv = "pHqePoKl";
$bit_check=8;


function szyfer($iv,$bit_check,$txt,$key) {
$txt_num =str_split($txt,$bit_check);
$txt_num = $bit_check-strlen($txt_num[count($txt_num)-1]);
for ($i=0;$i<$txt_num; $i++) {$txt = $txt . chr($txt_num);}
$szyf = mcrypt_module_open(MCRYPT_TRIPLEDES,'','cbc','');
mcrypt_generic_init($szyf, $key, $iv);
$krypta= mcrypt_generic($szyf,$txt);
mcrypt_generic_deinit($szyf);

return base64_encode($krypta);
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
    <td width="490"><p align="center" class="style3">Szyfrator</p>
    <p class="style3">&nbsp;</p>
    <p class="style3">&nbsp;</p></td>
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
    <td><span class="style1">Tekst zaszyfrowany: <?PHP

	@$key = $_POST['Klucz'];
      @$content = $_POST['zawka'];
      	$zaszyfr = szyfer($iv,$bit_check,$content,$key);
   



   


	$content=$zaszyfr;
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
<p align="center">Piotr Kacprzak 155982</p>
