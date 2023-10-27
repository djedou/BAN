<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon " href="img/logoicc.png" type="image/x-icon" />
	<meta charset="utf-8">
	<title>B.A.N</title>
</head>
<style type="text/css">
	body {
		padding: none;
		margin: none;
		border: none;
		height: 100%;
		width: 100%;
		background-color: rgba(255, 255, 255, 1.0)
	}

	html {
		padding: none;
		margin: none;
		border: none;
		height: 100%;
		width: 100%;
	}

	body::-webkit-scrollbar {
		display: none;
	}

	.contenair-apps::-webkit-scrollbar {
		display: none;
	}

	.contenair-slide::-webkit-scrollbar {
		display: none;
	}

	header {
		margin-top: 12%;
	}

	a {
		color: inherit;
		text-decoration: none;
	}

	.background {
		/*background-image: url(img/logoicc.png);*/
		background-color: #000;
		background-position: center;
		background-size: contain;
		background-repeat: no-repeat;
		width: 100%;
		height: 100%;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		filter: blur(5px);
	}

	#bgvid {
		border: 2px solid red;
		margin-top: -30%;
		margin-left: -15%;
		height: 120%;
		-webkit-filter: blur(20px);
		-moz-filter: blur(20px);
		-o-filter: blur(20px);
		-ms-filter: blur(20px);
		filter: blur(100px);
	}

	.contenu {
		width: 100%;
		height: 100%;
		position: fixed;
		overflow-y: scroll;
		z-index: 3;
		top: 0;
		left: 40px;
		padding-top: 5%;
		color: #fff;
		/*background-color:rgba(29,29,31,0.9);*/
		animation: marquee 0.3s linear;
	}


	@keyframes marquee {
		0% {
			transform: translate(0, 150%);
		}

		100% {
			transform: translate(0, 0);
		}
	}

	/*------------------------------------------------*\
			%-contenair-apps
	\*------------------------------------------------*/
	.contenair-apps {
		height: 35%;
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		overflow-x: scroll;
		padding-bottom: 8%;
		padding-top: 2%;
		text-align: center;
		margin-bottom: 5%;
		/*background-color: #000*/
		;
		border-radius: 40px;
		border-right: 1px solid #fff;
		border-left: 1px solid #fff;
	}

	.titre-contenair-apps {
		margin-left: 5%;
		font-weight: bold;
		margin-bottom: 0;
		width: fit-content;
		background-color: #000;
		border-top-right-radius: 25px;
		border-top-left-radius: 25px;
		padding: 1.5%;
	}

	#contenair-app {
		width: 250px;
		height: 150px;
		text-align: center;
		border-radius: 5%;
		display: inline-block;
		margin-left: 0;
		margin-right: 0;
		margin-top: 4%;
	}

	#contenair-app:hover {
		background-color: rgba(255, 255, 255, 0.8);
	}

	#logo-app {
		height: 100px;
		width: 100px;
		margin-left: auto;
		margin-right: auto;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		border-radius: 20px;
	}

	#nom-app {
		font-weight: bold;
		margin-top: 0.5%;
	}

	/*------------------------------------------------*\
			%-contenair-slide
	\*------------------------------------------------*/
	.contenair-slide {
		width: 93%;
		margin-top: 30px;
		margin-left: auto;
		margin-right: auto;
		overflow: hidden;
		overflow-y: scroll;
		margin-bottom: 5%;
	}

	#cartes {
		height: 440px;
		width: 310px;
		margin-right: 9.5%;
		margin-top: 5%;
		display: inline-block;
		border-radius: 5%;
		text-align: center;
		/*background-color: #834c8a #000*/
		;
		border-right: 0.5px solid #fff;
		vertical-align: top;
		background-color: rgba(255, 255, 255, 0.050);
	}

	#logoCorpsPastoralSvg {
		width: 80%;
		height: 80%;
	}

	#nom-cartes {
		margin: 0;
		margin-top: 5%;
		height: 75px;
		max-height: 75px;
		min-height: 75px;
		overflow-x: scroll;
	}

	/*------------------------------------------------*\
			%-footer
	\*------------------------------------------------*/
	footer {
		display: none;
		width: 100%;
		height: 7%;
		border-top: 2px solid grey;
		position: fixed;
		bottom: 0;
		left: 0;
		font-weight: bold;
		font-size: 25px;
	}

	.logo-user {
		height: 50px;
		width: 50px;
		border-radius: 50px;
		background-color: grey;
		border: 1px solid black;
		display: inline-block;
		margin-left: 8%;
		margin-top: 2.5%;
	}

	.nom-user {
		display: inline-block;
	}

	.bouton-parametres {
		height: 50px;
		width: 50px;
		border-radius: 50px;
		display: inline-block;
		float: right;
		margin-right: 8%;
		margin-top: 2.5%;
		background-color: grey;
	}

	/*------------------------------------------------*\
			%-formulaire
	\*------------------------------------------------*/
	#contenair-formulaire {
		height: 80%;
		width: 100%;
		background-color: rgba(32 32 35 0);
		position: fixed;
		top: 30%;
		left: 0;
		z-index: 40;
		text-align: center;
		cursor: pointer;
		z-index: 5;
		display: none;
		/*-webkit-filter: blur(20px);
		-moz-filter: blur(20px) ;
		-o-filter: blur(20px) ;
		-ms-filter: blur(20px) ;
		filter: blur(100px);*/
		-webkit-animation: animatezoom 0.5s;
		animation: animatezoom 0.5s;
	}

	.blury {
		background-color: red;
		-webkit-animation: blury 1.5s;
		animation: blury 1.5s;
		-webkit-filter: blur(100px);
		-moz-filter: blur(100px);
		-o-filter: blur(100px);
		-ms-filter: blur(100px);
		filter: blur(100px);
	}

	@keyframes blury {
		0% {
			-webkit-filter: blur(0px);
			-moz-filter: blur(0px);
			-o-filter: blur(0px);
			-ms-filter: blur(0px);
			filter: blur(0px);
		}

		50% {
			-webkit-filter: blur(0px);
			-moz-filter: blur(0px);
			-o-filter: blur(0px);
			-ms-filter: blur(0px);
			filter: blur(0px);
		}

		100% {
			-webkit-filter: blur(100px);
			-moz-filter: blur(100px);
			-o-filter: blur(100px);
			-ms-filter: blur(100px);
			filter: blur(100px);
		}
	}

	#cartes-extend {
		width: 80%;
		margin-right: auto;
		margin-left: auto;
		display: inline-block;
		border-radius: 5%;
		/*background-color: #834c8a #000*/
		;
		border-right: 0.5px solid #fff;
		background-color: rgba(255, 255, 255, 0.050);
		text-align: left;
		/* padding-bottom: 2.5%; */
	}

	#departement-extend {
		width: 80%;
		margin-right: auto;
		margin-left: auto;
		text-align: left;
	}

	#departement {
		border-top-left-radius: 50px;
		border-top-right-radius: 50px;
		border-bottom-right-radius: 50px;
		border-bottom-left-radius: 50px;
		background-color: rgba(255, 255, 255, 0.05);
		display: inline-block;
		border-right: 0.5px solid #fff;
		min-width: 100px;
		margin-left: 5px;
		text-align: center;
		vertical-align: center;
		padding: 0;
		padding: 1.5%;
	}

	#pdpCartes-extend {
		height: 350px;
		width: 350px;
		margin-left: auto;
		margin-right: auto;
		background-size: cover;
		background-position: center;
		margin-top: 5%;
		margin-bottom: 5%;
		border-radius: 100%;
	}

	#nom-cartes-extend {
		overflow-x: scroll;
		font-size: 40px;
		margin-left: 5%;
		text-align: center;
	}

	#info-cartes-extend {
		overflow-x: scroll;
		overflow-y: scroll;
		margin-left: 5%;
	}

	#info-cartes {
		overflow-x: scroll;
		overflow-y: scroll;
		margin-left: 5%;
	}

	#rideau {
		width: 100%;
		height: 0%;
		background-color: rgb(32 32 35);
		position: fixed;
		top: 0;
		z-index: 6;
		-webkit-animation: animRideau 1.8s;
		animation: animRideau 1.8s;
		display: none;
	}

	@keyframes animRideau {
		0% {
			height: 0%;
		}

		55% {
			height: 100%;
		}

		75% {
			height: 100%;
		}

		100% {
			height: 0%
		}
	}

	#formulaire {
		height: 80%;
		width: 100%;
		margin-top: 25%;
		border: none;
	}

	@keyframes animatezoom {
		0% {
			top: 100%;
			background-color: rgba(32 32 35 0.5);
		}

		75% {
			background-color: rgba(32 32 35 0.5);
		}

		80% {
			bottom: 0;
		}

		100% {
			background-color: rgb(32 32 35);
		}
	}

	@keyframes closeForm {
		0% {
			right: -120px;
		}

		90% {
			right: -120px;
		}

		100% {
			right: 0;
		}
	}

	.close {
		position: absolute;
		right: 50px;
		margin: 0;
		top: 0;
		width: 120px;
		color: #fff;
		font-size: 80px;
		font-weight: bold;
		/*-webkit-animation: closeForm 1.5s;
    animation: closeForm 1.5s;*/
	}

	.close:hover {
		color: red;
	}
