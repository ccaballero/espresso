<?php include 'config.php' ?>
<!DOCTYPE html PUBLIC
    "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $title ?></title>
        <link rel="icon" href="/images/cup.png" />
        <link rel="stylesheet" href="/css/style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="/css/ui-lightness/jquery-ui-1.10.1.custom.min.css" media="screen" type="text/css" />

        <script src="/js/jquery-1.9.1.js"></script>
        <script src="/js/jquery-ui-1.10.1.custom.min.js"></script>
        <script src="/js/espresso.js"></script>
    </head>
    <body>
        <h1><?php echo $title ?></h1>
        <div id="main">
            <ul>
        <?php foreach ($items as $item) { ?>
            <li>
                <a class="tooltip" target="_BLANK"
                   title="<?php echo get_description($item) ?>"
                   href="<?php echo get_url($item, $server) ?>"><?php echo $item['label'] ?></a>
            </li>
        <?php } ?>
            </ul>
        </div>
        <div id="footer">
            <p class="left">free people</p>
            <p class="right">sociedad científica de estudiantes de sistemas e informática</p>
            <p class="left"><a href="https://github.com/ccaballero/espresso" target="_BLANK">código fuente</a></p>
        </div>
    </body>
</html>
