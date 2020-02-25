<?php
	echo'<DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
	<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Mi primera página</title>
  </head>';
  
  
  if(!empty($_POST['radio'])){
	  $radio=$_POST['radio'];
  }else{
	    $radio=50;
  }
	//echo $radio;
  
    if(!empty($_POST['lado'])){
	  $lado=$_POST['lado'];
  }else{
	    $lado=50;
  }
	//echo $lado;
 	
	$area=3.14316*$radio*$radio;
	$peric=2*(3.14316)*$radio;
	
	$areac=$lado*$lado;
	$percuadr=$lado*4;
	
	
	
  echo'
  
  <canvas id="lienzo" width="250" height="200">Su navegador no soporta canvas :( </canvas>
  
  
  <canvas id="sectorCircular" width="250" height="200">Su navegador no soporta canvas :( </canvas>
  
  
  <canvas id="lienzo1" width="250" height="200">Su navegador no soporta canvas :( </canvas>
  
  <canvas id="myCanvas" width="'.$lado.'" height="'.$lado.'" style="border:1px solid #000000;">Your browser does not support the HTML5 canvas tag.</canvas>
  
  
  
  <script>
	var radio = null;
    var shelf = null;
    var status = null;

        //submit
        function sub(){
            radio = document.getElementById("radio");
            shelf = document.getElementById("shelf");
        };
  
  
  
  	var lienzo = document.getElementById("lienzo");
		if (lienzo && lienzo.getContext) {
		var contexto = lienzo.getContext("2d");
			if (contexto) {
					var X = lienzo.width/2;
					var Y = lienzo.height/2;
					var r = '.$radio.'

					contexto.strokeStyle = "#006400";
					contexto.fillStyle = "#6ab150";
					contexto.lineWidth = 5;
					contexto.arc(X,Y,r,0,2*Math.PI);
					contexto.fill();
					contexto.stroke();
			}
		}
		
		
		////
		
				var canvas = document.getElementById("sectorCircular");
				if (canvas && canvas.getContext) {
					var ctx = canvas.getContext("2d");
					if (ctx) {
						// El centro del circulo (X,Y) cuyo sector vamos a dibujar, y el radio R de este.
						var X = canvas.width/2;
						var Y = 10;
						var R = 140;
						// El ángulo de partida ap y el ángulo final af
						var ap = (Math.PI / 180) * 60;
						var af = (Math.PI / 180) * 120;
						// Las coordenadas del punto de partida en la circunferencia
						var Xap = X+R * Math.cos(ap);
						var Yap = Y+R * Math.sin(ap);
						
						// estilos
						ctx.fillStyle = "#abcdef";
						ctx.strokeStyle = "#1E90FF";
						ctx.lineWidth = 5;
						// empezamos a dibujar
						ctx.beginPath();
						ctx.moveTo(X,Y);
						ctx.lineTo(Xap,Yap);
						 ctx.lineTo(Xap,Yap);
						
						  
						ctx.arc(X,Y,R,ap,af);
						ctx.closePath();
						ctx.fill();
						ctx.stroke();
					}
				}
				
				
				
				function retornarLienzo(x) {
				  var canvas = document.getElementById(x);
				  if (canvas.getContext) {
					var lienzo = canvas.getContext("2d");   
					return lienzo;
				  } else
					return false;
}
				
				function dibujar() {
				  var lienzo=retornarLienzo("lienzo1");
				  if (lienzo) {
					lienzo.fillStyle="rgb(255,0,0)";
					lienzo.strokeStyle="rgb(0,0,255)";
					lienzo.lineWidth=5;
					lienzo.beginPath();
					lienzo.moveTo(150,10);
					lienzo.lineTo(10,290);
					lienzo.lineTo(290,290);
					lienzo.lineTo(150,10);
					lienzo.fill();
					lienzo.stroke();    
				  }
				}
				
				
</script>
  <body  >
  
  
  
	<form action="" method="POST">
		<p>Ingrese el Radio</p>
		<input type="number" id="radio" name="radio" required
       minlength="4" maxlength="8" size="10">
	   
	   
	   <input type="submit" value="Submit">
	   
	   <table border ="0">
	   <tr><td> EL AREA DEL CIRCULO ES:'.$area.'
	   </td></tr><tr>
	   <td> EL PERIMETRO DEL CIRCULO ES :'.$peric.'
	   </td></tr>
	   </table>
	   
	</form> 
	
	
	
	<form action="" method="POST">
	   <p>Ingrese el Tamaño del Cuadrado</p>
		<input type="number" id="lado" name="lado" required minlength="4" maxlength="8" size="10">
	   <input type="submit" value="Submit">
	   
	   	<table border ="0">
	   <tr><td> EL AREA DEL CUADRADO ES:'.$areac.'
	   </td></tr><tr>
	   <td> EL PERIMETRO DEL CUADRADO ES :'.$percuadr.'
	   </td></tr>
	   </table>
	   
	   
	</form> 
	
	<form3 action="" method="POST">
	    <p>Ingrese el tamaño del tiangulo</p>
	<input type="number" id="name" name="name" required
       minlength="4" maxlength="8" size="10">
	   <input type="submit" value="Submit">
	</form> 
	   
  </body>
</html>

';
?>