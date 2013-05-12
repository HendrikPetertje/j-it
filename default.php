<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
		<?php Loader::element('header_required'); ?>
        <link rel="stylesheet" href="<?=$this->getThemePath()?>/css/style.css" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
        <link rel="author" href="http://www.kaboomreclame.nl">
        
    </head>
    <body>
    <div class="whitewrapper">
		<div class="container header">
			<div class="block logo">
				<img src="<?=$this->getThemePath()?>/images/j-it-logo.png" alt="J-IT">
			</div>
			<div class="block headernav">
				<div class="headernav-left"></div>
				<div class="headernav-center">
					<?php $a = new GlobalArea('headernav'); $a->display(); ?>
				</div>
				<div class="headernav-right"></div>

				<div class="cleardiv"></div>
				
			</div>
			
			<div class="block snelcontact">
				<div class="snelcontact-body">
					<form action="<?=$this->getThemePath()?>/includes/contact.php" method="post">
					    Uw Naam
					    <input type="text" name="cf_name" />
					    Uw telefoonnummer
					    <input type="text" name="cf_phone" />
					    Onderwerp voor contact
					    <input type="text" name="cf_message" />
					    <input type="submit" value="STUREN" class="contactbutton" />
					    <input type="reset" value="WISSEN" class="contactbutton" />
					</form>
				</div>

				<div class="snelcontact-button" title="Stel uw snelle vraag">
					SNELCONTACT
				</div>
			</div>

		</div>

		<div class="container horizonline"></div>

		<div class="container maincontent-pages">
			<h1><?php echo $c->getCollectionName() ?></h1>
			<?php $a = new Area('Main-content'); $a->display($c); ?>
		</div>

		<div class="container horizonline"></div>

		<div class="container subcontent">
			
			<div class="block nieuwsblock">
				<div class="nieuwsblock-inner">
					<h2><?php $a = new GlobalArea('Nieuwblok-onderwerp'); $a->display($c); ?></h2>
					<div class="nieuwsblockdate"><?php $a = new GlobalArea('Nieuwsblok-datum'); $a->display($c); ?></div>
					<?php $a = new GlobalArea('Nieuwsblok-content'); $a->display($c); ?>
				</div>
				<div class="nieuwsblok-more meerbutton">
					<a href="/nieuws" class="button">LEES VERDER</a>
				</div>
			</div>

			<div class="block laatsteopdrachtblock">
				<div class="laatsteopdrachtblock-inner">
					<?php $a = new GlobalArea('laatsteopdracht-foto'); $a->display($c); ?>
				</div>

				<div class="laatsteopdrachtblock-more meerbutton">
					<a href="/opdrachten" class="button">LEES VERDER</a>
				</div>

			</div>
			<div class="laatsteopdrachtenblock-text">
				<h2>Opdrachten</h2>
				<?php $a = new GlobalArea('laatsteopdracht-naam'); $a->display($c); ?>
			</div>

			<div class="block klantenwoordblock">
				<div class="klantenwoordblock-inner">
					<h2>Klant aan het woord</h2>
					<?php $a = new GlobalArea('klantenwoord'); $a->display($c); ?>
				</div>
				<div class="klantenwoord-more meerbutton">
					<a href="/klanten" class="button" >LEES VERDER</a>
				</div>
			</div>

			<div class="cleardiv"></div>

		</div>

		<div class="full-container footer">
			<div class="footer-content container">
				
				<div class="block footer-sitemap">
					<h3>Sitemap</h3>
					<?php $a = new GlobalArea('footer-navigatie'); $a->display($c); ?>
				</div>

				<div class="block footer-contact">
					<h3>Contact</h3>
					Willem Loréstraat 138<br />
					8921 CN Leeuwarden<br />
					058-8436042<br />
					KVK: 57841624 <br />
					BTW: NL204573658B01<br />
					<br/>
				</div>

				<div class="block footer-meta">
					<h3>J-IT</h3>
					&copy;J-IT 2013<br />
					Powered by: <br />
					<a href="http://www.kaboomreclame.nl" target="_blank" title="Bezoek Kaboom Reclame" style="padding-right:5px"><img src="<?=$this->getThemePath()?>/images/kaboom-mini.png" alt="Kaboom Reclame"></a>
					<img src="<?=$this->getThemePath()?>/images/j-it-minilogo.png" alt="J-IT">
				</div>

				<div class="cleardiv"></div>
			</div>
				
		</div>
	
	</div> <!-- Whitewrapper -->
	<?php Loader::element('footer_required'); ?>
	<script src="<?=$this->getThemePath()?>/javascript/script.js"></script>
    </body>
</html>
