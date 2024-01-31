<?php
include_once('../config/symbini.php');
include_once ($SERVER_ROOT.'/classes/UtilityFunctions.php');
header("Content-Type: text/html; charset=" . $CHARSET);
$serverHost = UtilityFunctions::getDomain();
?>
<html>

<head>
	<title><?php echo $DEFAULT_TITLE; ?>Data Usage Guidelines</title>
	<?php

	include_once($SERVER_ROOT . '/includes/head.php');
	?>
</head>

<body>
	<?php
	$displayLeftMenu = true;
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath">
		<a href="<?php echo $CLIENT_ROOT; ?>/index.php">Home</a> &gt;&gt;
		<b><?php echo (isset($LANG['H_DATA_USAGE'])?$LANG['H_DATA_USAGE']:'Community Guidelines'); ?></b>
	</div>
	<!-- This is inner text! -->
	<div id="innertext">
		<h1>Community Guidelines</h1>
		<p>
		By using this data portal, you are agreeing to abide by the guidelines outlined on this page. Please contact the portal's <a href="<?php echo $CLIENT_ROOT; ?>/misc/contacts.php">Steering Committee</a> if you have questions or concerns about any of the guidance provided herein.
		</p>
		<p><strong>Contents</strong>
		<br><a rel="noopener" target="blank" href="#providers">For Data Providers</a>
		| <a rel="noopener" target="blank" href="#users">For Data Users</a>
		| <a rel="noopener" target="blank" href="#citations">Data Citations & Attribution</a>
		| <a rel="noopener" target="blank" href="#collecting">Statement on Responsible Fossil Collecting</a>
		</p>
		
		<h2 id="providers">For Data Providers</h2>
		<p>By providing data to this portal, you are agreeing to:</p>
		<ul>
			<li>Only share data to which your institution maintains legal rights.</li>
			<li>Share data under one of the following <a href="https://creativecommons.org/share-your-work/cclicenses/" target="_blank" rel="noopener noreferrer">Creative Commons licenses</a>: CC0, CC-BY, or CC-BY-NC.</li>
			<li>Only share data that represent vouchered specimen occurrences curated in a publicly accessible permanent repository, e.g. at a university collection or non-profit museum. Collections data from academic laboratories and similar entities may be considered if accompanied by 1) a formal repository agreement from a permanent collection and 2) written permission to contribute to this data portal from the repository.</li>
		</ul>
		<h3>Additional Considerations</h3>
		<ul>
			<li>If all or parts of your collection require locality redaction, please carefully review the documentation on <a href="https://biokic.github.io/symbiota-docs/coll_manager/data_publishing/redaction/" target="_blank" rel="noopener noreferrer">data redaction in Symbiota portals</a>.</li>
			<li>This data portal resides on servers at Arizona State University (ASU) that are actively maintained by the Symbiota Support Hub. While maintaining your data on this infrastructure is one benefit of using an ASU-hosted Symbiota portal, data providers are urged to regularly <a href="https://biokic.github.io/symbiota-docs/coll_manager/download/" target="_blank" rel="noopener noreferrer">download data backups</a>. Please review the Symbiota Support Hub's <a href="https://symbiota.org/cybersecurity/" target="_blank" rel="noopener noreferrer">Statement on Cybersecurity</a> for more information on this topic.</li>
			<li>Thanks to support from the US National Science Foundation, contributing specimen occurrence data to this Symbiota portal will be free of charge through 2026, and possibly longer (NSF Awards <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324688" target="_blank" rel="noopener noreferrer">2324688</a>, <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324689" target="_blank" rel="noopener noreferrer">2324689</a>, and <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2324690" target="_blank" rel="noopener noreferrer">2324690</a>). Please review <a href="https://symbiota.org/sustaining-symbiota-services/" target="_blank" rel="noopener noreferrer">Sustaining Symbiota Services</a> for more information on the Symbiota Support Hub's sustainability planning initiatives.</li>
			<li>Data contributors will be subscribed to <a href="https://symbiota.org/symbiota-communications/" target="_blank" rel="noopener noreferrer">Symbiota Communications</a> to ensure they receive  important technical notices about this portal and other related notifications.</li>
		</ul>

		<h2 id="users">For Data Users</h2>
		<p>By using data in this portal, you are agreeing to give attribution to data providers according to the licenses and usage rights specified on the collection profile(s) in this portal. When in doubt, reach out to the relevant <a href="https://biokic.github.io/symbiota-docs/user/contact/" target="_blank" rel="noopener noreferrer">listed contact(s)</a> for more information. Additionally:</p>
			<ul>
			<li> It is incumbent upon data users to use the information available in this portal responsibly. The Symbiota Support Hub, the portal's Steering Committee members, and their affiliated institutions cannot assume responsibility for damages resulting from misuse or misinterpretation of data made available in this portal, or from errors or omissions that may exist in the data.</li>
			<li>Images and other multimedia available within this portal have been contributed to promote research and education. The original data contributors retain full copyright to these media records unless indicated otherwise on their respective portal profiles. When in doubt, contact the appropriate data provider(s) before reusing any imagery or other media found in this portal.</li>
			<li>Data users are asked not to redistribute data obtained from this site without written permission from the data's respective owner(s). However, links or references to the portal may be freely posted.</li> 
			<li>Requests to view redacted data must be directed to the appropriate <a href="https://biokic.github.io/symbiota-docs/user/contact/" target="_blank" rel="noopener noreferrer">listed contacts</a>. Please do not contact the portal Steering Committee or the Symbiota Support Hub for access to redacted information in this portal.</li>
			<li> Many records available in this data portal are actively being curated, cleaned, and managed, and, as such, they are made available "as is". Any errors in the data should be directed to the appropriate <a href="https://biokic.github.io/symbiota-docs/user/contact/" target="_blank" rel="noopener noreferrer">listed contact(s)</a>. You may also leave <a href="https://biokic.github.io/symbiota-docs/user/comment/" target="_blank" rel="noopener noreferrer">comments</a> on individual occurrence records of concern. </li>
		</ul>
		
		<h2 id="citations">Data Citations & Attribution</h2>
		<p>
		It is considered a matter of professional ethics to cite and acknowledge the contributions of others that have resulted in subsequent works. Likewise, proper citation of collections data is critical to sustaining these resources and the reproducibility of your research. If you use data acquired from this portal in any forthcoming products, the following citation formats are strongly suggested for giving attribution to the data providers. While formatting may vary by citation style, <strong>at minimum</strong>, you should specify the <strong>URL</strong> to the original data source in your citation, be it for citing the portal, a specific collection, an occurrence record, a checklist, a dataset, or otherwise. Data users are also strongly encouraged to <a href="https://biokic.github.io/symbiota-docs/user/contact/" target="_blank" rel="noopener noreferrer">contact the original investigator</a> responsible for the data that they are accessing.
		</p>
	
	<h2>How to cite...</h2>
		
	<h3>This portal:</h3>
		<blockquote>
		Symbiota Paleo Data Portal. Year. https://paleodata.biokic.asu.edu. Accessed on YYYY-MM-DD.
		</blockquote>
		
	<h3>Occurrence data from specific institutions:</h3>
		<blockquote>Refer to individual collection profile pages to find the available citation formats.</blockquote>
		
		<h4>Example:</h4>
		<blockquote>
			<?php
			$collData['collectionname'] = 'Name of Institution or Collection';
			$collData['dwcaurl'] = $serverHost . $CLIENT_ROOT . '/portal/content/dwca/NIC_DwC-A.zip';
			if (file_exists($SERVER_ROOT . '/includes/citationcollection.php')) {
				include($SERVER_ROOT . '/includes/citationcollection.php');
			} else {
				echo 'Name of Institution or Collection. Occurrence dataset ' . 'https://paleodata.biokic.asu.edu/portal/content/dwca/ ' . 'accessed via the ' . 'Symbiota Paleo Data ' . 'Portal, ' . 'https://paleodata.biokic.asu.edu' . ', 2022-07-25.';
			}
			?>
		</blockquote>

		<h3>Collections published to GBIF:</h3>
		<blockquote>Refer to <a href="https://www.gbif.org/citation-guidelines" target="_blank" rel="noopener noreferrer">GBIF's guidance</a> and include the GBIF-minted DOI in the citation. If a collection in this portal has also been published to GBIF, a <a href="https://biokic.github.io/symbiota-docs/images/citation_widget.png" target="_blank" rel="noopener noreferrer">green widget</a> will be present on the relevant profile page, as will a URL to the corresponding GBIF dataset.</blockquote>

		<h1 id="collecting">Statement on Responsible Fossil Collecting</h1>
		<p>
		The data available in this portal have been derived from specimens that have been carefully collected, documented, prepared, and curated for scientific research. Collecting fossils requires permission from the applicable landowner(s), regardless of whether the specimen(s) originated on private or public lands. Moreover, scientific collecting efforts should be coordinated with an accredited institution that maintains a publicly accessible research collection. The <a href="https://www.paleosoc.org/code-of-fossil-collecting" target="_blank" rel="noopener noreferrer">Paleontological Society's Code of Fossil Collecting</a>, the <a href="https://vertpaleo.org/code-of-conduct/" target="_blank" rel="noopener noreferrer">Society of Vertebrate Paleontology's Code of Ethics</a>, and the Geological Society of America's statement on <a href="https://paleo.memberclicks.net/assets/docs/Pos28_Fieldwork.pdf" target="_blank" rel="noopener noreferrer">Responsible Geologic Fieldwork Practices</a> provides additional guidance on responsible and ethical fossil collecting practices.
		</p>

		<h1 id="credits">Acknowledgments</h1>
		<p>
		This portal's header image is from the Smithsonian Institution Archives, Record Unit 95, Box 62B, Folder 21, Image No. <a href="https://www.si.edu/object/louisiana-purchase-exposition-st-louis-missouri-1904:siris_arc_400893" target="_blank" rel="noopener noreferrer">SIA_000095_B62B_F21_006</a> (CC0).
		<br><br>
		The “trilocorn” image included in the portal's footer and favicon was created by <a href="https://orcid.org/0000-0003-1568-4858" target="_blank" rel="noopener noreferrer">Molly Phillips</a>. The trilocorn is <a href="https://paleo-data.github.io/about#what-is-your-logo" target="_blank" rel="noopener noreferrer">PDWG's mascot</a>.
		</p>
	
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
