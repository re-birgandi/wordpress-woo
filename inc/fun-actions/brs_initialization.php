<?php
function brs_initialization(){
	echo 	brs_active_plugin() && brs_is_connected() ? 'connected' : 'connection failure';
}