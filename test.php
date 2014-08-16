<?php
$language = "es_ES";
putenv("LC_ALL=$language");
setlocale(LC_ALL, $language);
bindtextdomain("principal", "/var/www/html/locale");
bind_textdomain_codeset("principal", 'UTF-8');
textdomain("principal");

print "<p>" . _("Simple test") . "</p>\n";
?>