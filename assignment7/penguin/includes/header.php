<!DOCTYPE html>
<html>
<head>
<? if($title == null)
{
$title = "Penguin Home Improvement ";
} 
if($description == null)
{
$description = "";
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
	  href="penguin.css"
	  type="text/css"
	  media="screen" />
<script type="text/javascript" src="penguin.js"></script>
</head>

<body>

