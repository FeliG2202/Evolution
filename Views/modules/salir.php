<?php 

if ($_SESSION) {
	session_destroy();
	header('location:Dashboard');
}