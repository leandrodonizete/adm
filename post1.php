<!DOCTYPE html>
<html>

<?    session_start();

include ('conectar.php');
//include ('conectarPost.php');
?>

	<head>
	
<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  
    <meta charset="utf-8"/>


		<title>
Post
		</title>

<style>
.hs51 { 

    font-family: 'Anton';
	font-size: 22px;
	color:#FF7700;
	position: absolute;
	text-decoration: underline;
	 top: -15px;
   left: center;
   
} 

.hs52 {
    font-family: 'Anton';
	font-size: 28px;
	color: #CCCCCC;
	position: absolute;
   top: 20px;
   left: 65px;
}

.hs53 {

	position: absolute;
   top: 14px;
   left: 130px;
}

.h3 { 
font-family: Anton; 
font-size: 14px; 
font-style: normal; 
font-variant: normal; 
font-weight: 700; 
line-height: 15.4px; } 
color:FF7700;
.p { 
font-family: Anton; 
font-size: 14px; 
font-style: normal; 
font-variant: normal; 
font-weight: 400; 
line-height: 20px; } 

.blockquote { 
font-family: Anton; 
font-size: 21px; 
font-style: normal; 
font-variant: normal; 
font-weight: 400; 
line-height: 30px; 
} 
.pre { 
font-family: Anton; 
font-size: 13px; 
font-style: normal; 
font-variant: normal; 
font-weight: 400; 
line-height: 18.5714px; }


#esquerda3400 {


	width: 111px;
	position: fixed;
	left: 900px;
	margin-top:-100px;
	}

.circulo{
border-radius:50%;
-moz-border-radius:50%;
-webkit-border-radius:50%;

background:#FF5500;
color:white;
width:111px;
height:111px;
line-height:100px;
vertical-align:middle;
text-align:center;
font-size:30px;


}

body {
            background-color: black;
        }
.hra{
  border-color:#FF7700;

  box-sizing:border-box;
  width:100%;

  border-bottom: 5px solid #FF7700;
}
.hrb{
  border-color:#cccccc;

  box-sizing:border-box;
  width:100%;

  border-bottom: 5px solid #cccccc;
}
.Menu {


position: absolute;
   top: 25px;
   left: 500px;
   }
.botao {
	font-weight: bold;
	left: 0;
	font-family: Nimbus Sans;
    background-color: transparent;
    outline: 0;
    text-align: center;
    border-radius: 10px;
	border: 0px;
   font-size: 13pt;
   margin: 2px;
   color: white;
}

.botao:hover {
  color: white;
  background-color:#FF5500;
  transition: color 0.2s 0.10s ease;
  transition: background-color 0.2s 0.05s ease;
  cursor: pointer;
  
  }
  
  
.jsjpfylp {
	background-color: #FF7700;
}
.postagem {


	width: 900px;
	left: center;
    
    background-color: #2F2E2E;
    box-shadow: 0 0 08px;
    margin: 10px;
	
}

.textoPostagem {

	width:97%;
	left: center;
    height: 9%;
    background-color: white;
    box-shadow: 0 0 08px;
    margin: 10px;
}
</style>
</head>

<body leftmargin="50" >

<!-- MENU -->

<hr/ class= "hrb" style= "margin-top: 2px;">
<hr/ class= "hra" style= "margin-top: -16px;">
	
	<div>
			<div class="hs53">
				<img  width="250px" src="https://static.wixstatic.com/media/49d33f_1b99852a9f63498084abf3dba864f78a~mv2.jpg">
						<!-- Logo -->
						<div class="hs52">
									<img width="120px" src="https://static.wixstatic.com/media/49d33f_0499eef5ff18438592f4543cca97352f~mv2.png">
									<div class="hs51">VENTO<font color="#CCCCCC" >DE DEUS</font></div>

						</div>
						<!-- Logo -->
			</div>
			
	</div> 
<div>

	<ul class="Menu">
          <button class= "botao">Início</button>
          <button class= "botao">Blog</button>
          <button class= "botao">Redes Sociais</button>
          <button class= "botao">Ajuda ao necessitado</button>
		  <button class= "botao">Podcast</button>
		  <button class= "botao">Sobre</button>
        </ul>
</div>
<!-- FIM DO MENU -->


<br><br><br><br>
<div align= "center">
<p style="font-family: Nimbus Sans; text-align: center;width:90%;color:white; font-size:23pt">POST</p><br>
			<div class= "postagem">
			<hr/ class= "hra">
											<div align= "left"> 
											<button id= "Todos" class= "botao">Todos</button>
											<button id= "Categoria1" class= "botao">Lei</button>
											<button id= "Categoria2" class= "botao"> Obediência</button>
											<button id= "Categoria3" class= "botao">Festas do nosso Deus</button>
											</div>
						

<div>
    
<?php

	// se o número de resultados for maior que zero, mostra os dados

				if($total > 0) { 
		// inicia o loop que vai mostrar todos os dados
		do {
?>


              <?php
     
     
       



              $tit = $linha['titulo'];
              $subt = $linha['subtitulo'];
              $tex = $linha['text'];
             $link= $linha['link'];
               $lin= $linha['dataDaPublicacao'];
               
              $imagem=   $linha['imagens'];
             //  $total= 4;
              ?>
              <?php

	if ($i++ > 68) break;
	
          {            
//--------<?php
//--------$sql="SELECT * from Post where titulo= '".$_GET["titulo"]."'";
//--------$rs=mysql_query($sql,$conn) or die(mysql_error());
//---------$result=mysql_fetch_array($rs);

echo '<div class= "textoPostagem">
					

					<img src="getImage.php?id='.$link.'" width="175" height="200" />
					
						<h1>'.$tit.'</h1>
							<br>
						<h4>'.$subt.'</h4>
						<p>'.$tex.'</p>
								<br><br>
						</div>';
					
		
		

					
				
		   }	
                   
              //subtitulo reserva	<p id= "data" style="font-family: Comic Sans Ms; text-align: center;width:90%;color:white">'. $subt. '</p>	

                            
              ?>
              
              

<?php
	
// finaliza o loop que vai mostrar os dados
		}while( $linha = mysql_fetch_assoc($dados));
	// fim do if
	
	
	}
?>

			            </div>
		</div>		

				</div>
						
			<br>
			
<hr/ class= "hrb">
			</div>
<br>
</div>



<hr/ class= hra>
</div></div>
</body>
		<div align= "center">
					<div style="font-family: Comic Sans Ms; background: #605E5E; text-align: center; width:50%; margin-left: center;">
							<p style= "color:white">© 2020 de Leandro Donizete e Natália Domingues.<br>

oventodedeus@gmail.com</p>
					</div>
		</div>
</html>