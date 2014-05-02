<!DOCTYPE html>
<html>
<head>
<? if($title == null)
{
$title = "Landing Page for CS142 Final";
} 
if($description == null)
{
$description = "This site is for redirecting the user to either the web usability portion of the final or to the actual website";
}
if(file_exists("websiteinfo.php"))
{
include"websiteinfo.php";
}

?>
	<title><?print $title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Matthew Wolf and Ian Benson" />
<link rel="shortcut icon" href="img/favicon.ico">
<meta name="description" content=" <?print $description;?> "/>



<link rel="stylesheet"
	  href="style.css"
	  type="text/css"
	  media="screen" />
<script type="text/javascript" src="javascript.js"></script>
</head>

<body>

