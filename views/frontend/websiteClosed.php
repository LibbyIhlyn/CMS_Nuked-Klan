<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <title><?php echo $GLOBALS['nuked']['name'] ?> - <?php echo $GLOBALS['nuked']['slogan'] ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link type="text/css" rel="stylesheet" media="screen" href="assets/css/nkDefault.css" />
        <link type="text/css" rel="stylesheet" media="screen" href="themes/<?php echo $GLOBALS['theme'] ?>/style.css" />
    </head>
    <body class="nkBgColor2">
        <div id="nkSiteClosedWrapper" class="nkBorderColor3 nkBgColor2">
            <h1><?php echo $GLOBALS['nuked']['name'] ?> - <?php echo $GLOBALS['nuked']['slogan'] ?></h1>
            <p><?php echo __('WEBSITE_CLOSED') ?></p>
            <a href="index.php?file=User&amp;op=login_screen"><strong><?php echo __('LOGIN_USER') ?></strong></a>
        </div>
    </body>
</html>