<?php
$language = "en_US";
putenv("LC_ALL=$language");
setlocale(LC_ALL, $language);
bindtextdomain("principal", "./translate");
textdomain("principal");

print "<p>" . _("Simple test") . "</p>\n";
?>