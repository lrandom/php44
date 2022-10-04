<?php
if(isset($_COOKIE['school'])) {
    echo "Cookie is set";
    echo $_COOKIE['school'];
} else {
    echo "Cookie is not set";
}