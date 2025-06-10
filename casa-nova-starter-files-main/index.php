<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Casa Nova Projeções</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
	integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" 
	rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
	referrerpolicy="no-referrer" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

	<link rel="icon" type="image/png" href="ativos/logo-icon.png">
	<link rel="stylesheet" href="css/styles.css">

	<i class="fa-regular fa-circle-user"></i>
</head>
<body>
	<header id="home">
		<nav class="navbar">
			<div class="navbar-header">
					<img src="ativos/logo.png" alt="Casa Nova Projeções Logo" class="navbar-header__logo">
					<button type="button" class="navbar-header__toggle"> 
						<i class="fas fa-bars"></i>
					</button>
			</div> <!-- navbar-header -->

			<ul class="navbar-list">
				<li>
					<a href="index.php" class="navbar-list__link">Home</a>
				</li>
				<li>
					<a href="sobre-nos.html" class="navbar-list__link">Sobre Nós</a>
				</li>
				<li>
					<a href="projetos.html" class="navbar-list__link">Projetos</a>
				</li>
				<li>
					<a href="servicos.html" class="navbar-list__link">Serviços</a>
				</li>
			</ul> <!-- navbar-list -->

			<ul class="navbar-icons">
				<li>
					<a href="https://www.instagram.com/eng.ronaldo_mach_vernek/" target="_blank" class="navbar-icons__icon">
						<i class="fab fa-instagram"></i>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/ronaldo.machado.vernek.2025" target="_blank" class="navbar-icons__icon">
						<i class="fab fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="https://api.whatsapp.com/send/?phone=5544999003510&text&type=phone_number&app_absent=0" target="_blank" class="navbar-icons__icon">
						<i class="fab fa-whatsapp"></i>
					</a>
				</li>
			</ul>
		</nav> <!-- navbar -->

		<div class="hero">
			<img src="ativos/walpp.avif" alt="Persona" class="hero_img"></img>
			<div class="hero-texto">
				<h1 class="hero-texto__titulo">Realizando o seu sonho do jeitinho que você deseja</h1>
				<p class="hero-texto__descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi vero nihil quaerat reiciendis, velit recusandae!</p>
				<a href="#" class="hero-texto__cta">Navegar</a>
			</div> <!-- hero-texto -->
		</div> <!-- hero -->
	</header> <!-- home -->

	<section id="sobre" class="sobre">
		<h2 class="section__titulo">Sobre <span class="section__titulo--destaque">nós</span></h2>
		<div class="sobre-c">
			<img src="ativos/persona-main.jpg" alt="Sobre Nós" class="sobre-c__img">
			<div class="sobre-texto">
				<h3 class="sobre-texto__titulo">Uma nova maneira de realizar seus sonhos</h3>
				<p>Mussum Ipsum, cacilds vidis litro abertis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu
					levo! A
					ordem dos tratores não altera o pão duris. Delegadis gente finis, bibendum egestas augue arcu ut est. Praesent
					malesuada
					urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.</p>
				<br>
				<p>Si num tem leite então bota uma pinga aí cumpadi! Diuretics paradis num copo é motivis de denguis. Interagi no
					mé,
					cursus quis, vehicula ac nisi. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.</p>
			</div>
		</div> <!-- sobre-c -->
	</section>

	<section class="diferenciais" >
		<h2 class="difer__titulo">Nossos <span class="difer__titulo--destaque">diferenciais</span></h2>
		<div class="diferenciais">
			<article class="diferencial">
				<h3 class="diferencial__titulo diferencial__titulo--carteira">O melhor preço</h3>
				<p class="diferencial__descricao">Mussum Ipsum, cacilds vidis litro abertis. Todo mundo vê os porris que eu
					tomo, mas ninguém vê os tombis que eu levo!</p>
			</article>
			
			<article class="diferencial">
				<h3 class="diferencial__titulo diferencial__titulo--mapa">Alta qualidade</h3>
				<p class="diferencial__descricao">Mussum Ipsum, cacilds vidis litro abertis. Todo mundo vê os porris que eu
					tomo,
					mas ninguém vê os tombis que eu levo!</p>
			</article>
			
			<article class="diferencial">
				<h3 class="diferencial__titulo diferencial__titulo--meias">Atendimento todos os dias</h3>
				<p class="diferencial__descricao">Mussum Ipsum, cacilds vidis litro abertis. Todo mundo vê os porris que eu
					tomo,
					mas ninguém vê os tombis que eu levo!</p>
			</article> <!-- diferencial -->
		</div> <!-- diferenciais -->
	</section>
	<script src="js/scripts.js"></script>
</body>
</html>