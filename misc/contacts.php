<?php
include_once('../config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<html>
	<head>
		<title><?php echo (isset($LANG['CONTACTS'])?$LANG['CONTACTS']:'Contacts'); ?></title>
		<?php

		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php"><?php echo (isset($LANG['HOME'])?$LANG['HOME']:'Home'); ?></a> &gt;&gt;
			<b><?php echo (isset($LANG['CONTACTS'])?$LANG['CONTACTS']:'Contacts'); ?></b>
		</div>
		<!-- This is inner text! -->
		<div id="innertext" style="margin:stretch">
			<h1><?php echo (isset($LANG['CONTACTS'])?$LANG['CONTACTS']:'Contacts'); ?>:</h1>

			<p>
			A Steering Committee for the Paleo Data Portal was established in 2023 to provide governance with respect to portal development and community growth. All committee members are also active participants in the <a href="https://paleo-data.github.io/about">Paleo Data Working Group (PDWG)</a>. 
			</p>
			<h2>Steering Committee Members</h2>
			<ul>
				<li><a href="https://orcid.org/0000-0001-6514-963X">Talia Karim</a>, University of Colorado Museum of Natural History</li>
				<li><a href="https://orcid.org/0000-0003-3192-0080">Erica Krimmel</a>, Independent Informatics Consultant</li>
				<li><a href="https://orcid.org/0000-0001-7909-4166">Holly Little</a>, Smithsonian National Museum of Natural History</li>
				<li><a href="https://orcid.org/0000-0002-8679-4774">Amanda Millhouse</a>, Smithsonian National Museum of Natural History</li>
				<li><a href="https://orcid.org/0000-0001-6770-0181">Jacob Van Veldhuizen</a>, University of Colorado Museum of Natural History</li>
				<li><a href="https://orcid.org/0000-0002-2162-6593">Lindsay Walker</a>, Symbiota Support Hub, Arizona State University</li>
			</ul>
			<p>
				General inquiries should be directed to the Steering Committee at <a href="mailto:paleoinformatics@gmail.com">paleoinformatics@gmail.com</a>. Technical questions can be addressed by the Symbiota Support Hub's <a href="https://symbiota.org/contact-the-support-hub/">Help Desk</a>.
			</p>

		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>
