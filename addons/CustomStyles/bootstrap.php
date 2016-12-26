<?php
if (COCKPIT_ADMIN && !COCKPIT_REST) {
	$app->on('admin.init', function() {
		$this->helper('admin')->data->get('assets')->append('/assets/src/css/base/admin.css');
		$this->helper('admin')->data->get('assets')->append('/assets/src/js/admin.js');
	});
}
