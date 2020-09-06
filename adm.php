<!DOCTYPE html>
<html>



<?    session_start();

include ('conecta.php');
?>


	<head>
	
<link rel="49d33f_0499eef5ff18438592f4543cca97352f~mv2 icon" href="https://static.wixstatic.com/media/49d33f_0499eef5ff18438592f4543cca97352f~mv2.png" >

<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  
    <meta charset="utf-8"/>


		<title>
		ADM
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

width: 100%
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
right:20%;
	position: absolute;
   top: 25px;
   
     background-color: black;
     border: 1px solid #FF7700;
   }
#botoesMenu {
	
	visibility: hidden;
	
   
   }
.botao {

	font-weight: bold;
	margin-left: 02px;
	font-family: Nimbus Sans;
    background-color: transparent;
    outline: 0;
    text-align: left;
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


	width: 70%;
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

<body>


<!-- MENU -->

<hr/ class= "hrb" style= "margin-top: 2px;">
<hr/ class= "hra" style= "margin-top: -16px;">
	
	<div>
			<div class="hs53">
				<img style="margin-top:-1%;" width="270px" src="https://static.wixstatic.com/media/49d33f_1b99852a9f63498084abf3dba864f78a~mv2.jpg">
						<!-- Logo -->
						<div class="hs52">
									<img width="120px" src="https://static.wixstatic.com/media/49d33f_0499eef5ff18438592f4543cca97352f~mv2.png">
									<div class="hs51">VENTO<font color="#CCCCCC" >DE DEUS</font></div>

						</div>
						<!-- Logo -->
			</div>
			
	</div> 
<div>

	<ul id="botoesMenu"class="Menu">
          <button class= "botao"style='width:100%;' onclick="(window.location= 'inicio.php')">Início</button><br>
          <button class= "botao" style='width:100%;' onclick="(window.location= 'blog.php')">Blog</button><br>
          <button class= "botao" style='width:100%;' onclick="(window.location= 'Facebook')">Redes Sociais</button><br>
          <button class= "botao" style='width:100%;'>Ajuda ao necessitado (Em breve)</button><br>
		  <button class= "botao" style='width:100%;' >Podcast (Em breve)</button><br>
		  <button class= "botao" style='width:100%;' onclick="(window.location= 'sobre')">Sobre</button><br>
		  <button class= "botao" style='width:100%;' onclick="(window.location= 'post-Escrever')">Criar Post</button><br
    
        </ul>


	 
	 </div>
	<button  id="botaoMenu" style= "cursor:pointer; position: absolute;top: 25px;   left: 80%; border-radius:5px; background: black; width: 60px; height: 50px; border: 1px solid #FF7700;">
			
			<hr/ style="width: 50%; border-color: #FF7700; ">	
			<hr/ style="width: 50%; border-color: #FF7700; ">
	</button>
	<button  id="botaoMenuX" style= "visibility:hidden; cursor:pointer; position: absolute;top: 25px;   left: 80%; border-radius:5px; background: black; width: 60px; height: 50px; border: 1px solid #FF7700; ">
		<div>
			<hr/ style="position:absolute; left:13px; top:8px;  transform: rotate(45deg);width: 50%; border-color: #FF7700; ">	
			<hr/ style="position:absolute; left:13px; top:8px;  transform: rotate(135deg);width: 50%; border-color: #FF7700; ">
			</div>
	</button>
	
<script>

	
	
function id(el) {
  return document.getElementById(el);
}


id('botaoMenu').addEventListener('click',function () {
document.getElementById("botoesMenu").style = 'visibility: visible; ';
document.getElementById("botaoMenuX").style.visibility = 'visible';	
document.getElementById("botaoMenu").style.visibility = 'hidden';	
})
id('botaoMenuX').addEventListener('click',function () {
document.getElementById("botoesMenu").style = 'visibility: hidden;';	
document.getElementById("botaoMenuX").style.visibility = 'hidden';	
document.getElementById("botaoMenu").style.visibility = 'visible';	
})

</script>
<!-- FIM DO MENU -->
<br>
	<br><br><br>
	<!-- LOGIN -->
	<?php
 $usuario   = $_SESSION['usuarioNome']; 
 ?>
 
        <div  align=  "center" style= "color: white; font-family:Arial;" >Olá <strong><?php echo $usuario;?></strong> - Hoje é: <?php echo date('d/m/Y') ;?>

<button id="logout" class= "botao" style='width:100px; text-align:center; ' onclick="(window.location= '/login/sair.php')">Sair</button>
<button id="login"class= "botao" style='width:100px; text-align:center;' onclick="(window.location= '../login')">Login</button>
<br>  
        </div><!--Bem Vindo-->
  <?php 
 
 if ($usuario != "" ) { ?>
 
  <script>
 document.getElementById("logout").style.visibility = 'visible';
 document.getElementById("login").style.visibility = 'hidden';
   </script>
   <?php } else{ ?>
  
  <script>
 document.getElementById("logout").style.visibility = 'hidden';
 document.getElementById("login").style.visibility = 'visible';
   </script>
 <?php } ?>
 
<!-- LOGIN -->
<div align= "center">
<p style="font-family: Nimbus Sans; text-align: center;width:90%;color:white; font-size:23pt">Área administrativa</p><br>
			<div class= "postagem" style="">
			<hr/ class= "hra">
											<div align= "left"> 
											
												<form action="blog.php" method="get">
<button type="submit" name="categoria" id="idPessoa" class="botao"  value="Todos" style= " background-color:#FF5500">Todos</button>
<button type="submit" name="categoria" id="idPessoa" class="botao"  value="Leis" style= " background-color:#FF5500">Leis</button>
<button type="submit" name="categoria" id="idPessoa" class="botao"  value="Obediencia" style= " background-color:#FF5500">Obediência</button>
<button type="submit" name="categoria" id="idPessoa" class="botao"  value="Festas do nosso Deus" style= " background-color:#FF5500">Festas do nosso Deus</button>
									    </form>
										</div>
						<br>
						
						
<div class= "postagem" >
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
              $imagem = $linha['imagens'];
               
             //  $total= 4;
              ?>
              <?php
 
              /*
              * $i é uma variável contadora, ela começa com o valor de 1 ($i = 1)
              * e a cada repetição soma-se 1 a i ($i++). Encerra-se as repetições
              * quando i é menor ou igual a 10 ($i <= 10). Toda vez que esta repetição
              * é realizada, cria-se um item de lista (li) com o valor do contador $i
              */
              
               
 // for($i=0; $i<1; $i++)
 	for($i = 1; $i <= 1; $i++)
                  {
       
       
echo '	<div class= "blocoDePostagens" style= "margin-top: 5px" >
					
			<img align= "left"style="margin-left:10px;margin-top: 10px; " height="120vw" src="'.$imagem.'">
			
				<h5 align= "left" style="color:white; left:50px">'. $tit.'</h5>
				<br>	<p align= "left" style="left:50px; color: white;">'. $subt.'</p>
		<br>		
	<br>
		<form action="post-editar.php" method="get">
							
						
<button type="submit" name="titulo" id="idPessoa" class="botao"  value="'.$tit.'" style= " background-color:#FF5500">Editar/Apagar</button>
</form>		
<hr/ style= " border-color:white;">

	 </div>';
                            
  //<input  style= "position:absolute; background-color: #FF5500; outline: 0; text-align: center; border-radius: 15px; border: 1px solid #blue; font-size: 10pt; margin: 2px; color: black; margin-left:100px; width:200px" id="enviar2" value ="Ver mais" type="button" >

						
     }	
                  
              
                
                            
              ?>
              
              

<?php
		// finaliza o loop que vai mostrar os dados
		}while( $linha = mysql_fetch_assoc($dados));
	// fim do if
	}
?>
</div>

						<br><br>
						
<div align="left" >

</div>						
						
			<br>
			
<hr/ class= "hrb">
			</div>
<br>
</div>

<hr/ class= hra>

</body>
		<div align= "center">
					<div style="font-family: Comic Sans Ms; background: #605E5E; text-align: center; width:50%; margin-left: center;">
							<p style= "color:white">© 2020 de Leandro Donizete e Natália Domingues.<br>

oventodedeus@gmail.com</p>
					</div>
		</div>
</html>