<?php
include_once('../../config/symbini.php');
include_once($SERVER_ROOT.'/content/lang/collections/list.'.$LANG_TAG.'.php');
include_once($SERVER_ROOT.'/classes/OccurrenceMapManager.php');
include_once($SERVER_ROOT . '/rpc/crossPortalHeaders.php');

header("Content-Type: text/html; charset=".$CHARSET);

$cntPerPage = array_key_exists("cntperpage",$_REQUEST)?$_REQUEST["cntperpage"]:100;
$pageNumber = array_key_exists("page",$_REQUEST)?$_REQUEST["page"]:1;
$recLimit = (array_key_exists('recordlimit',$_REQUEST)&&is_numeric($_REQUEST['recordlimit'])?$_REQUEST['recordlimit']:15000);

//Sanitation
if(!is_numeric($cntPerPage)) $cntPerPage = 100;
if(!is_numeric($pageNumber)) $pageNumber = 1;

$mapManager = new OccurrenceMapManager();
$searchVar = $mapManager->getQueryTermStr();
$recCnt = $mapManager->getRecordCnt();
$occArr = array();
$host = false;

if(isset($SERVER_HOST)) {
   $host = ($SERVER_HOST === '127.0.0.1' || $SERVER_HOST === 'localhost'? "http://": "https://") . $SERVER_HOST . $CLIENT_ROOT;
}

