<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon " href="img/logoicc.png" type="image/x-icon" />
	<link rel="stylesheet" href="veille.css">
	<meta charset="utf-8">
	<title>B.A.N</title>
</head>

<body onclick="document.getElementById('titre-veille').style.display='none';">
	<div class="background" onclick="document.getElementById('contenu').style.display='block';">
		<video autoplay loop muted id="bgvid">
			<source src="img/logorotation.mp4" type="video/mp4">
		</video>
	</div>

	<div id="titre-veille" style=" position: fixed;top:45%;width: 100%;text-align: center;z-index: 2;color: #fff; font-weight: bold;font-size: 40px;">
		<h1 style="margin: 0;padding: 0;">B.A.N</h1>
		<p style="margin: 0;padding: 0;">Borne d'Acceuil Numérique</p>
	</div>

	<div class="contenu" id="contenu">
		<header></header>
		<!-- <h1 class="titre-contenair-apps">Formulaires</h1> -->
		<div class="contenair-apps">
			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="annuaire/index.php" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(img/imgFormations/open-book.png);"></div>
					<h1 id="nom-app">Annuaire</h1>
				</a></div>
			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="https://impactcentrechretien.elvanto.eu/form/b8e3f9e4-0a0a-440e-ad95-334e4e9f21cd" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(img/imgFormations/bdr_2.png);"></div>
					<h1 id="nom-app">BDR</h1>
				</a></div>

			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="https://impactcentrechretien.elvanto.eu/form/b8e3f9e4-0a0a-440e-ad95-334e4e9f21cd" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(img/imgFormations/101.png);"></div>
					<h1 id="nom-app">101</h1>
				</a></div>
			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="https://impactcentrechretien.elvanto.eu/form/b8e3f9e4-0a0a-440e-ad95-334e4e9f21cd" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(img/imgFormations/201.png);"></div>
					<h1 id="nom-app">201</h1>
				</a></div>
			<!--<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';"  href="https://impactcentrechretien.elvanto.eu/form/5c2a0e20-7975-41c4-b1e0-e01122e3c82f/" target='dva-docx-iframe'>
				<div id="logo-app" style="background-image: url(img/imgFormations/301.png);"></div>
				<h1 id="nom-app">301</h1>
			</a></div>-->
			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="formulaire/formJuridique.php" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(img/imgFormations/iconeAideJuridique.jpg);"></div>
					<h1 id="nom-app"><!--Aide--> Juridique</h1>
				</a></div>

			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="formulaire/cureAme.php" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(https://bonlarron.org/wp-content/uploads/2014/02/Prier.png);"></div>
					<h1 id="nom-app">Restauration</h1>
				</a></div>
			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="https://impactcentrechretien.elvanto.eu/form/17e553e3-d8f0-4258-abec-ebc9f72539fc" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(img/imgFormations/empreinteDigitale.png);"></div>
					<h1 id="nom-app"><!--Devenir--> S.T.A.R</h1>
				</a></div>
			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="formulaire/numeroDonateur.php" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(img/imgFormations/iconeDonation.jpg);"></div>
					<h1 id="nom-app"><!--n°-->donateur</h1>
				</a></div>
			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="https://impactcentrechretien.elvanto.eu/form/7deee540-c3d1-4ef6-a858-6aafda9dbb87/" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(https://cdn.welcometothejungle.co/uploads/article/image/3639/155930/questions-entretien.png);"></div>
					<h1 id="nom-app">RDV pastoraux</h1>
				</a></div>
			<div id="contenair-app"><a onclick="document.getElementById('contenair-formulaire').style.display='block';" href="https://impactcentrechretien.elvanto.eu/form/e693fd0b-8319-408e-a829-85bee282260d/" target='dva-docx-iframe'>
					<div id="logo-app" style="background-image: url(img/imgFormations/iconeVisiteDomicile.jpg);"></div>
					<h1 id="nom-app">Visite à domicile</h1>
				</a></div>

		</div>
		<h1 class="titre-contenair-apps">L'église</h1>
		<div class="contenair-slide">
			<a href="corpsPastoral.php">
				<div id="slides">
					<h1 id="nom-slide">Corps pastoral</h1>
					<svg id="logoCorpsPastoralSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 178.08 237.06">
						<defs>
							<style>
								.perso,
								.perso-2 {
									fill: #f4f1ed;
								}

								.perso {
									stroke: #231f20;
								}

								.perso,
								.cls-4,
								.cls-5,
								.cls-6 {
									stroke-miterlimit: 10;
								}

								.perso-3 {
									fill: #fff;
								}

								.cls-4 {
									fill: #684a9e;
								}

								.cls-4,
								.cls-5 {
									stroke: #f2e7e6;
								}

								.cls-5,
								.cls-6 {
									fill: #fff;
								}

								.cls-6 {
									stroke: #ebc43d;
								}
							</style>
						</defs>
						<title>logoCorpsPastoral</title>
						<g id="Layer_1" data-name="Layer 1">
							<path class="perso" d="M244.1,425.93" transform="translate(-229.5 -288.95)"></path>
							<rect class="perso-2" x="14.38" y="107.5" width="73" height="113.7" rx="34.53" ry="34.53"></rect>
							<rect class="perso-2" y="103.29" width="0.21" height="0.44" rx="0.03" ry="0.03"></rect>
							<polygon class="perso-2" points="17.39 108.83 16.96 108.83 16.96 108.83 17.39 108.83 17.39 108.83"></polygon>
							<rect class="perso-2" x="14.38" y="99.12" width="73" height="48.76"></rect>
							<ellipse class="perso-2" cx="48.52" cy="59.52" rx="32.21" ry="32.47"></ellipse>
						</g>
						<g id="Layer_3" data-name="Layer 3">
							<path class="perso" d="M336.3,424.54" transform="translate(-229.5 -288.95)"></path>
							<rect class="perso-2" x="106.58" y="106.35" width="71.5" height="112.78" rx="35.75" ry="35.75"></rect>
							<rect class="perso-2" x="92.5" y="102.17" width="0.21" height="0.44" rx="0.03" ry="0.03"></rect>
							<polygon class="perso-2" points="109.53 107.67 109.11 107.67 109.11 107.67 109.53 107.67 109.53 107.67"></polygon>
							<rect class="perso-2" x="106.58" y="98.04" width="71.5" height="48.37"></rect>
							<ellipse class="perso-2" cx="140.03" cy="58.75" rx="31.54" ry="32.21"></ellipse>
						</g>
						<g id="Layer_2" data-name="Layer 2">
							<path class="perso-3" d="M281.85,423.18" transform="translate(-229.5 -288.95)"></path>
							<rect class="perso-3" x="52.1" y="98.23" width="84.38" height="138.83" rx="42.19" ry="42.19"></rect>
							<rect class="perso-3" x="35.48" y="93.09" width="0.25" height="0.54" rx="0.03" ry="0.03"></rect>
							<polygon class="perso-3" points="55.58 99.86 55.08 99.86 55.08 99.86 55.58 99.86 55.58 99.86"></polygon>
							<rect class="perso-3" x="52.1" y="88" width="84.38" height="59.54"></rect>
							<ellipse class="perso-3" cx="91.56" cy="39.65" rx="37.23" ry="39.65"></ellipse>
						</g>
						<g id="Layer_10" data-name="Layer 10">
							<g id="Layer_7" data-name="Layer 7">
								<polygon class="cls-4" points="33.52 120.26 33.05 125.54 82.38 138.91 33.52 120.26"></polygon>
							</g>
							<g id="Layer_6" data-name="Layer 6">
								<polygon class="cls-4" points="31.63 123.23 31.4 127.82 78.65 138.22 31.63 123.23"></polygon>
							</g>
							<g id="Layer_8" data-name="Layer 8">
								<polygon class="cls-4" points="154.03 124.36 154.61 127.82 99.37 141.1 154.03 124.36"></polygon>
							</g>
							<g id="Layer_5" data-name="Layer 5">
								<polygon class="cls-4" points="27.75 133.8 87.5 140.3 92 140.3 154.25 132.8 132.75 195.55 94.25 202.3 89.75 202.55 56.5 197.05 27.75 133.8"></polygon>
								<polygon class="cls-4" points="30 128.38 30.24 132.96 84.25 138.8 30 128.38"></polygon>
								<polygon class="cls-4" points="153.81 127.69 153.98 131.5 99.33 138.92 153.81 127.69"></polygon>
							</g>
							<rect class="cls-4" x="317.75" y="429.87" width="5.62" height="60.5" transform="translate(-247.13 -276.15) rotate(-2.23)"></rect>
							<rect class="cls-5" x="349" y="433.5" width="4.25" height="46.37" transform="translate(-257.15 -266.3) rotate(-3.56)"></rect>
							<rect class="cls-5" x="336.04" y="446.04" width="29.37" height="3.75" transform="translate(-282.38 -241.95) rotate(-7.13)"></rect>
							<rect class="cls-6" x="349.62" y="445.61" width="2.27" height="8.08" transform="translate(-256.48 -266.54) rotate(-3.52)"></rect>
						</g>
					</svg>
				</div>
			</a>
			<a href="onEstEnsemble.php">
				<div id="slides">
					<h1 id="nom-slide">On est ensemble</h1>
					<svg id="logoCorpsPastoralSvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.6 379.92">
						<defs>
							<style>
								.coeur-1 {
									fill: #823676;
									stroke: #010299;
								}

								.coeur-1,
								.coeur-2,
								.coeur-3,
								.coeur-4,
								.coeur-5 {
									stroke-miterlimit: 10;
								}

								.coeur-2 {
									fill: #1684c7;
									stroke: #1684c7;
								}

								.coeur-3 {
									fill: #ed1d24;
									stroke: #ed1d24;
								}

								.coeur-4 {
									fill: #34ae7f;
									stroke: #34ae7f;
								}

								.coeur-5 {
									fill: #FFEB3B;
									stroke: #f5b71a;
								}

								.coeur-6 {
									font-size: 63px;
									fill: #ab2175;
								}

								.coeur-6,
								.coeur-7 {
									font-family: BrushScriptMT, Brush Script MT;
									font-style: italic;
								}

								.coeur-7 {
									font-size: 60px;
									fill: #6d1850;
								}
							</style>
						</defs>
						<title>logoOnEstEnsemble</title>
						<path class="coeur-1" d="M300.44,514.5l-3,29-47.53,27L258,531.83s5.9-11.5-7.93-19.33-27.81-14.33-27.81-14.33l-14.66-9.34s-7.92-10.33-10.11-13.66-30.85-28.84-30.85-28.84l-4.21-4.66s-2.22-2.86.31-9,3.16-15.13,3.16-15.13l2.51-9.06s1.85-11.75,2.11-13.62.25-19.38.25-19.38,3.41-5.75,12.26,7.5,5.06,14.63,5.06,14.63,3,13,4.68,16.25,3.41,8,2.27,16.12,8,12.13,8,12.13l-.26,2.37s4.3-5,12.64,1.13,22.95,16.62,22.95,16.62a30.45,30.45,0,0,0,8.22,5.5,58.83,58.83,0,0,1,10.36,6.56s2.53,2.13,14.79,1.57S303.92,495,303.92,495s3.22,8.06.57,10.25S300.44,514.5,300.44,514.5Z" transform="translate(-70.45 -191.56)"></path>
						<path class="coeur-1" d="M321.57,512.5l3,29,47.35,27-8.06-38.67s-5.87-11.5,7.9-19.33,27.7-14.33,27.7-14.33l14.61-9.34s7.9-10.33,10.08-13.66,30.73-28.84,30.73-28.84l4.2-4.66s2.2-2.86-.32-9-3.15-15.13-3.15-15.13l-2.49-9.06s-1.85-11.75-2.1-13.62-.25-19.38-.25-19.38-3.41-5.75-12.22,7.5-5,14.63-5,14.63-3,13-4.66,16.25-3.4,8-2.27,16.12-7.93,12.13-7.93,12.13l.25,2.37s-4.28-5-12.59,1.13-22.86,16.62-22.86,16.62a30.38,30.38,0,0,1-8.19,5.5A58.47,58.47,0,0,0,365,472.31s-2.52,2.13-14.73,1.57S318.11,493,318.11,493s-3.21,8.06-.57,10.25S321.57,512.5,321.57,512.5Z" transform="translate(-70.45 -191.56)"></path>
						<path class="coeur-2" d="M165.17,459.92l-.21.53-8.71,22.13s-2.5,3.34-8.17-.33-40.41-22.17-40.41-22.17L106,458.83s-1.75-1.5,1.67-3.66,17.5-17.34,17.5-17.34,6.75-7.83,3.5-16.75-20.75-47.91-20.75-47.91-6-15.17-1.09-21.09,2.84-10.33,2.84-10.33l7.83-40.83s-.33-5.25,6.17-2.09,16.91,1.25,16.91,1.25,10.42-3.91,15.92-9.16a125.85,125.85,0,0,0,11.08-12.59l4.67-6.08,3.92-4.08s6.08-6.67,4.83,8-14,21.41-14,21.41,3.42,8.09.67,16.59-9,25.75-9,25.75-1.59,2.25-1.25,13.08.5,14.25.5,14.25a8.64,8.64,0,0,0,1.58,4.5c1.5,1.92,3.5,3,3.58,9.17s-.83,21.58-.83,21.58-.75,4.42-1.67,9.08S157,429.25,157,429.25s-1.25,4-2.17,6.67-3,5.91,1.42,11.08a113.7,113.7,0,0,0,9.25,9.5s.67.17.17,2.5S165.17,459.92,165.17,459.92Z" transform="translate(-70.45 -191.56)"></path>
						<path class="coeur-3" d="M456.07,457.92l.23.53,9.38,22.13s2.69,3.34,8.8-.33S518,458.08,518,458.08l1.79-1.25s1.89-1.5-1.79-3.66-18.86-17.34-18.86-17.34-7.27-7.83-3.77-16.75,22.36-47.91,22.36-47.91,6.46-15.17,1.16-21.09-3-10.33-3-10.33l-8.44-40.83s.36-5.25-6.64-2.09-18.22,1.25-18.22,1.25-11.22-3.91-17.15-9.16a130.07,130.07,0,0,1-11.94-12.59l-5-6.08-4.21-4.08s-6.56-6.67-5.21,8,15.08,21.41,15.08,21.41-3.68,8.09-.72,16.59,9.7,25.75,9.7,25.75,1.7,2.25,1.34,13.08-.54,14.25-.54,14.25a8.16,8.16,0,0,1-1.7,4.5c-1.62,1.92-3.77,3-3.86,9.17s.9,21.58.9,21.58.8,4.42,1.79,9.08,3.86,17.67,3.86,17.67,1.35,4,2.34,6.67,3.23,5.91-1.53,11.08a118.44,118.44,0,0,1-10,9.5s-.72.17-.18,2.5S456.07,457.92,456.07,457.92Z" transform="translate(-70.45 -191.56)"></path>
						<path class="coeur-4" d="M84.5,243.67l-13.33,55.5L109,284s5.83-2.83,8.17,1.5,12.16,6.67,20.16,4,27.67-8.67,28.84-21.67,38.83-24,38.83-24l25.83-3s4.5-2.33,2.67-2.83,20.08,1.83,26.58,10.92,9.67,4.66,9.67,4.66,18.44,16.86,21.63,18.23,11.87,2.5,10.18-.75.32-7.37.32-7.37.81-2.25,1.5-2.06,2.31-2.13-.19-4-11-14.82-11-14.82-16.69-26.12-15.5-34.12-30.19-7.63-30.19-7.63-33.19-4.56-36.94-6.62-14.37-2.38-14.37-2.38-8.06,3.07-11.5,6.5-34.38,19.88-34.38,19.88S103.5,244.83,84.5,243.67Z" transform="translate(-70.45 -191.56)"></path>
						<path class="coeur-5" d="M536.65,245l13.68,55.5-38.82-15.17s-6-2.83-8.38,1.5-12.48,6.67-20.69,4-28.39-8.66-29.59-21.66-39.85-24-39.85-24l-26.51-3s-4.62-2.34-2.74-2.84-20.6,1.84-27.27,10.92-9.92,4.67-9.92,4.67-18.92,16.85-22.19,18.23-12.19,2.5-10.46-.75-.32-7.38-.32-7.38-.83-2.25-1.54-2.06-2.37-2.13.19-4,11.29-14.81,11.29-14.81S340.66,218,339.44,210s31-7.62,31-7.62,34.06-4.57,37.91-6.63,14.75-2.37,14.75-2.37,8.27,3.06,11.8,6.5,35.27,19.87,35.27,19.87S517.15,246.17,536.65,245Z" transform="translate(-70.45 -191.56)"></path>
					</svg>
				</div>
			</a>
			<a href="gisMap.php">
				<div id="slides">
					<h1 id="nom-slide">Tous les GI's</h1>
					<svg id="logoCorpsPastoralSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 363.44 266.68">
						<defs>
							<style>
								.cls-1,
								.cls-3 {
									fill: #fff;
								}

								.cls-2 {
									fill: #412d85;
								}

								.cls-3 {
									font-size: 19px;
									font-family: Verdana-Bold, Verdana;
									font-weight: 700;
									letter-spacing: -0.03em;
								}

								.cls-4 {
									letter-spacing: -0.08em;
								}
							</style>
						</defs>
						<g id="Calque_2" data-name="Calque 2">
							<polygon class="cls-1" points="0 266.68 26.14 239.62 63.52 232.05 93.78 266.68 0 266.68" />
							<polygon class="cls-1" points="116.94 266.68 86.67 227.47 149.27 209.81 267.59 266.68 116.94 266.68" />
							<polygon class="cls-1" points="307.03 266.68 363.44 266.68 307.03 206.83 177.13 203.62 307.03 266.68" />
							<polygon class="cls-1" points="43.8 221.04 113.05 151.34 186.42 151.34 186.42 186.19 43.8 221.04" />
							<polygon class="cls-1" points="208.43 182.52 279.98 182.52 252 154.09 208.43 151.34 208.43 182.52" />
						</g>
						<g id="Calque_6" data-name="Calque 6">
							<path class="cls-1" d="M234.2,321.88c0-1.57,45.55,73.13,45.55,73.13l48.93-78.88Z" transform="translate(-84.47 -249.41)" />
						</g>
						<g id="Calque_5" data-name="Calque 5">
							<ellipse class="cls-1" cx="195.25" cy="49.87" rx="51.02" ry="49.87" />
						</g>
						<g id="Calque_7" data-name="Calque 7">
							<circle class="cls-2" cx="194.73" cy="49.87" r="35.6" /><text class="cls-3" transform="translate(175.06 57.2)">GI<tspan class="cls-4" x="24.64" y="0">’S</tspan></text>
						</g>
					</svg>
				</div>
			</a>
		</div>
		<div id="contenair-formulaire" onclick="document.getElementById('contenair-formulaire').style.display = 'none';">
			<span onclick="document.getElementById('contenair-formulaire').style.display='none'" class="close" title="Close Modal">×</span>
			<iframe id="formulaire" name="dva-docx-iframe"></iframe>
		</div>
		<footer>
			<div class="logo-user"></div>
			<div class="nom-user">#023020</div>
			<div class="bouton-parametres"></div>
		</footer>
	</div>

	<script type="text/javascript">
		(function() {

			const idleDurationSecs = 240; // X number of seconds
			const redirectUrl = 'veille2.php'; // Redirect idle users to this URL
			let idleTimeout; // variable to hold the timeout, do not modify

			const resetIdleTimeout = function() {

				// Clears the existing timeout
				if (idleTimeout) clearTimeout(idleTimeout);

				idleTimeout = setTimeout(() => location.href = redirectUrl, idleDurationSecs * 1000);
			};

			// Init on page load
			resetIdleTimeout();

			// Reset the idle timeout on any of the events listed below
			['click', 'touchstart', 'mousemove'].forEach(evt =>
				document.addEventListener(evt, resetIdleTimeout, false)
			);

		})();
	</script>
</body>

</html>