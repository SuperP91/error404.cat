<?php
$language = "es_ES";
putenv("LC_ALL=$language");
setlocale(LC_ALL, $language);
bindtextdomain("principal", "./locale");
textdomain("principal");

print "<p>" . _("Simple test") . "</p>\n";
?>