<html>
<head>
<title> PAGINA DO USUARIO </title>
<link rel="stylesheet" type="text/css" href="Style/Style.css" />
<meta charset = "UTF-8">
</head>
<style>
body {
    background-image: url("Fotos/1.jpg");
}
</style>

<body>
<form method="POST" action="CadastrandoChute.php">
<br>
<center>

<font size= "5" face="Arial" color= "black">
<b> PAGINA DE APOSTAS DO USUARIO </b><br>
</font>

<img src="Fotos/Bola.png" height="200" width="300"/>
<br>
<font size= "4" face="Arial" color= "black">
<b>Faça sua aposta.</b>
</font>
<br><br>
<font size= "4" face="Arial" color= "black">
<center>
<?php

for ($i=1; $i<=20; $i++){
echo "<b>Selecione o ".  $i  ." colocado<br><br>";
echo "<input type='radio' name=$i value='1'/>Palmeiras";
echo "<input type='radio' name=$i value='2'/>Flamengo";
echo "<input type='radio' name=$i value='3'/>São Paulo";
echo "<input type='radio' name=$i value='4'/>Internacional"; 
echo "<input type='radio' name=$i value='5'/>Gremio";
echo "<input type='radio' name=$i value='6'/>Atlético Mineiro";
echo "<input type='radio' name=$i value='7'/>Cruzeiro";
echo "<input type='radio' name=$i value='8'/>Botafogo";
echo "<input type='radio' name=$i value='9'/>Santos";
echo "<input type='radio' name=$i value='10'/>Bahia<br>";
echo "<input type='radio' name=$i value='11'/>Corithinas";
echo "<input type='radio' name=$i value='12'/>Ceará";
echo "<input type='radio' name=$i value='13'/>Fluminense";
echo "<input type='radio' name=$i value='14'/>Vasco";
echo "<input type='radio' name=$i value='15'/>Chapecoense"; 
echo "<input type='radio' name=$i value='16'/>Vitoria";
echo "<input type='radio' name=$i value='17'/>Paraná";
echo "<input type='radio' name=$i value='18'/>Sport Récife";
echo "<input type='radio' name=$i value='19'/>América-MG";
echo "<input type='radio' name=$i value='20'/>Fortaleza<br></b>";
echo "<br><br>";
}
?>
</font>
<button type="submit" class="botao01"  value="1" name="AdicionarChute">Adicionar Chute </button>
</center>
</form>
</center>
</body>
</html>