<?php

function sessionControl()
{
    return (isset($_SESSION['admin'])) ? true : false;
}
?>