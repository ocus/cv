<?php
$format = '';
if (isset($_REQUEST['f'])) {
    $format = strtolower(trim($_REQUEST['f']));
}
if (!in_array($format, array('pdf', 'odt'))) {
    $format = 'pdf';
}

$time = 5;
$file = sprintf('files/matthieu_honel.%s', $format);

echo '<?xml version="1.0" encoding="iso-8859-15" ?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-15" />
        <title>Matthieu Honel - T&eacute;l&eacute;chargement CV - <?php echo strtoupper($format) ?></title>
        <meta http-equiv="refresh" content="<?php echo $time ?>;url=<?php echo $file ?>">
        <style type="text/css">
        body {
            font-family: Verdana, serif;
            font-size: 60%;
        }
        p.redirect-text, p.return {
            margin: 5em;
            text-align: center;
        }
        </style>
    </head>

    <body>
        <p class="redirect-text">Si vous n'&ecirc;tes pas redirig&eacute; automatiquement dans <?php echo $time ?> secondes, <a href="<?php echo $file ?>" title="CV de Matthieu Honel au format <?php echo strtoupper($format) ?>">cliquez pour acc&eacute;der &agrave; mon CV</a>.</p>
        <p class="return"><a href="/" title="CV Matthieu Honel">Retour &agrave; mon CV</a></p>
        <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-12534870-1");
            pageTracker._trackPageview();
        } catch(err) {}
        </script>
    </body>
</html>
