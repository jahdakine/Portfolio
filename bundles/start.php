<?php
/**
 * @version 1.0
 * @author Andrew Ellis (http://github.com/awellis13)
 */
define('BINDER_EXT', '.binder.php');
Autoloader::map(array(
	'Binder' => Bundle::path('binder').'classes/binder.php'
));

// Load er' up!
Binder::init();
