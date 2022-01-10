<div id="fb-root"></div>
<div id="banniere"></div>

<main>

	<div id="container">
		<div class="introduction">
			<p class="officiel">Site officiel de l'association DiscTroy(es), club d'Ultimate Frisbee à Troyes.</p>
			<h1>DISCTROYES</h1>
			<p class="sous-titre"><span class="ultimate">Ultimate</span> Frisbee</p>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate nulla massa urna dignissim sed tristique volutpat. Pretium dui nascetur blandit facilisis sit. Purus fringilla donec at ultrices aliquam. Donec mauris vitae purus, elementum. </p>
			<div class="flexbase">
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