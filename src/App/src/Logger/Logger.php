<?php

namespace App\Logger;

use Psr\Log;

class Logger extends \Psr\Log\AbstractLogger {

	public function log($level, $message, array $context = array()) {
		$data = $level.': '.$message.PHP_EOL;
		$handle = fopen("C:\u3c-v3\data\log.txt", 'a+');
		fwrite($handle, $data);
		fclose($handle);
	}
}