</style>

<!--  onclick="document.getElementById('titre-veille').style.display='none';" -->
<body>
	<div class="background" onclick="document.getElementById('contenu').style.display='block';">
		<video autoplay loop muted id="bgvid">
			<source src="../img/logorotation.mp4" type="video/mp4">
		</video>
	</div>



	<div class="contenu" id="contenu">
		<header></header>
		<style type="text/css">
			.search-section {
				margin-top: 5rem;
				border: 0px solid;
				box-shadow: 2px 4px 20px 0px rgb(182, 182, 182);
				padding: 15px;
				width: 500px;
				height: 250px;
				background-color: rgba(250, 250, 250, 0.050);
			}

			.star {
				display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center;
			}

			.name {
				margin-right: 1rem;
			}

			#searchName {
				width: 85%;
				height: 90%;
				border: none;
				display: inline-block;
				margin-left: 2.5%;
				float: left;
				outline: none;
				background: none;
				font-size: 2em;
				color: white;
			}

			.filter-button {
				display: flex;
				justify-content: space-around;
				margin-top: 2rem;
			}

			a.drop {
				text-decoration: none;
				font-size: 16px;
				font-weight: bolder;
				border: 0px solid;
				border-radius: 15px;
				padding: 15px;
				color: black;
				background-color: rgb(149, 159, 156);
			}

			.submit {
				margin-top: 4rem;
				display: flex;
				justify-content: flex-end;
			}

			button {
				padding: 10px;
				cursor: pointer;
				border: 0px;
				font-size: 16px;
			}

			.recherche {
				margin: 0;
				padding: 0;
				background: none;
				border-top: 0.5px solid white;
				border-left: 0.5px solid white;
				border-radius: 5%;
			}

			#loupe {
				fill: rgba(104, 74, 158, 1);
				height: 100%;
				width: 50px;
				margin: 0;
				padding: 0;
				display: inline-block;
				float: right;
			}

			.reset {
				background: gray;
			}

			/**************************************************** Section de la table ***************************/
			.table-star {
				margin-top: 5rem;
			}

			/**************************************************** Table des STAR *******************************/
			.info {
				width: 750px;
				border-collapse: collapse;
				border: 0px solid black;
				text-align: center;
				vertical-align: middle;
			}

			th {
				border-bottom: 2px solid #6c6a6a;
			}

			.img-profile img {
				width: 35px;
				height: 35px;
				border-radius: 50%;
			}

			td {
				text-align: center;
				line-height: 3px;
			}


			/************************************************ Partie navigation *****************************/
			.navigation {
				display: flex;
				justify-content: center;
				margin-top: 1.5rem;
			}

			.pagination {
				display: flex;
				padding-left: 0;
				list-style: none;
			}

			.page-item:first-child .page-link {
				border-top-left-radius: 0.25rem;
				border-bottom-left-radius: 0.25rem;
			}

			.page-link {
				padding: 0.375rem 0.75rem;
				position: relative;
				display: block;
				color: #0d6efd;
				text-decoration: none;
				background-color: #fff;
				border: 1px solid #dee2e6;
			}

			.page-item:not(:first-child) .page-link {
				margin-left: -1px;
			}

			.page-item.active .page-link {
				z-index: 3;
				color: #fff;
				background-color: #0d6efd;
				border-color: #0d6efd;
			}

			#barre-recherche {
				border-bottom: 0.25px solid white;
				border-right: 0.5px solid white;
				padding: 1.5%;
				border-radius: 5%;
				width: 80%;
				height: 50px;
				margin-left: 40px;
				margin-right: auto;
				font-size: 1em;
				background-color: rgba(250, 250, 250, 0.050);
			}

			#churchSelect {
				height: 35px;
				font-size: 1em;
				background: rgba(104, 74, 158, 0.8);
				margin-left: 5%;
				border: none;
				outline: none;
				border-radius: 5%;
				margin-top: 1.5%;
				color: #fff;
				text-align: center;
			}

			#pdpCartes {
				height: 150px;
				width: 150px;
				border-radius: 100%;
				margin-left: auto;
				margin-right: auto;
				background-size: cover;
				background-position: center;
				margin-top: 5%;
				margin-bottom: 15%;
			}
		</style>
		<form id="formSearchAnnuaire">
			<div id="barre-recherche">
				<input type="search" name="search" id="searchName" autocomplete="off" placeholder="mots-clés : ex informaticien" />
				<button onclick="performSearch()" type="button" class="recherche">
					<svg id="loupe" focusable="false" viewBox="0 0 24 24">
						<path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
					</svg>
				</button>
			</div>
			<select name="eglise" id="churchSelect">
				<option value="">Sélectionnez une église</option>
				<option value="Bruxelles">Bruxelles</option>
				<option value="Liège">Liège</option>
				<option value="Charleroi">Charleroi</option>
				<option value="Mons">Mons</option>
				<option value="Anvers">Anvers</option>
			</select>
		</form>

		<script>
			function myMove() {
				const elem = document.getElementsById('contenair-slide');
				elem.classList.add('blury');
			}
		</script>
		<div class="contenair-slide" id="contenair-slide">
		</div>
		<div id="rideau"></div>
		<div id="contenair-formulaire">


			<div id="cartes-extend">
			<!-- .style.display='none' -->
				<span onclick="document.getElementById('contenair-formulaire').style.display='none';document.getElementById('contenair-slide').style.filter='blur(0px)'" class="close" title="Close Modal">×</span>
				<div id="pdpCartes-extend" style="background-image: url('images/jp.png');"></div>
				<h1 id="nom-cartes-extend"></h1>
				<h1 id="info-cartes-extend"><br></h1>
			</div>
			<div id="departement-extend">
				<h1 id="departement" style="background-color:rgba(0,186,255,0.25)">DSI</h1>
				<h1 id="departement" style="background-color:rgba(169,0,255,0.25)">MJIB</h1>
				<h1 id="departement" style="background-color:rgba(57,255,0,0.25)">MCDE</h1>
				<h1 id="departement" style="background-color:rgba(255,7,0,0.25)">IDK</h1>
			</div>
		</div>
		<footer>
			<div class="logo-user"></div>
			<div class="nom-user">#023020</div>
			<div class="bouton-parametres"></div>
		</footer>
	</div>
	<script>
		// Fonction pour effectuer la recherche et afficher les résultats
		function performSearch() {
			var searchInput = document.getElementById("searchName").value.trim();
			var selectedChurch = document.getElementById("churchSelect").value;
			var apiUrl = "https://52.47.82.252:4012/user/search/";

			if (selectedChurch) {
				apiUrl += "?church=" + encodeURIComponent(selectedChurch);
			}

			if (searchInput) {
				if (selectedChurch) {
					apiUrl += "&key=" + encodeURIComponent(searchInput);
				} else {
					apiUrl += "?key=" + encodeURIComponent(searchInput);
				}
			}

			fetch(apiUrl)
				.then((response) => response.json())
				.then((data) => {
					console.log(data);
					var resultsContainer = document.getElementById("contenair-slide");
					resultsContainer.innerHTML = ""; // Efface le contenu précédent

					if (Array.isArray(data.data)) {
						data.data.forEach((user) => {
							// Crée un élément <a>
							var cardLink = document.createElement("a");
							cardLink.onclick = function() {
								displayForm(user);
							};

							// Crée un élément <div> avec la classe "cartes"
							var cardDiv = document.createElement("div");
							cardDiv.id = "cartes";

							// Crée un élément <h1> pour le nom
							var nameHeader = document.createElement("h1");
							nameHeader.id = "nom-cartes";
							nameHeader.textContent = user.nom + " " + user.prenom;

							// Crée un élément <div> pour la photo de profil
							var pdpDiv = document.createElement("div");
							pdpDiv.id = "pdpCartes";

							// Format du nom de fichier pour la photo de profil
							var imageFileName = user.nom + "-" + user.prenom + ".png";

							// Crée l'URL de l'image en se référant au dossier "../img"
							pdpDiv.style.backgroundImage = "url('../img/" + imageFileName + "')";

							// Crée un élément <h1> pour le métier et l'e-mail
							var infoHeader = document.createElement("h1");
							infoHeader.id = "info-cartes";
							infoHeader.innerHTML = user.metiers.map((metier) => metier.nom).join(" · ") + "<br>" + user.email;

							// Ajoute les éléments créés à la hiérarchie des éléments
							cardDiv.appendChild(nameHeader);
							cardDiv.appendChild(pdpDiv);
							cardDiv.appendChild(infoHeader);
							cardLink.appendChild(cardDiv);
							resultsContainer.appendChild(cardLink);
						});
					} else {
						resultsContainer.innerHTML = "Aucun résultat trouvé.";
					}
				})
				.catch((error) => console.error("Erreur de recherche :", error));
		}

		// Fonction pour afficher le formulaire étendu
		function displayForm(user) {
			var contenairForm = document.getElementById('contenair-formulaire');
			contenairForm.style.display = 'block';
			document.getElementById('contenair-slide').style.filter = 'blur(20px)';

			// Mise à jour des éléments du formulaire étendu
			var pdpExtend = document.getElementById('pdpCartes-extend');
			var imageFileName = user.nom + "-" + user.prenom + ".png";

			// Crée l'URL de l'image en se référant au dossier "../img"
			pdpExtend.style.backgroundImage = "url('../img/" + imageFileName + "')";

			var nomExtend = document.getElementById('nom-cartes-extend');
			nomExtend.textContent = user.nom + " " + user.prenom;

			var infoExtend = document.getElementById('info-cartes-extend');
			infoExtend.innerHTML = user.metiers.map((metier) => metier.nom).join(" · ") + "<br>" + user.email;

			var departementExtend = document.getElementById('departement-extend');
			departementExtend.innerHTML = ""; // Efface le contenu précédent

			user.departements.forEach((departement) => {
				var departementElement = document.createElement("h1");
				departementElement.id = "departement";
				departementElement.textContent = departement.toUpperCase(); // Met en majuscules
				departementExtend.appendChild(departementElement);
			});
		}

		// Appeler performSearch lors du chargement de la page pour afficher tous les éléments par défaut
		//window.onload = performSearch;

		function displayForm(user) {
			var contenairForm = document.getElementById('contenair-formulaire');
			contenairForm.style.display = 'block';
			document.getElementById('contenair-slide').style.filter = 'blur(20px)';

			var nomExtend = document.getElementById('nom-cartes-extend');
			nomExtend.textContent = user.nom + " " + user.prenom;

			var infoExtend = document.getElementById('info-cartes-extend');
			infoExtend.innerHTML = user.metiers.map((metier) => metier.nom).join(" · ") + "<br>" + user.email;

			var departementExtend = document.getElementById('departement-extend');
			departementExtend.innerHTML = ""; // Efface le contenu précédent

			if (Array.isArray(user.departements)) {
				user.departements.forEach((departement) => {
					var departementItem = document.createElement("h1");
					departementItem.id = "departement";
					departementItem.textContent = departement.nom.toUpperCase(); // Convertit en majuscules
					departementExtend.appendChild(departementItem);
				});
			}

			// Chargement de l'image de profil
			var pdpExtend = document.getElementById('pdpCartes-extend');
			var imageFileName = user.nom + "-" + user.prenom + ".png";
			pdpExtend.style.backgroundImage = "url(../img/" + imageFileName + ")";

			var pdp = document.getElementById('pdpCartes');
			pdp.style.backgroundImage = "url(../img/" + imageFileName + ")";
		}



		// Appeler performSearch lors du chargement de la page pour afficher tous les éléments par défaut
		window.onload = performSearch;
	</script>


</body>

</html>