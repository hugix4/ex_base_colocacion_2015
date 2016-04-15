<?php
header("Content-Type: text/html;charset=utf-8");
require('fxPreguntas.php');
require('secure_xDsua.php');
require_once('cnxh.php');
$funciones=new fxpreguntas();
$conexion=new conexion();
$conexion->conectar();
?>
<html>
	<head>
	<link href="Favicon.ico" type="image/x-icon" rel="shortcut icon" />
	 <!--[if lt IE 9]> 
	<script type="text/javascript"> 
	   document.createElement("nav"); 
	   document.createElement("header"); 
	   document.createElement("footer"); 
	   document.createElement("section"); 
	   document.createElement("article"); 
	   document.createElement("aside"); 
	   document.createElement("hgroup"); 
	</script> 
	<![endif]-->
		<title>Coordinaci&oacute;n General de Lenguas UNAM</title>
		<link rel="stylesheet" href="css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	 <script>
	  $(document).ready(function(){
		
		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
				})

			})
			
		$(document).ready(function()
		{		
			$("#boton").click(function ()
			{ //($i=(1+$Nactual);$i<=($Npreguntas+$Nactual);$i++)
			
			var neutro="";
			var radio;
			var txt="";
			var i;
			var j;
			var sel=0;
			var nombre=document.getElementsByName("Et")[0].value;
			var v2=0;
			
			if(nombre==12)
			{
			var v2=5;
			//alert("Nombre es: "+nombre+" y v2 es: "+v2);			
			}
			
			var v1=(nombre*10)-9;
			for(var i=v1;i<=(v1+9-v2);i++){
			   neutro="p"+i;
			   //alert("neutro tiene un valor en "+i+" de "+neutro);       
			   radio=document.getElementsByName(""+neutro); 
			   for(j=0;j<radio.length;j++){
				//alert("Hola "+j);
				if(radio[j].checked){     
				 sel++;
				}
			   }
			}
			if(sel==0){
			 alert("No has respondido nada");
			 return false;
			}
			if(sel>0 && sel<(10-v2)){
			 alert("Te faltan preguntas por responder");
			 return false;
			}
			if(sel==10-v2){
			 //alert("Bien, finalizaste la etapa");
			 $("#examen").submit();
			}
			
			});
		});
		
		
		function todas($valor){
			var allElems = document.getElementsByTagName('input');
			for (i = 0; i < allElems.length; i++) {
				if (allElems[i].type == 'radio' && allElems[i].value != $valor) {
					allElems[i].checked = true;
				}
			}
		}	
		
	 </script>
		 
	<div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="18%" align="center" border="0" usemap="#CGLh"/></a>
		<table border=0 width="100%"><tr><td align="center">
			<map name="CGLh"> 
				<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
				<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
			</map>
		 </table>
	</div>
	</head>	
	<body>
	
		<style>
			.container{
				width: 100%;
				margin: 0 auto;
			}
			ul.tabs{
				margin: 0px;
				padding: 0px;
				list-style: none;
			}
			ul.tabs li{
				background: #dbae18;
				color: #000;
				display: inline-block;
				padding: 10px 15px;
				cursor: pointer;
			}

			ul.tabs li.current{
				background: #3078ef;
				color: #fff;
			}

			.tab-content{
				display: none;
				background: #3078ef;
				padding: 15px;
			}

			.tab-content.current{
				display: inherit;
			}
		</style> 
<!--****************************Esta es la secci&oacute;n destinada a la barra del men&uacute; principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Examen de Colocaci&oacute;n 2015</b>										
					</ul>
	</div>
