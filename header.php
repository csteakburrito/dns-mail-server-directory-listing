<?php
$dir = '';
$isHome = true;
if ($fileName !== 'index') {
    $dir = '../';
    $isHome = false;
}
$homeLink = './';
if (!$isHome) {
    $homeLink = '../';
}

$links = array(
    'index' => 0,
    'contact' => 0,
    'email' => 0,
    'dns' => 0
);
switch($fileName) {
    case 'index':
        $links['index'] = 1;
        break;
    case 'contact':
        $links['contact'] = 1;
        break;
    case 'email':
        $links['email'] = 1;
        break;
    case 'dns':
        $links['dns'] = 1;
        break;
}

foreach ($links as &$link) {
    if ($link === 1) {
        $link = " class='active'";
    } else {
        $link = '';
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="Public Datatables, Datatables, Public DNS Servers, Public Email Servers"/>
        <meta name="author" content="Conner Bernhard" />
    	
    	<title>Datatable Base</title>

        <?php if (!$isHome): ?>
            <link rel="stylesheet" href="<?php echo $dir; ?>assets/css/entypo.css">
            <link rel="stylesheet" href="<?php echo $dir; ?>assets/css/select2-bootstrap.css">
        <?php endif; ?>
        <link rel="stylesheet" href="<?php echo $dir; ?>assets/css/style.css">
    </head>
<body class="page-body">

    <div class="non-footer<?php if($isHome) { echo ' home-non-footer'; } ?> clearfix">
        <div class="wrapper">
            <div class="site-header-container clearfix">
                <a href="<?php echo $homeLink; ?>" class="logo">
                    <img src="<?php echo $dir; ?>assets/images/pic-logo-home.png" width="76" height="73" alt="Datatable Base">
                </a>
                <header class="site-header">
                    <nav class="site-nav">
                        <ul class="main-menu" id="main-menu">
                            <li<?php echo $links['index']; ?>>
                                <a href="./<?php echo $dir; ?>">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li<?php echo $links['contact']; ?>>
                                <a href="<?php echo $dir; ?>report">
                                    <span>Report</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.connerb.com" target="_blank">
                                    <span>About Me</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </header>
            </div>