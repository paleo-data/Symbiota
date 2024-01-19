<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<div id="innertext">
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
				<h1 class="headline">Bienvenidos</h1>
				<p>Este portal de datos se ha establecido para promover la colaboración... Reemplazar con texto introductorio en inglés</p>
			</div>
			<?php
		}
		elseif($LANG_TAG == 'fr'){
			?>
			<div>
				<h1 class="headline">Bienvenue</h1>
				<p>Ce portail de données a été créé pour promouvoir la collaboration... Remplacer par le texte d'introduction en anglais</p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>
			<div>	
			<h1>Welcome</h1>
				<p>
					Welcome to the Paleo Data Portal! This portal is under construction as part of the project, <em>Community-driven enhancement of information ecosystems for the discovery and use of paleontological specimen data</em> (NSF Awards <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324688" target="_blank" rel="noopener noreferrer">2324688</a>, <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324689" target="_blank" rel="noopener noreferrer">2324689</a>, and <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324690" target="_blank" rel="noopener noreferrer">2324690</a>). The Symbiota Support Hub (Arizona State University), the Smithsonian National Museum of Natural History, and the University of Colorado Museum of Natural History will be working to establish this new Symbiota portal community in 2023-2025.
						<br><br>
					During the current funding cycle, the objectives of this portal will be to 1) provide paleontological collections with a low-barrier-to-entry platform for data mobilization and management, and 2) serve as an evaluation and implementation testing ground for many of the cyberinfrastructure developments identified as part of the aforementioned project. Once fully installed, this data portal will be available as a <strong>data aggregator</strong> and <strong>collections management system</strong> for fossil specimen data.
				</p>
			<h1>How to Contribute Data</h1>
			<p>
				This <a href="https://symbiota.org/" target="_blank" rel="noopener noreferrer">Symbiota-based</a> portal is primarily for fossil collections that intend to actively manage specimen occurrence records within this data portal. <strong>Publicly accessible research collections that have not directly benefited from the <a href="https://new.nsf.gov/funding/opportunities/advancing-digitization-biodiversity-collections/503559" target="_blank" rel="noopener noreferrer">US National Digitization effort</a>, and/or do not have access to secure cyberinfrastructure to maintain their specimen data are especially encouraged to participate.</strong> Because Symbiota is best leveraged as a collaborative digitization tool benefiting from increased community participation, collections that simply wish to share a copy of their data will also be welcome to contribute. Prospective data providers are strongly encouraged to review the portal's official <a href="<?php echo $CLIENT_ROOT; ?>/includes/usagepolicy.php" target="_blank" rel="noopener noreferrer">Community Guidelines</a> and may apply by completing <a href="https://bit.ly/3Oa0ItD" target="_blank" rel="noopener noreferrer">this form</a>.
				</p>
			<h1>Community Support</h1>
				<p>
					In order to maximize the interoperability and research utility of the data managed in this portal, <strong>data contributors will be encouraged to participate in the <a href="https://paleo-data.github.io/#how-to-get-involved" target="_blank" rel="noopener noreferrer">Paleo Data Working Group (PDWG)</a></strong>, a community of practice for paleontological collections and informatics professionals who aim to develop and promote best practices for managing and digitizing fossil specimens. Further guidance for portal data contributors will be provided by a forthcoming <strong>Community Knowledge Hub</strong> intended to document related best practices based on the requirements-gathering activities of PDWG and the aforementioned NSF Awards (#2324688–90).
				</p>
			<h1>Technical Support</h1>
				<p>Technical assistance and <a href="https://symbiota.org/help-resources/" target="_blank" rel="noopener noreferrer">Symbiota-related resources</a> for this portal community are provided by the <a href="https://symbiota.org/contact-the-support-hub/" target="_blank" rel="noopener noreferrer">Symbiota Support Hub</a>.
				</p>
				</div>
			<?php
		}
		?>
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
