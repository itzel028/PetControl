<html>
<head>
<title>Altas</title>
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
$idProducto=$_REQUEST["idProducto"];
$nombre=$_REQUEST["nombre"];
$contenido=$_REQUEST["contenido"];
$precio=$_REQUEST["precio"];
$cantidad=$_REQUEST["cantidad"];
$descripciom=$_REQUEST["descripcion"];


$conectado=@mysql_connect("localhost","root","harry") or die("No se logro la conexion");
$db=mysql_select_db("veterinaria");
$query="select * from productos where idProducto='".$idProducto." ' ";
$qry=mysql_query($query);
$i=mysql_num_rows($qry);

if($i>0)
{
?>
 <script language ="JavaScript" type="text/javascript">
alert("El producto ya existe");
location.href="altas.html";
</script>
<?
}
else
{
$nuevo="insert into productos values('".$idProducto."','".$nombre."','".$contenido."','".$precio."','".$cantidad."','".$descripcion."')";
$qry=mysql_query($nuevo);
}
mysql_close($conectado);
?>
   
<span class="Estilo1">los datos se dieron de alta</span>
</body>
</html>