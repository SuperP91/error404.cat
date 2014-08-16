<?php
$language = "es_ES";
putenv("LC_ALL=$language");
setlocale(LC_ALL, $language);
bindtextdomain("principal", "locale");
textdomain("principal");

print "<p>" . gettext("Simple test") . "</p>\n";
?>