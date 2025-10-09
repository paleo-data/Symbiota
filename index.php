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
				<p>
				Este portal de datos basado en <a href="https://github.com/Symbiota/Symbiota" target="_blank" rel="noopener noreferrer">Symbiota</a> está siendo desarrollado como parte del proyecto <em>Mejoramiento comunitario de los ecosistemas de información para el descubrimiento y uso de datos de especímenes paleontológicos</em>, una colaboración entre el Centro de Asistencia de Symbiota (Universidad de Kansas), el Museo Nacional Smithsonian de Historia Natural y el Museo de Historia Natural de la Universidad de Colorado (Proyectos NSF <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324688" target="_blank" rel="noopener noreferrer">2324688</a>, <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324689" target="_blank" rel="noopener noreferrer">2324689</a>, and <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324690" target="_blank" rel="noopener noreferrer">2324690</a>/<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2525603" target="_blank" rel="noopener noreferrer">2525603</a>). Durante el presente ciclo de financiamiento, los objetivos de este portal son 1) brindar a las colecciones paleontológicas una plataforma de fácil acceso para la movilización y manejo de sus datos, y 2) funcionar como una base para evaluar e implementar una gran parte del desarrollo en ciberinfraestructura identificada como parte del proyecto en cuestión.
				</p>

				<h2>Enfoque del portal</h2>
				<p>
				Este portal facilita el manejo y movilización de datos asociados a especímenes paleontológicos que están disponibles para investigaciones por medio de repositorios permanentes. Este enfoque se limita a organismos extintos y sus trazos (e.g. fósiles). Muestras geológicas, arqueológicas y materiales antropológicos, así como datos de especímenes neontológicos, se encuentran fuera del enfoque y no deben ser catalogados en este portal.
				</p>

				<h2>Contribuyendo con datos</h2>
				<p>
				Este portal es principalmente para colecciones de fósiles que tienen la intención de utilizarlo activamente para manejar sus registros de especímenes. <strong>Colecciones dedicadas a la investigación que estén accesibles públicamente y que no han sido beneficiadas directamente con proyectos del <a href="https://new.nsf.gov/funding/opportunities/advancing-digitization-biodiversity-collections/503559" target="_blank" rel="noopener noreferrer">esfuerzo Nacional de Digitalización en EEUU</a> o que no tengan acceso a ciberinfraestructura segura para mantener sus datos de especímenes son especialmente motivados a participar.</strong> Potenciales proveedores de datos deben revisar los  <a href="<?php echo $CLIENT_ROOT; ?>/includes/usagepolicy.php#providers" target="_blank" rel="noopener noreferrer">lineamientos de la comunidad</a> y <a href="https://paleo-data.github.io/highlighted-resources/symbiota" target="_blank" rel="noopener noreferrer">documentación asociada</a> antes <a href="https://forms.gle/9hrYpRYxTN4pforz9" target="_blank" rel="noopener noreferrer">de aplicar para unirse</a>.
				</p>

				<p>
				Para maximizar la interoperabilidad y utilidad para la investigación con los datos manejados en este portal, <strong>los proveedores de datos son invitados a participar en el <a href="https://paleo-data.github.io/community/about-pdwg" target="_blank" rel="noopener noreferrer">Grupo de Trabajo de Paleo Datos (PDWG)</a></strong>, una comunidad de práctica para colecciones paleontológicas y profesionales de informática que buscan desarrollar y promover buenas prácticas para manejar y digitalizar especímenes fósiles.
				</p>
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
					This <a href="https://github.com/Symbiota/Symbiota" target="_blank" rel="noopener noreferrer">Symbiota-based</a> data portal is being developed as part of the project, <em>Community-driven enhancement of information ecosystems for the discovery and use of paleontological specimen data</em>, a collaboration between the Symbiota Support Hub (University of Kansas), the Smithsonian National Museum of Natural History, and the University of Colorado Museum of Natural History (NSF Awards <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324688" target="_blank" rel="noopener noreferrer">2324688</a>, <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324689" target="_blank" rel="noopener noreferrer">2324689</a>, and <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324690" target="_blank" rel="noopener noreferrer">2324690</a>/<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2525603" target="_blank" rel="noopener noreferrer">2525603</a>). During the current funding cycle, the objectives of this portal are to 1) provide paleontological collections with a low-barrier-to-entry platform for data mobilization and management, and 2) serve as an evaluation and implementation testing ground for many of the cyberinfrastructure developments identified as part of the aforementioned project.
				</p>
			<h2>Portal scope</h2>
				<p>
					This portal supports the management and sharing of data associated with paleontological specimens that are made available for research via permanent repositories. Its scope is limited to extinct organisms and their traces (i.e., fossils). Geological samples, archaeological and anthropological materials, as well as neontological specimen data fall outside this scope and should not be cataloged in this portal.
				</p>
			<h2>Contributing data</h2>
				<p>
					This portal is primarily for fossil collections that intend to actively use it for managing specimen occurrence records. <strong>Publicly accessible research collections that have not directly benefited from the <a href="https://new.nsf.gov/funding/opportunities/advancing-digitization-biodiversity-collections/503559" target="_blank" rel="noopener noreferrer">US National Digitization effort</a> or do not have access to secure cyberinfrastructure to maintain their specimen data are especially encouraged to participate.</strong> Prospective data providers should review the portal's <a href="<?php echo $CLIENT_ROOT; ?>/includes/usagepolicy.php#providers" target="_blank" rel="noopener noreferrer">community guidelines</a> and <a href="https://paleo-data.github.io/highlighted-resources/symbiota" target="_blank" rel="noopener noreferrer">associated documentation</a> before <a href="https://forms.gle/9hrYpRYxTN4pforz9" target="_blank" rel="noopener noreferrer">applying to join</a>.
				</p>
				<p>
					In order to maximize the interoperability and research utility of the data managed in this portal, <strong>data contributors are encouraged to participate in the <a href="https://paleo-data.github.io/community/about-pdwg" target="_blank" rel="noopener noreferrer">Paleo Data Working Group (PDWG)</a></strong>, a community of practice for paleontological collections and informatics professionals who aim to develop and promote best practices for managing and digitizing fossil specimens.
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
