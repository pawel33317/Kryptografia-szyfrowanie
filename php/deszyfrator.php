<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Szyfrator</title>
    <style type="text/css">
<!--
body {
	background-color: #DAA520;
}
.style3 {font-family: "Courier New", Courier, monospace}
.style5 {font-family: "Courier New", Courier, monospace; font-weight: bold; }
.style6 {font-family: "Courier New", Courier, monospace; font-size: 24px;}
.style4 {	font-family: "Courier New", Courier, monospace;
	font-size: 24;
	font-weight: bold;
}
-->
    </style></head>
<body>

        <div align="center">
          <p align="center" class="style6">Deszyfrowanie 3DES</p>
</div>
        <table width="485" border="0" align="center">
          <tr>
            <td width="158"><span class="style4">Menu:</span></td>
            <td width="90">&nbsp;</td>
            <td width="144">&nbsp;</td>
            <td width="75">&nbsp;</td>
          </tr>
          <tr>
            <td><div align="left">
              <table width="158" height="98" border="0">
                <tr>
                  <td width="148"><span class="style3"><a href="deszyfrator.php">Deszyfrowanie</a></span></td>
                </tr>
                <tr>
                  <td height="52"><span class="style3"><a href="index.php">Szyfrowanie</a></span></td>
                </tr>
              </table>
            </div></td>
            <form action="szyforwanie.php" method="post">
              <td colspan="3"><textarea name="zawka" cols="50" rows="6">Wpisz Wiadomosc</textarea>
              <input type="submit" value="Deszyfrowanie" />
              <input name="Klucz" type="text" value="Podaj Klucz"></td>
                 </form>    
              <td>&nbsp;</td>
              <td>&nbsp;</td>
          <tr>
</table>
<p>&nbsp;</p>
<div align="center">By Tomasz Sokolowski 143819
</div>
</body>
</html>
