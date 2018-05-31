<?php

function __($text) {
	return htmlentities($text, ENT_COMPAT|ENT_HTML5, 'UTF-8');
}
