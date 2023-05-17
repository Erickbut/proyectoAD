<?php
include("config.php");
$login=$_POST['login'];
$contrasenia=$_POST['contrasenia'];

$loginvalido = "SELECT usuario from admin1 where usuario='$login'";
$execonsulta=$mysqli->query($loginvalido);
$passwordvalido ="SELECT contrasenia from admin1 where contrasenia='$contrasenia'";
$execonsulta1=$mysqli->query($passwordvalido);
//$execonsulta=sqlsrv_query($conn,$loginvalido);
//$tipovalido = "SELECT  tipo from admin1  ;";
//$execonsulta=sqlsrv_query($conn,$tipovalido);
//$rows=$execonsulta->num_rows;
//while ($row = sqlsrv_fetch_array( $execonsulta, SQLSRV_FETCH_ASSOC) ) {
	//$imag=$row['nombreImg'];
//	$arr=$row['nombreUsuario'];
//}
//if(mysqli_num_rows($loginvalido) == 0){
	if($row=mysqli_fetch_array($execonsulta)!=0)
	{
		echo $login;
		header("Location:admin.php");
		if($login == $execonsulta)
		{
	if($contrasenia == $execonsulta1)
	{
	//		}
	//		else{

	//			header("Location: inicioGest.html");
	//		}
		
				
	//	}
	//	else{
	//		echo "error  coddd";
	//	}
			
		
	}
	}
}
//}
else
{
echo "error";
}
