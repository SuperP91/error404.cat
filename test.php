<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$language = "en_US.utf8";
putenv("LC_ALL=$language");
setlocale(LC_ALL, $language);
bindtextdomain("principal", "./locale");
textdomain("principal");

print "<p>" . _("Simple test") . "</p>\n";
?>