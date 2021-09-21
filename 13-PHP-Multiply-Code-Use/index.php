<?php

require("read.php");

require("passwordfilter.php");

foreach ($userPassword as $key => $value) {
    if (strlen($key) > 8) {
        print_r($value);
    }
}