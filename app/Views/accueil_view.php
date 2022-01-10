<div id="fb-root"></div>
<div id="banniere"></div>

<main>

	<div id="container">
		<div class="introduction">
			<p class="officiel">Site officiel de l'association DiscTroy(es), club d'Ultimate Frisbee à Troyes.</p>
			<h1>DISCTROYES</h1>
			<p class="sous-titre"><span class="ultimate">Ultimate</span> Frisbee</p>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate nulla massa urna dignissim sed tristique volutpat. Pretium dui nascetur blandit facilisis sit. Purus fringilla donec at ultrices aliquam. Donec mauris vitae purus, elementum. </p>
			<div class="flex">
				<div class="call-to-action">
					<a href="">Découvrez nous !</a>
				</div>
				<div class="post">
					<a class="dernier-post" href="#facebook">Voir nos derniers posts Facebook</a>
				</div>

			</div>
		</div>

		<div class="image-squelette">
			<img src="<?php echo base_url() ?>/assets/svg/squelette.svg" alt="image squelette">
		</div>
<<<<<<< HEAD
	</div>

	<div id="presentation">
		<h2 class="presentation">Présentation de l'Ultimate</h2>
		<p class="texte">L'ultimate est un <b>sport collectif</b> utilisant un disque opposant <b>deux équipes de sept joueurs</b>. L'objectif est de marquer des points en progressant sur le terrain par des passes successives vers la zone d'en-but adverse et d'y rattraper le disque.</p>
		<p class="texte">Les différents terrains :</p>
		<div id="terrain">
			<div>
				<div class="image-terrain">
					<p class="nombre">7 vs 7</p>
				</div>
				<p class="terrain">Terrain en herbe à l'extérieur</p>
			</div>
			<div>
				<div class="image-terrain2">
					<p class="nombre">5 vs 5</p>
				</div>
				<p class="terrain">Terrain de Handball</p>
			</div>
			<div>
				<div class="image-terrain3">
					<p class="nombre">5 vs 5</p>
				</div>
				<p class="terrain">Terrain sur plage</p>
			</div>
		</div>
	</div>

	<div id="valeurs">
		<h2 class="presentation">Les valeurs de l'Ultimate</h2>
		<div id="bloc">
			<div>
				<div>
					<div class="image-et-titre">
						<img src="<?php echo base_url() ?>/assets/svg/famille.svg" alt="pictogramme">
						<p class="titre-valeur">Famille</p>
					</div>
					<div>
						<p class="description-valeur">L’Ultimate Frisbee rassemble peu importe le niveau</p>
					</div>
				</div>
				<div>
					<div class="image-et-titre">
						<img src="<?php echo base_url() ?>/assets/svg/strategie.svg" alt="pictogramme">
						<p class="titre-valeur">Stratégie</p>
					</div>
					<div>
						<p class="description-valeur">Analyser le jeu adverse en temps réel</p>
					</div>
				</div>
				<div>
					<div class="image-et-titre">
						<img src="<?php echo base_url() ?>/assets/svg/polyvalence.svg" alt="pictogramme">
						<p class="titre-valeur">Polyvalence</p>
					</div>
					<div>
						<p class="description-valeur">Les joueurs attaquent et défendent tous ensemble</p>
					</div>
				</div>
			</div>
			<div class="mms">
				<img src="<?php echo base_url() ?>/assets/svg/mms.png" alt="Joueur DiscTroy(es)">
			</div>
			<div>
				<div>
					<div class="image-et-titre">
						<img src="<?php echo base_url() ?>/assets/svg/autoarbitrage.svg" alt="pictogramme">
						<p class="titre-valeur">Auto-arbitrage</p>
					</div>
					<div>
						<p class="description-valeur4">Chaque joueur a la responsabilité de veiller au respect des règles</p>
					</div>
				</div>
				<div>
					<div class="image-et-titre">
						<img src="<?php echo base_url() ?>/assets/svg/mixite.svg" alt="pictogramme">
						<p class="titre-valeur">Mixité</p>
					</div>
					<div>
						<p class="description-valeur5">L’ultimate est un sport qui mélange les femmes et les hommes</p>
					</div>
				</div>
				<div>
					<div class="image-et-titre">
						<img src="<?php echo base_url() ?>/assets/svg/fairplay.svg" alt="pictogramme">
						<p class="titre-valeur">Fair-play</p>
					</div>
					<div>
						<p class="description-valeur">La responsabilité des joueurs assure la bonne entente</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="link-galerie">
		<a href="">Voir notre galerie</a>
	</div>

