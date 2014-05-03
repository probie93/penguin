<!DOCTYPE html>
<html>
<head>
<? if($title == null)
{
$title = "Penguin Home Improvement";
} 
if($page == null)
{
$page = "home";
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



<link rel="stylesheet" href="css/penguin.css" type="text/css" media="screen" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/penguin.js"></script>
</head>

<body id = "<?print($page);?>">
<header id = "header">
<section id = "logo_holder">
<img id = "logo" src = "img/placeholder_logo.png" alt="Penguin Home Improvement Logo" />
</section>
<?include 'includes/menu.php'?>
<p class = "phone_number">802-238-1691</p>
</header>

