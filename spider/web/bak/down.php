<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

$content = file_get_contents('./c.html');

$pattern0 = '@data-source="(?P<url>.*)".*@Us';
$pattern = '@src=.*"(?P<url>.*)".*@Us';
$pattern2 = "@src=.*'(?P<url>.*)'.*@Us";
$pattern3 = '@<link.*type="text/css".*href="(?P<css>.*)".*>@Us';
$pattern4 = "@url\(.*'(?P<images>.*)'.*\)@Us";
$pattern5 = '@url\(.*"(?P<images>.*)".*\)@Us';
$pattern6 = '@url\((?P<images>.*)\)@Us';
$pattern7 = "@<link.*href='(?P<css>.*\.css)'.*>@Us";

$pattern = '@<h3>(?P<pcat>.*)</h3>.*<ul .*>(?P<subInfos>.*)</ul>@Us';
$patternSub = '@<a href="/zt/(?P<catdir>.*)/".*>(?P<subcat>.*)</a>@Us';
preg_match_all($pattern, $content, $infos);
$pcats = $infos['pcat'];
$subInfos = $infos['subInfos'];
$sql = "INSERT INTO `wc_article_category` (`name`, `catdir`, `parent_id`, `orderlist`, `description`, `meta_title`, `meta_keyword`, `meta_description`) VALUES ";
foreach ($pcats as $key => $pcat) {
    //$sql .= "('{$pcat}', '', '0', 1, '{$pcat}', '{$pcat}', '{$pcat}', '{$pcat}'),\n\n";

    preg_match_all($patternSub, $subInfos[$key], $datas);
	$catdir = $datas['catdir'];
	$subcat = $datas['subcat'];
	$parentId = $key + 1;
	foreach ($subcat as $subKey => $subValue) {
        $sql .= "('{$subValue}', '{$catdir[$subKey]}', '{$parentId}', 1, '{$subValue}', '{$subValue}', '{$subValue}', '{$subValue}'),\n";
	}
}
echo $sql;exit();
	
var_dump($infos);exit();

$data = array_merge($url0['url'], $url['url'], $url2['url'], $url3['css'], $url4['images'], $url5['images'], $url6['images'], $url7['css']);
$data = array_unique($data);
$allnum = count($data);

$i = 1;
foreach ($data as $file) {
	$file = str_replace('"', '', $file); $file = trim(str_replace("'", '', $file));
	$url = strpos($file, 'ttp:') ? $file : $downInfos['urlpre'] . str_replace('..', '', $file);
	$basefile = basename($file);
	$basefile = strpos($basefile, '?') !== false ? substr($basefile, 0, strpos($basefile, '?')) : $basefile;
	$localFile = $downInfos['localpre'] . $basefile;

	if ($isDown) {
		downFile($url, $localFile);
		echo $i . '---down file from:' . $url . '===to===' . $localFile . '<br />';
	} else {
		$string = (file_exists($localFile)) ? 'yyyyyyyyyyyyyyy ' : 'nnnnnnnnnnnnnn ';
		echo $i . '---' . $string . '<a href="' . $url . '" target="_blank">' . $url . '</a>---<a href="' . $downInfos['localurl'] . basename($file) . '" target="_blank">本地</a><br />';
	}
	$i++;
}

var_dump($data);
function downFile($url, $localFile,  $isForce = false)
{
	$url = str_replace('com//', 'com/', $url);
	if (file_exists($localFile) && empty($isForce)) {
		return true;
	}

	if (empty($url)) {
		return false;
	}

	$fileInfos = pathinfo($url);
	$remoteContent = file_get_contents($url);
	file_put_contents($localFile, $remoteContent);
	return true;
}
