<html>
<head>
<title>AltasCliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(ve/imagesCAZ29MAU.jpg);
}
.Estilo1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style></head>
<body>
<?
$idProducto=$_REQUEST["idCliente"];
$nombreCliente=$_REQUEST["nombreCliente"];
$direccion=$_REQUEST["direccion"];
$telefono=$_REQUEST["telefono"];

$conectado=@mysql_connect("localhost","root","harry") or die("No se logro la conexion");
$db=mysql_select_db("veterinaria");
$query="select * from cliente where idCliente='".$idCliente." ' ";
$qry=mysql_query($query);
$i=mysql_num_rows($qry);

if($i>0)
{
?>
 <script language ="JavaScript" type="text/javascript">
alert("El cliente ya existe");
location.href="altasCliente.html";
</script>
<?
}
else
{
$nuevo="insert into cliente values('".$idCliente."','".$nombreCliente."','".$direccion."','".$telefono."')";
$qry=mysql_query($nuevo);
}
mysql_close($conectado);
?>
<span class="Estilo1"> El cliente se dio de alta</span>
</body>
</html>