if(!$recLimit || $recCnt < $recLimit){
	$occArr = $mapManager->getOccurrenceArr($pageNumber,$cntPerPage);
}
?>
<div id="queryrecordsdiv" style="">
	<div style="height:25px;margin-top:-5px;">
		<div>
			<div style="float:left;">
            <form name="downloadForm" action="<?= $host ? $host . '/collections/download/index.php': '../download/index.php'?>" method="post" onsubmit="targetPopup(this)" style="float:left">
					<button class="ui-button ui-widget ui-corner-all" style="margin:5px;padding:5px;cursor: pointer; background-color: var(--darkest-color);" title="<?php echo $LANG['DOWNLOAD_SPECIMEN_DATA']; ?>">
						<svg style="width:1.3em" alt="<?php echo $LANG['IMG_DWNL_DATA']; ?>" fill="var(--light-color)" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/></svg>
					</button>
					<input name="reclimit" type="hidden" value="<?php echo $recLimit; ?>" />
					<input name="sourcepage" type="hidden" value="map" />
					<input name="searchvar" type="hidden" value="<?php echo $searchVar; ?>" />
					<input name="dltype" type="hidden" value="specimen" />
				</form>
				<form name="fullquerykmlform" action="<?= $host ? $host . '/collections/map/kmlhandler.php': 'kmlhandler.php' ?>" method="post" target="_blank" style="float:left;">
					<input name="reclimit" type="hidden" value="<?php echo $recLimit; ?>" />
					<input name="sourcepage" type="hidden" value="map" />
					<input name="searchvar" type="hidden" value="<?php echo $searchVar; ?>" />
					<button name="submitaction" type="submit" class="ui-button ui-widget ui-corner-all icon-button" style="margin:5px;padding:5px;cursor: pointer; background-color: var(--darkest-color);" title="Download KML file">
						<div style="display: flex; align-items: center;">
							<svg style="width:1.3em" alt="<?php echo $LANG['IMG_DWNL_DATA']; ?>" fill="var(--light-color)" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/></svg>
							<span style="color: var(--light-color);">KML</span>
						</div>
					</button>
				</form>
            <button class="ui-button ui-widget ui-corner-all" style="margin:5px;padding:5px;cursor: pointer; background-color: var(--darkest-color);" onclick="copyUrl('<?= htmlspecialchars($host)?>')" title="<?php echo (isset($LANG['COPY_TO_CLIPBOARD'])?$LANG['COPY_TO_CLIPBOARD']:'Copy URL to Clipboard'); ?>">
					<svg alt="Copy as a link." style="width:1.2em;margin-right:5px;" xmlns="http://www.w3.org/2000/svg" fill="var(--light-color)" height="24" viewBox="0 -960 960 960" width="24"><path d="M440-280H280q-83 0-141.5-58.5T80-480q0-83 58.5-141.5T280-680h160v80H280q-50 0-85 35t-35 85q0 50 35 85t85 35h160v80ZM320-440v-80h320v80H320Zm200 160v-80h160q50 0 85-35t35-85q0-50-35-85t-85-35H520v-80h160q83 0 141.5 58.5T880-480q0 83-58.5 141.5T680-280H520Z"/></svg>
				</button>
			</div>
		</div>
	</div>
	<div>
		<?php
		$paginationStr = '<div><div style="clear:both;"><hr/></div><div style="margin:5px;">';
      $href = $host? $host . '/collections/map/occurrencelist.php?':'occurrencelist.php?' ;
		$lastPage = (int)($recCnt / $cntPerPage) + 1;
		$startPage = ($pageNumber > 5?$pageNumber - 5:1);
		$endPage = ($lastPage > $startPage + 10?$startPage + 10:$lastPage);
		$pageBar = '';
		if($startPage > 1){
			$pageBar .= '<span class="pagination" style="margin-right:5px;"><a href="' . $href . htmlspecialchars($searchVar, HTML_SPECIAL_CHARS_FLAGS) . '" >' . htmlspecialchars($LANG['PAGINATION_FIRST'], HTML_SPECIAL_CHARS_FLAGS) . '</a></span>';
			$pageBar .= '<span class="pagination" style="margin-right:5px;"><a href="' . $href . htmlspecialchars($searchVar, HTML_SPECIAL_CHARS_FLAGS) . '&page=' . htmlspecialchars((($pageNumber - 10) < 1?1:$pageNumber - 10), HTML_SPECIAL_CHARS_FLAGS) . '">&lt;&lt;</a></span>';
		}
		for($x = $startPage; $x <= $endPage; $x++){
			if($pageNumber != $x){
				$pageBar .= '<span class="pagination" style="margin-right:3px;margin-right:3px;"><a href="' . $href . htmlspecialchars($searchVar, HTML_SPECIAL_CHARS_FLAGS) . '&page=' . htmlspecialchars($x, HTML_SPECIAL_CHARS_FLAGS) . '">' . htmlspecialchars($x, HTML_SPECIAL_CHARS_FLAGS) . '</a></span>';
			}
			else{
				$pageBar .= '<span class="pagination" style="margin-right:3px;margin-right:3px;font-weight:bold;">'.$x.'</span>';
			}
		}
		if(($lastPage - $startPage) >= 10){
			$pageBar .= '<span class="pagination" style="margin-left:5px;"><a href="' . $href . htmlspecialchars($searchVar, HTML_SPECIAL_CHARS_FLAGS) . '&page=' . htmlspecialchars((($pageNumber + 10) > $lastPage?$lastPage:($pageNumber + 10)), HTML_SPECIAL_CHARS_FLAGS) . '">&gt;&gt;</a></span>';
			$pageBar .= '<span class="pagination" style="margin-left:5px;"><a href="' . $href . htmlspecialchars($searchVar, HTML_SPECIAL_CHARS_FLAGS) . '&page=' . htmlspecialchars($lastPage, HTML_SPECIAL_CHARS_FLAGS) . '">Last</a></span>';
		}
		$pageBar .= '</div><div style="margin:5px;">';
		$beginNum = ($pageNumber - 1)*$cntPerPage + 1;
		$endNum = $beginNum + $cntPerPage - 1;
		if($endNum > $recCnt) $endNum = $recCnt;
		$pageBar .= $LANG['PAGINATION_PAGE'].' '.$pageNumber.', '.$LANG['PAGINATION_RECORDS'].' '.$beginNum.'-'.$endNum.' '.$LANG['PAGINATION_OF'].' '.$recCnt;
		$paginationStr .= $pageBar;
		$paginationStr .= '</div><div style="clear:both;"><hr/></div></div>';
		echo $paginationStr;

		if($occArr){
			?>
			<form name="selectform" id="selectform" action="" method="post" onsubmit="" target="_blank">
				<table class="styledtable" style="font-size:12px;margin-left:-15px;">
					<tr>
						<!--
						<th style="width:10px;" title="Select/Deselect all Records">
							<input id="selectallcheck" type="checkbox" onclick="selectAll(this);" '.($allSelected==true?"checked":"").' />
						</th>
						 -->
                  <th><?=$LANG['CATALOG_NUMBER']?></th>
						<th><?=$LANG['COLLECTOR']?></th>
						<th><?=$LANG['DATE']?></th>
						<th><?=$LANG['SCIENTIFIC_NAME']?></th>
						<th><?=$LANG['MAP_LINK']?></th>
					</tr>
					<?php
					$trCnt = 0;
					foreach($occArr as $occId => $recArr){
						$trCnt++;
						echo '<tr '.($trCnt%2?'class="alt"':'').' id="tr'.$occId.'">';
						echo '<td id="cat' . $occId . '" >' . $recArr["cat"] . '</td>';
						echo '<td id="label' . $occId .'" >';
						echo '<a href="#" onclick="openRecord({occid:' . $occId . ($host?', host:\'' . $host . '\'' : '' ) . '}); return false;">' . ($recArr["c"]?$recArr["c"]:"Not available") .'</a>';
						echo '</td>';
						echo '<td id="e' . $occId .'" >' . $recArr["e"] . '</td>';
						echo '<td id="s' . $occId .'" >'. $recArr["s"] . '</td>';
						echo '<td id="li' . $occId . '" ><a href="#occid=' . $occId . '" onclick="emit_occurrence_click(' . $occId . ')">' . $LANG['SEE_MAP_POINT'] . '</a></td>';
						echo '</tr>';
					}
					?>
				</table>
			</form>
			<?php
			if($lastPage > $startPage) echo '<div style="">'.$paginationStr.'</div>';
		}
		else{
			if($recCnt > $recLimit){
				?>
				<div style="font-weight:bold;font-size:120%;">Record count exceeds limit</div>
				<?php
			}
			else{
				?>
				<div style="font-weight:bold;font-size:120%;">No records found matching the query</div>
				<?php
			}
		}
		?>
	</div>
</div>
