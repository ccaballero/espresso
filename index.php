<?php include 'config.php' ?>
<!DOCTYPE html PUBLIC
    "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $title ?></title>
        <link href="/images/cup.png" rel="icon" />
        <link href="/css/style.css" media="screen" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1><?php echo $title ?></h1>
        <div id="main">
            <ul>
            <?php foreach ($domains as $domain) { ?>
                <?php $label = is_array($domain) ? $domain[0] : $domain ?>
                <?php $url = is_array($domain) ? $domain[1] : $domain ?>
                <li>
                    <a target="_BLANK" href="<?php echo "http://$url.$server/" ?>">
                        <?php echo $label ?>
                    </a>
                </li>
            <?php } ?>
            </ul>
        </div>
        <div id="footer">
            <p>sociedad científica de estudiantes de sistemas e informática</p>
        </div>
    </body>
</html>
