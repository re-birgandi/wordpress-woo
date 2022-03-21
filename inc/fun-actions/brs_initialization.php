<?php
function brs_initialization(){
	echo 	brs_active_plugin(BRS_PLUGIN_ACTIVE ) && brs_is_connected() ? 'connected' : 'connection failure';
}