</main>

<div id="banniere-stats">
	<h2 class="club">Notre club</h2>
	<div id="statistiques">
		<div class="flex">
			<div class="image-stat">
				<img src="<?php echo base_url() ?>/assets/svg/membre.svg" alt="">
			</div>
			<div class="stat-description">
				<p class="chiffre"><?= $accueilInfos->accueil_membres ?></p>
				<p class="stat-info">membres</p>
			</div>
		</div>
		<div class="flex">
			<div class="image-stat">
				<img src="<?php echo base_url() ?>/assets/svg/entrainement.svg" alt="">
			</div>
			<div class="stat-description">
				<p class="chiffre"><?= $accueilInfos->accueil_entrainements ?></p>
				<p class="stat-info2">entrainements par semaine</p>
			</div>
		</div>
		<div class="flex">
			<div class="image-stat">
				<img src="<?php echo base_url() ?>/assets/svg/niveau.svg" alt="">
			</div>
			<div class="stat-description">
				<p class="chiffre"><?= $accueilInfos->accueil_niveau ?></p>
				<p class="stat-info">niveau du club</p>
			</div>
		</div>
		<div class="flex">
			<div class="image-stat">
				<img src="<?php echo base_url() ?>/assets/svg/annee.svg" alt="">
			</div>
			<div class="stat-description">
				<p class="chiffre"><?= $accueilInfos->accueil_creation ?></p>
				<p class="stat-info">année de création</p>
			</div>
		</div>
	</div>
	<div id="link-rejoindre">
		<a href="">Rejoignez nous !</a>
	</div>
</div>

<div id="facebook">
	<h2>Notre facebook</h2>
	<div class="fb-page" data-href="https://www.facebook.com/disctroyes" data-tabs="timeline,events,messages" data-width="500" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-lazy="true">
	</div>
</div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v12.0" nonce="5hwBZEzq"></script>
=======
	</header>


	<main>
		<h1>DISCTROYES</h1>
	</main>

	<footer>
		<div class="gauche">
			<div class="first">
				<img class="logo" src="<?php echo base_url() ?>/assets/svg/logo-white.svg" alt="Logo DiscTroy(es) noir">
				<p class="disctroyes">DiscTroy(es)</p>
			</div>
			<div class="two">
				<a href=""><img src="<?php echo base_url() ?>/assets/svg/facebook-white.svg" alt="Logo Facebook blanc"></a>
				<a href=""><img src="<?php echo base_url() ?>/assets/svg/mail-white.svg" alt="Logo Mail blanc"></a>
				<a href=""><img src="<?php echo base_url() ?>/assets/svg/instagram-white.svg" alt="Logo Instagram blanc"></a>
			</div>
			<div class="three">
				<p>Copyright © 2022 - DiscTroy(es)</p>
			</div>
			
		</div>

		<div class="centre">
			<a href="">Liens utiles</a>
			<a href="">Contact</a>
			<a href="">Hébergeur</a>
			<a href="">Mentions légales</a>
		</div>

		<div class="droite">
			<p class="trouver">Nous trouver</p>
			<div class="bloc-google-maps">
				<div class="bloc-adresse">
					<p>Maison des associations</p>
					<p>63 Av. Pasteur,</p>
					<p>10000 - Troyes</p>
				</div>
				<div class="google-maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2654.0316429626464!2d4.0605830154275395!3d48.30224284765719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee985b554fb209%3A0xafbec90fc22a35d9!2s63%20Av.%20Pasteur%2C%2010000%20Troyes!5e0!3m2!1sfr!2sfr!4v1641554218657!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</footer>

	<!--SCRIPTS-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="<?php echo base_url() ?>/assets/js/app.js"></script>

</body>

</html>
>>>>>>> fa167fac8b0f0abac85fd1a6e85b7cd518d5e782
