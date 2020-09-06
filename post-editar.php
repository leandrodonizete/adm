<!DOCTYPE html>
<html>


	<head>
	<?
	
    session_start();
include('conectaPost.php');
?>
<link rel="49d33f_0499eef5ff18438592f4543cca97352f~mv2 icon" href="https://static.wixstatic.com/media/49d33f_0499eef5ff18438592f4543cca97352f~mv2.png" >

<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  
    <meta charset="utf-8"/>


		<title>
Editando
		</title>

<style>
.miniatura {
    height: 75px;
    border: 1px solid #000;
    margin: 10px 5px 0 0;
  }



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
          <button class= "botao"style='width:100%;' onclick="(window.location= '../inicio')">Início</button><br>
          <button class= "botao" style='width:100%;' onclick="(window.location= '../blog')">Blog</button><br>
          <button class= "botao" style='width:100%;' onclick="(window.location= '../Facebook')">Redes Sociais</button><br>
          <button class= "botao" style='width:100%;'>Ajuda ao necessitado (Em breve)</button><br>
		  <button class= "botao" style='width:100%;' >Podcast (Em breve)</button><br>
		  <button class= "botao" style='width:100%;' onclick="(window.location= '../sobre')">Sobre</button><br>
		  <button class= "botao" style='width:100%;' onclick="(window.location= '../adm')">  Área administrativa  </button><br>
          <button class= "botao" style='width:100%;' onclick="(window.location= '../post-Escrever')">Criar Post</button><br>
    	  
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

id('limparFotos').addEventListener('click',function () {
document.getElementById("imagens").value = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAMAAABjGQ9NAAAAA1BMVEX///+nxBvIAAAAJklEQVRoge3BgQAAAADDoPlT3+AEVQEAAAAAAAAAAAAAAAAAAM8AO5QAAWgYnEQAAAAASUVORK5CYII="	
 document.getElementById("visualizacao").src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAMAAABjGQ9NAAAAA1BMVEX///+nxBvIAAAAJklEQVRoge3BgQAAAADDoPlT3+AEVQEAAAAAAAAAAAAAAAAAAM8AO5QAAWgYnEQAAAAASUVORK5CYII="	
})


</script>
<!-- FIM DO MENU -->

	<br><br><br>
	<!-- LOGIN -->
	<?php
 $usuario   = $_SESSION['usuarioNome']; 
 ?>
 
        <div  align=  "center" style= "color: white; font-family:Arial;margin-left:15%;" >Olá <strong><?php echo $usuario;?></strong> - Hoje é: <?php echo date('d/m/Y') ;?>

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
<script>

window.onload = function() {

function id(el) {
  return document.getElementById( el );
}

var today = new Date();
var dy = today.getDate();
var mt = today.getMonth()+1;
var yr = today.getFullYear();
//document.getElementById('dataDaPublicacao').value=today;


}

</script>
<br><br><br><br>
<div align= "center">
<p id="eee" style="font-family: Nimbus Sans; text-align: center;width:90%;color:white; font-size:23pt">EDITANDO UM POST</p><br>
			<div class= "postagem">
			<hr/ class= "hra">
											<div align= "left"> 
											<button id= "Todos" class= "botao">Todos</button>
											<button id= "Categoria1" class= "botao">Lei</button>
											<button id= "Categoria2" class= "botao"> Obediência</button>
											<button id= "Categoria3" class= "botao">Festas do nosso Deus</button>
											</div>
					
					
<?php	
$sql="SELECT * from Post where id = '".$_GET["id"]."' ";
$rs=mysql_query($sql,$conn) or die(mysql_error());
$result=mysql_fetch_array($rs);
	
	echo '<div class= "textoPostagem"><br>
		<form name="postagem" action="insertEditar.php" method="post">
					Título:
					<br>
<textarea  name= "titulo" id="titulo" style="font-family: Comic Sans Ms; text-align: left;width:90%; ">'.$result["titulo"].'</textarea>
						
						
						<br>
					Subtítulo:	
					<br>
