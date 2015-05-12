<html>
<head>
<title>Altas Dueño</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 36px;
	font-weight: bold;
}
body {
	background-image: url(ve/imagesCAZ29MAU.jpg);
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<?
$idDue=$_REQUEST["idDue"];
$nombre=$_REQUEST["nombre"];
$telefono=$_REQUEST["telefono"];


$conectado=@mysql_connect("localhost","root","harry") or die("No se logro la conexion");
$db=mysql_select_db("veterinaria");
$query="select * from due where idDue='".$idDue." ' ";
$qry=mysql_query($query);
$i=mysql_num_rows($qry);

if($i>0)
{
?>
 <script language ="JavaScript" type="text/javascript">
alert("El numero dueño ya existe");
location.href="altasDue.html";
</script>
<?
}
else
{
$nuevo="insert into due values('".$idDue."','".$nombre."','".$telefono."')";
$qry=mysql_query($nuevo);
}
mysql_close($conectado);
?>
   
<span class="Estilo1">los datos se dieron de alta</span>
</body>
</html>