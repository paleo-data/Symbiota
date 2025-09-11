<?php
include_once('../config/symbini.php');
if($LANG_TAG != 'en' && file_exists($SERVER_ROOT.'/content/lang/includes/useagepolicy_template.' . $LANG_TAG . '.php')) include_once($SERVER_ROOT.'/content/lang/includes/useagepolicy_template.' . $LANG_TAG . '.php');
else include_once($SERVER_ROOT . '/content/lang/includes/useagepolicy_template.en.php');
include_once ($SERVER_ROOT . '/classes/utilities/GeneralUtil.php');

header("Content-Type: text/html; charset=" . $CHARSET);
$serverHost = GeneralUtil::getDomain();
?>
<!DOCTYPE html>
<html lang="en">

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
			<p><h2>Contents</h2>
				<a rel="noopener" target="blank" href="#providers">For Data Providers</a>
		|		<a rel="noopener" target="blank" href="#users">For Data Users</a>
		| 		<a rel="noopener" target="blank" href="#citations">Data Citations & Attribution</a>
		| 		<a rel="noopener" target="blank" href="#collecting">Statement on Responsible Fossil Collecting</a>
			</p>
		
		<h2 id="providers">For Data Providers</h2>
			<p>
				By providing data to this portal, you are agreeing to:
			</p>
			<ul style="line-height: 1.5;">
				<li>Only share data to which your institution maintains legal rights.</li>
				<li>Share data under one of the following <a href="https://creativecommons.org/share-your-work/cclicenses/" target="_blank" rel="noopener noreferrer">Creative Commons licenses</a>: CC0, CC-BY, or CC-BY-NC.</li>
				<li>Only share data that represent vouchered specimen occurrences curated in a publicly accessible permanent repository, e.g. at a university collection or non-profit museum. Collections data from academic laboratories and similar entities may be considered if accompanied by 1) a formal repository agreement from a permanent collection and 2) written permission to contribute to this data portal from the repository.</li>
			</ul>
		
		<h3>Additional Considerations</h3>
			<ul style="line-height: 1.5;">
				<li>If all or parts of your collection require locality redaction, please carefully review the documentation on <a href="https://docs.symbiota.org/Collection_Manager_Guide/Data_Publishing/redacting_obscuring_data" target="_blank" rel="noopener noreferrer">data redaction in Symbiota portals</a>.</li>
				<li>This data portal resides on servers at University of Kansas (KU) that are actively maintained by the Symbiota Support Hub. While maintaining your data on this infrastructure is one benefit of using an SSH-hosted Symbiota portal, data providers are urged to regularly <a href="https://docs.symbiota.org/Collection_Manager_Guide/Downloading/downloading_copy/" target="_blank" rel="noopener noreferrer">download data backups</a>. Please review the Symbiota Support Hub's <a href="https://symbiota.org/cybersecurity/" target="_blank" rel="noopener noreferrer">Statement on Cybersecurity</a> for more information on this topic.</li>
				<li>Thanks to support from the US National Science Foundation, contributing specimen occurrence records to this Symbiota portal is presently free of charge. Please review <a href="https://symbiota.org/sustaining-symbiota-services/" target="_blank" rel="noopener noreferrer">Sustaining Symbiota Services</a> for more information on the Symbiota Support Hub's sustainability planning initiatives.</li>
			</ul>

		<h2 id="users">For Data Users</h2>
			<p>
				By using data in this portal, you are agreeing to give attribution to data providers according to the licenses and usage rights specified on the collection profile(s) in this portal. When in doubt, reach out to the relevant <a href="https://docs.symbiota.org/User_Guide/Providing_Feedback/contacting_collection" target="_blank" rel="noopener noreferrer">listed contact(s)</a> for more information. Additionally:
			</p>
			<ul style="line-height: 1.5;">
				<li>It is incumbent upon data users to use the information available in this portal responsibly. The Symbiota Support Hub, the portal's Steering Committee members, and their affiliated institutions cannot assume responsibility for damages resulting from misuse or misinterpretation of data made available in this portal, or from errors or omissions that may exist in the data.</li>
				<li>Images and other multimedia available within this portal have been contributed to promote research and education. The original data contributors retain full copyright to these media records unless indicated otherwise on their respective portal profiles. When in doubt, contact the appropriate data provider(s) before reusing any imagery or other media found in this portal.</li>
				<li>Data users are asked not to redistribute data obtained from this site without written permission from the data's respective owner(s). However, links or references to the portal may be freely posted (see <a rel="noopener" target="blank" href="#citations"><em>Data Citations</em></a> below).</li> 
				<li>Requests to view redacted data must be directed to the original data provider</a>. Please do not contact the portal Steering Committee or the Symbiota Support Hub for access to redacted information in this portal.</li>
				<li> Many records available in this data portal are actively being curated, cleaned, and managed, and, as such, they are made available "as is". Any errors in the data should be directed to the original data provider. You may also leave <a href="https://docs.symbiota.org/User_Guide/Providing_Feedback/leaving_comments" target="_blank" rel="noopener noreferrer">comments</a> on individual occurrence records of concern. </li>
			</ul>
		
		<h2 id="citations">Data Citations & Attribution</h2>
		<p>
			It is considered a matter of professional ethics to cite and acknowledge the contributions of others that have resulted in subsequent works. Likewise, proper citation of collections data is critical to sustaining these resources and the reproducibility of your research. If you use data acquired from this portal in any forthcoming products, the following citation formats are strongly suggested for giving attribution to the data providers. While formatting may vary by citation style, <strong>at minimum</strong>, you should specify the <strong>URL</strong> to the original data source in your citation, be it for citing the portal, a specific collection, an occurrence record, a checklist, a dataset, or otherwise. Data users are also encouraged to <a href="https://docs.symbiota.org/User_Guide/Providing_Feedback/contacting_collection" target="_blank" rel="noopener noreferrer">contact</a> the original investigator responsible for the data that they are accessing. 
		</p>
	
	<h2>How to cite...</h2>
		
	<h3>This portal:</h3>
		<blockquote>
			Symbiota Paleo Data Portal. Year. https://paleo.symbiota.org. Accessed on YYYY-MM-DD.
		</blockquote>
		
	<h3>Occurrence data from specific collections:</h3>
		<blockquote>
			Refer to <a href="https://docs.symbiota.org/Collection_Manager_Guide/data_citations/#collection-citations" target="_blank" rel="noopener noreferrer">individual collection profiles</a> to find the available citation formats.
		</blockquote>

	<h3>Collections published to GBIF:</h3>
		<blockquote>
			Refer to <a href="https://www.gbif.org/citation-guidelines" target="_blank" rel="noopener noreferrer">GBIF's guidance</a> and include the GBIF-minted DOI in the citation. If a collection in this portal has also been published to GBIF, a <a href="https://docs.symbiota.org/assets/images/citation_widget-c86aee7955760684dbfd52851ea6d24d.png" target="_blank" rel="noopener noreferrer">green widget</a> may be present on its profile in this portal, as will a URL to the corresponding GBIF dataset.
		</blockquote>

		<h1 id="collecting">Statement on Responsible Fossil Collecting</h1>
			<p>
			The data available in this portal have been derived from specimens that have been carefully collected, documented, prepared, and curated for scientific research. Collecting fossils requires permission from the applicable landowner(s), regardless of whether the specimen(s) originated on private or public lands. Moreover, scientific collecting efforts should be coordinated with an accredited institution that maintains a publicly accessible research collection. The <a href="https://www.paleosoc.org/code-of-fossil-collecting" target="_blank" rel="noopener noreferrer">Paleontological Society's Code of Fossil Collecting</a>, the <a href="https://vertpaleo.org/code-of-conduct/" target="_blank" rel="noopener noreferrer">Society of Vertebrate Paleontology's Code of Ethics</a>, and the Geological Society of America's statement on <a href="https://paleo.memberclicks.net/assets/docs/Pos28_Fieldwork.pdf" target="_blank" rel="noopener noreferrer">Responsible Geologic Fieldwork Practices</a> provides additional guidance on responsible and ethical fossil collecting practices.
			</p>
		
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
