<!DOCTYPE html>
<html>
<head>
	<title>Projeto 5</title>
	<meta charset="utf-8">
	<meta name="description" content="Descrição do meu site.">
	<meta name="keywords" content="palavras,separadas,por,virgulas">
	<meta name="author" content="Luiz Felipe">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Oswald&display=swap" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<header style="border-bottom: 2px solid #EB2D2D;" >
		<div class="container">
			<div class="logo">
				<a href="home"><img src="images/logo.jpg"></a>
			</div><!--logo-->

			<nav class="desktop">
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="venda">Venda</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a goto="contato" href="contato">Contato</a></li>
				</ul>
			</nav><!--desktop-->
			<nav class="mobile">
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="venda">Venda</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a goto="contato" href="contato">Contato</a></li>
				</ul>
			</nav><!--mobile-->

			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</header>



<?php
    if(isset($_GET['url'])){
        if(file_exists($_GET['url']).'.html'){
            include($_GET['url'].'.html');
        }else{
            include('404.html');
        }
    }else{
        include('home.html');
    }

?>


<footer>
		<div class="container">
			<nav>
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="venda">Venda</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a goto="contato" href="contato">Contato</a></li>
				</ul>
			</nav>
			<p>Todos os Direitos Reservados</p>
			<div class="clear"></div><!--clear-->
		</div><!--container-->
</footer>


	<script src="js/jquery.js"></script>
	<script src="js/menu_responsivo.js"></script>
	<script src="js/functions.js"></script>

</body>
</html>