<textarea name="subtitulo"  id= "subtitulo"style="font-family: Comic Sans Ms; text-align: left;width:90%;">'.$result["subtitulo"].'</textarea>
						

						<textarea  name= "texto" id="texto"style="font-family: Comic Sans Ms; text-align: left;width:90%; height: 1000px">'.$result["texto"].'
		</textarea><br>
Publicado em: <input type="datetime-local" id="dataDaPublicacao" name="dataDaPublicacao" value="'.$result["dataDaPublicacao"].'">

<br>
Autor: <input name="autor" id="autor" type="text" value="'.$result["autor"].'">

Categoria: <input name="categoria" id="categoria" type="text" value="'.$result["categoria"].'">

<input class ="botao" type="button" value="pp" onClick="document.postagem.ans.value+="t"+", ">
		
		

<input class="esquerda" type="textfield" name="ans" value="">
<br>
		
				<br>
<img id="visualizacao" name="visualizacao" align= "left"style="margin-left:10px; " height="100px" src="'.$result["imagens"].'">
<br><button  type="button"class= "botao"   style= "color:black;" id="limparFotos">Limpar</button>

<input accept="image/*" name= "imagens"type="file" multiple value="'.$result["imagens"].'" id="imagens">
<div class="galeria"></div>	





<br><br>
id<input type="text" name="id" value='.$result["id"].'>	

<br><br>	

<input class= "botao"  style= "color:black;" id="enviar"type="submit">
<br><br>
				

	
</form>
	
	
	<form action="insertApagar.php" method="post">
	  	
<input class= "botao"   style= "color:black;" id="apagar"type="submit" value="Apagar">
<input type="hidden" name="tituloapagar" value='.$result["titulo"].'>	

</form>
<br><br><br><br>
		  
</div>	';
///================
//<a method="post" href="insertApagar.php?titulo= echo '.$result["titulo"].'">Remover</a>
///================
?>
<div align="left" >
    
</div>						
					


  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
				
		
<script>

$(function() {
// Pré-visualização de várias imagens no navegador
var visualizacaoImagens = function(input, lugarParaInserirVisualizacaoDeImagem) {

    if (input.files) {
        var quantImagens = input.files.length;

        for (i = 0; i < quantImagens; i++) {
            var reader = new FileReader();

            reader.onload = function(event) {
                $($.parseHTML('<img class="miniatura">')).attr('src', event.target.result).appendTo(lugarParaInserirVisualizacaoDeImagem);
            }

            reader.readAsDataURL(input.files[i]);
        }
    }

};


$('#imagens').on('change', function() {
    visualizacaoImagens(this, 'div.galeria');
});

  $("#limparFotos").on('click', function(){
      $('#imagens').val('');
      $('#visualizacao').src('');
  i=0;
     // $(this).hide();
  });
});


  </script>
		<?php	
$sql2="SELECT * from Categorias";
$rs2=mysql_query($sql2,$conn) or die(mysql_error());
$result2=mysql_fetch_array($rs2);	

$cat = $result2["Categoria"];


if(mysql_num_rows($resultado)>0) {
         echo "<table border='1'>"; //Criamos a tabela
         //Aqui criamos o cabeçalho da tabela.
         // A tag <tr> abre uma linha, enquanto a <td> abre uma célula.
         echo "<tr><td>Categoria titulo</td>"
              ."<td>Categoriaa</td>"
              
              ."</tr>"; // Fechamos o cabeçalho. 
}   

while($exibe=mysql_fetch_array($rs2)) {
$id = $exibe['Categoria'];
//Não exibi todos os dados, agora é só você completar, colocando cada célula dentro de um <td>
     echo '"<tr><td>'.$exibe[Categoria].'</td>"
          ."<td><input class ="botao" type="button" value="'.$id.'" onClick="document.postagem.ans.value+='.$id.'"></td>"
          ."</tr>"';
}
// E fora do while fechamos a tabela.
echo "</table>";
       	  
         ?>




			
<input class ="esquerda2002" type="button" value="<?'.$tit.'?>" onClick="document.postagem.ans.value+='pppp'+', '">

			
			
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