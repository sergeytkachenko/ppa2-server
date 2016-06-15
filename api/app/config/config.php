<?
return new \Phalcon\Config(array(
	'database' => array(
		'mysql' => array(
			'host'     => 'localhost',
			'username' => 'root',
			'password' => '1665017',
			'dbname'   => 'ppa-server',
			'charset'  => 'utf8',
		)
	),

	'application' => array(
		'controllersDir' => __DIR__ . '/../../app/controllers/',
		'modelsDir'      => __DIR__ . '/../../app/models/',
		'viewsDir'       => __DIR__ . '/../../app/views/',
		'pluginsDir'     => __DIR__ . '/../../app/plugins/',
		'libraryDir'     => __DIR__ . '/../../app/library/',
		'libDir'         => __DIR__ . '/../../app/lib/',
		'cacheDir'       => __DIR__ . '/../../app/cache/',
		'servicesDir'    => __DIR__ . '/../../app/services/',
		'baseUri'        => '/api',
		'publicUrl'      => ''
	)
));

