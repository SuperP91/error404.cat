<?php
//
// test if gettext extension is installed with php
//

if (!function_exists("gettext"))
{
    echo "gettext is not installed\n";
}
else
{
    echo "gettext is supported\n";
}

?>