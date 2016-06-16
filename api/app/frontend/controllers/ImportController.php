<?php
namespace Multiple\Frontend\Controllers;

class ImportController extends ControllerBase
{
	public function indexAction() {
		$dbPath = realpath(PUBLIC_PATH . '/../../db/');
		$importFile = realpath($dbPath . '/import.sh');
		$cmd = 'cd ' . $dbPath . ' && ' . $importFile . ' --restore-db';
		return array(
			'success' => true,
			'msg' => shell_exec($cmd),
			'cmd' => $cmd
		);
	}

}