<!--****************************Termino de la secci&oacute;n de la barra del men&uacute; principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aqu&iacute; se envuelve todo el contenido de la p&aacute;gina -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		<br/>
		<div class="container">

		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1"><b>Preguntas</b></li>
			
		</ul>
	<div id="tab-1" class="tab-content current">				
	<!--Funci&oacute;n de php para mostrar la pregunta y registro correspondiente sin tanto rollo-->
	<?php
		/*Esta funci&oacute;n obtiene como arreglo las respuestas seleccionadas de los radiobutton*/
		function getRespuestas($Npreguntas,$Nactual){
			$res=array();
			for($i=1+$Nactual;$i<=$Npreguntas+$Nactual;$i++){						
				$res[$i]=$_POST['p'.$i];
			}
			return $res;
		}
		
		/*Funci&oacute;n que obtiene un arreglo de 1 y 0 las respuestas bien o mal*/
		function rCorrecta($respuestas,$correctas,$Npreguntas,$Nactual){		
			$rCor=array();
			for($i=1+$Nactual;$i<=$Npreguntas+$Nactual;$i++){
				if($respuestas[$i]==$correctas[$i]){
					$rCor[$i]=1;			
					//echo "La respuesta correcta es: $ansArr[$h]";
				}
				else{
					$rCor[$i]=0;			
				}		
			}
			return $rCor;			
		}
	
	
		
		/*Funci&oacute;n que obtiene los arreglos binarios como una sola cadena*/
		function cadenaBin($Npreguntas,$rBinarias,$Nactual){
			$cadBin='';
			for($i=1+$Nactual;$i<=$Npreguntas+$Nactual;$i++){
				$cadBin.=$rBinarias[$i];
			}
			return $cadBin;
		}
		
		
		
	
	
		function pregunta($num,$Pregunta,$OpA,$OpB,$OpC,$OpD, $RespuestasC, $rBien,$etapa){		
			$ansArr=array($OpA,$OpB,$OpC,$OpD);
			shuffle($ansArr);
			echo "<br/>
			<br/>
			<br/>
			<b>
			<font color='#08088A'>
				".$num.". 
			</font>
			<font id='pg".$num."' color='#08088A'>
				".str_replace("B:","<br/>&nbsp;&nbsp;&nbsp;&nbsp;B:",$Pregunta)."
			</font>
			</b>
			
			<br/>
			<br/>
			<input type='radio' name='p".$num."' value='".$ansArr[0]."'>
			<font color='#08088A'>A. </font>
			".$ansArr[0]."
			</input>
			<br/><br/><input type='radio' name='p".$num."' value='"			
			.str_replace("'","&#39;",$ansArr[1]).			
			"'><font color='#08088A'>B. </font>".$ansArr[1]."</input>
			<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[2]."'><font color='#08088A'>C. </font>".$ansArr[2]."</input>
			<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[3]."'><font color='#08088A'>D. </font>".$ansArr[3]."</input>		
			<input type='hidden' name='R".$num."' value='".$rBien."'>
			<input type='hidden' name='Et' value='$etapa'>
			</br></br>";
		}
		
		echo "
		<style type='text/css'>
					
			div.tabla_centro{
			text-align: center;
			}

			div.tabla_centro table {
			margin: 0 auto;
			text-align: center;
			}			
		</style>";					
		echo "<div class='tabla_centro'><br/>";			
				
		$Cuenta=$_SESSION[Cuenta];
		$Termino=$funciones->consultaUnica("select Termino from bdG where Cuenta=$_SESSION[Cuenta]");
		//echo "Cuenta=$Cuenta<br/>";
		$dePost='';
		
		
		if($Termino=='S')
		{
			$Cal=$funciones->consultaUnica("select Calificacion from bdG where Cuenta=$_SESSION[Cuenta]");
			echo "Ya haz hecho el examen<br/>El resultado de tu evaluaci&oacute;n es: $Cal";
			echo "<br/><br/><button type='button'style='margin-left:100px;'><a href='salirG.php' style='color:black'>Cerrar Sesi&oacute;n</a></button>";
		}
		
		
		
		if(empty($_POST[Et]))
		{//$_POST[Et]==null){
			//echo"El valor de post es nulo, por tanto se ocupar&aacute; el valor de la BD<br/>";
			$etapa=$funciones->consultaUnica("select Etapa from bdG where Cuenta=$_SESSION[Cuenta]");
			$dePost='N';
			//echo"Sin post Etapa: ".$etapa;
			//echo"<br/>";
			if($etapa==13 && $Termino=='N')
			{	
				echo"Adentro del if<br/>";
				$cuenta=$_SESSION[Cuenta];
				$arrayBin=$funciones->obtenerArrayBinario(12,$_SESSION[Cuenta]);
				echo"El array bin<br/>";
				print_r($arrayBin);
				echo"<br/>";
				$calNum=$funciones->obtenerCalNum(115,$arrayBin);
				echo "La cal num: ".$calNum;
				echo"<br/>";
				$colocacion=$funciones->colocacion($arrayBin);
				echo $colocacion;
				echo"<br/>";
				echo"Update bdG Set Calificacion='$calNum',Resultado='$colocacion', Termino='S' where Cuenta='$_SESSION[Cuenta]'";
				$sql="Update bdG Set Calificacion='$calNum',Resultado='$colocacion', Termino='S' where Cuenta='$_SESSION[Cuenta]'";		
				$sql=$conexion->consulta($sql);
				echo "<br/><br/><u><a href='salirG.php' style='color:black'>Salir</a></u>";
			}
			
		}
		else
		{	
			echo"De post Etapa: ".$etapa;
			//echo "Ocuparemos el valor de post<br/>";
			$etapa=$_POST[Et];
			$dePost='S';
			$Nactual=($etapa*10)-10;
			//echo "Nactual tiene valor de: $Nactual<br/>";
			if($etapa==12)
			{
			$Npreguntas=5;
			}
			else
			{
			$Npreguntas=10;
			}
			
			if($etapa==13){echo"Si estamos en 13";}
			
			$respuestas=getRespuestas($Npreguntas,$Nactual);//Aqui se obtienen las respuestas tal cual en un arreglo que empieza en 1 no en 0 y termina en 115 en vez de 114			
			//echo "Respuestas tal cual=";
			//print_r($respuestas);
			//echo"<br/><br/>";
			
			$rBinarias=rCorrecta($respuestas,$correctas,$Npreguntas,$Nactual);//Aqui se obtiene el arreglo binario '1010101' que da la suma para la calificacion final
			//echo "Respuestas binarias: ";
			//print_r($rBinarias);
			//echo"<br/><br/>";
			
			$respuestas2='';
			for($i=(1+$Nactual);$i<=($Npreguntas+$Nactual);$i++){				
				$respuestas2.='@'.$respuestas[$i];
			}			
			//echo"Respuestas a separar: $respuestas2";
			//echo"<br/>";
			$cadBin=cadenaBin(10,$rBinarias,$Nactual);  //Esta funci&oacute;n genera el arreglo binario como cadena de texto
			//echo "<br/>Cadena binaria es: $cadBin<br/>";
			//echo "<br/>Contenido de session: $_SESSION[Refrescar]<br/>";			
			//echo "<br/>Termino: $Termino<br/>";
			
			
			if ($etapa>=0 && $etapa<12 && $dePost=='S')
			{				
				$etapaDB=$etapa+1;
				echo"Update bdG Set Bin$etapa='$cadBin', Rc$etapa='$respuestas2', Etapa='$etapaDB' where Cuenta='$_SESSION[Cuenta]'";
				$sql="Update bdG Set Bin$etapa='$cadBin', Rc$etapa='$respuestas2', Etapa='$etapaDB' where Cuenta='$_SESSION[Cuenta]'";	
				$sql=$conexion->consulta($sql);
			}
			
			else if($etapa==12 && $dePost=='S')
			{	
				echo"Update bdG Set Bin12='$cadBin',  Rc12='$respuestas2', Etapa='13' where Cuenta='$_SESSION[Cuenta]'";
				$sql="Update bdG Set Bin12='$cadBin',  Rc12='$respuestas2', Etapa='13' where Cuenta='$_SESSION[Cuenta]'";		
				$sql=$conexion->consulta($sql);
				echo "<br/><br/><u><a href='reG.php' style='color:black'>Resultado</a></u>";
			}
			
			
			/*$sql="Update bdG Set Bin12='$cadBin',  Rc12='$respuestas2', Etapa='12', Calificacion='$calNum',Resultado='$colocacion', Termino='S' where Cuenta='$_SESSION[Cuenta]'";*/
			
			/*else if($etapa==12 && $dePost=='S')			
			{
				echo"Update bdG Set Bin11='$cadBin',  Rc11='$respuestas2', Etapa='12',  Termino='S' where Cuenta='$_SESSION[Cuenta]'";
				$sql="Update bdG Set Bin11='$cadBin',  Rc11='$respuestas2', Etapa='12',  Termino='S' where Cuenta='$_SESSION[Cuenta]'";		
				$sql=$conexion->consulta($sql);
				
			}*/
			
		
		}
		
		//echo "El valor que tiene etapa es: $etapa y el de dePost: $dePost<br/>";
		
		
		
	//Esto es lo nuevo para las preguntas, habr&iacute;a que modificarlo para que se vuelva generico, como funciones tal vez	
		
		if($Termino=='N')
		{//Estos son los if decisivos en virtud del grado en el que se encuentren@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@		
			if($etapa>=0 && $etapa<=10){
				echo "<form align='justify' id='examen' action='reG.php' method='POST' style='width:600px;margin-left:400px;'>";
				echo("<h4 style='margin-left:-100;'>READ THE STATEMENTS AND THEN COMPLETE THEM. CHOOSE THE CORRECT ANSWER: a, b, c , d . </h4><br/>");
				for($i=($etapa*10)+1;$i<=($etapa*10)+10;$i++)
				{
					$Num=$i;
					$sqlQ = "select Pregunta, A, B, C, D, Respuesta from pFO15 where Numero='$Num'";
					$sqlQ=$conexion->consulta($sqlQ);
					while($rowQ=mysql_fetch_array($sqlQ))
					{
						$Pregunta=$rowQ["Pregunta"];
						$OpA=$rowQ["A"];
						$OpB=$rowQ["B"];
						$OpC=$rowQ["C"];
						$OpD=$rowQ["D"];
						$RespuestasC=$rowQ["Correcta"];
						$rBien=$rowQ["rCorrecta"];
						
					}
													
					pregunta($i,$Pregunta, $OpA, $OpB, $OpC, $OpD, $RespuestasC, $rBien,($etapa+1));
					
				}	
				echo "<input type='hidden' name='Cuenta' value='$_SESSION[Cuenta]'>";
				echo "<input type='hidden' name='Grado' value='$Grado'>";
				$prueba=$_SESSION['Refrescar']='S';
				echo "<input type='hidden' name='Refrescar' value='$prueba'";
				echo "<br/><br/><input type='submit' id='boton' value='Siguientes 10' style='margin-left:150;'>";
				echo "<br/><br/><input type='button' onclick=todas(1) value='Responder Bien' style='margin-left:150;'>";
				echo "<br/><br/><input type='button' onclick=todas(0) value='Responder Mal' style='margin-left:150;'>";
				echo "</font>";
				echo "</form>";
			}
			
			if($etapa==11){
				echo "<form align='justify' id='examen' action='reG.php' method='POST' style='width:600px;margin-left:400px;'>";
				echo("<h4 style='margin-left:-100;'>READ THE STATEMENTS AND THEN COMPLETE THEM. CHOOSE THE CORRECT ANSWER: a, b, c , d . </h4><br/>");
				for($i=111;$i<=115;$i++)
				{
					$Num=$i;
					$sqlQ = "select Pregunta, A, B, C, D, Respuesta from pFO15 where Numero='$Num'";
					$sqlQ=$conexion->consulta($sqlQ);
					while($rowQ=mysql_fetch_array($sqlQ))
					{
						$Pregunta=$rowQ["Pregunta"];
						$OpA=$rowQ["A"];
						$OpB=$rowQ["B"];
						$OpC=$rowQ["C"];
						$OpD=$rowQ["D"];
						$RespuestasC=$rowQ["Correcta"];
						$rBien=$rowQ["rCorrecta"];
						
					}
													
					pregunta($i,$Pregunta, $OpA, $OpB, $OpC, $OpD, $RespuestasC, $rBien,12);
				}
				echo "<br/><br/><input type='submit' id='boton' value='Terminar' style='margin-left:150;'>";
				echo "<br/><br/><input type='button' onclick=todas(1) id='boton' value='Responder Bien' style='margin-left:150;'>";
				echo "</font>";
				echo "</form>";
			}
			
		}
		
			
		
		
		
		
		//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@Aqu&iacute; comenzar&aacute;n las preguntas de la etapa 1
		/*if($etapa==1){
			echo"etapa es igual a $etapa";
		}*/
		//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@Fin etapa 1
		
		//echo "Respuestas recibidas correctamente, gracias por tu participaci&oacute;n. Pronto te haremos saber tus resultados";
		//echo "lo que se envi&oacute; a mySQL es : Update Xents Set p1='$respuestas2', Calificacion='".$calfin."', Termino='S' where Cuenta='$_POST[Cuenta]'";
		//echo "La calificaci&oacute;n que obtuviste en el ex&aacute;men es de: ".$calfin." y respuestas fue igual a ".$respuestas2;		
		//echo "<br/><button type='button'><a href='salirxDsua.php' style='color:black'>Cerrar Sesi&oacute;n</a></button>";
		
		
		
	?>
		
	</div>	
</div><!-- container --><br/><br/>
		
		
		
		
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2015. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Ingeniero Hugo Luna a.k.a. hugix4-->
</body>
</html>