<?php
/**
 * Created by PhpStorm.
 * User: 21800502
 * Date: 26/03/2019
 * Time: 08:08
 */

session_start();
unset($_SESSION['usuario']);
header("Location: ./");