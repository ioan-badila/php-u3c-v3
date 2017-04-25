<?php

namespace App\Logger;

use Psr\Log;
use Doctrine\ORM\EntityManager;

class DoctrineLogger extends AbstractLogger {

	private $em;
	private $logEntity;

	public function __construct(EntityManager $em, string $logEntity) {
		$this->em = $em;
		$this->logEntity = $logEntity;
	}

	public function log($level, $message, array $context = array()) {
		$log = new $logEntity($status, $level, $code, $message, $trace, $line, $file);
		$this->em->persist($log);
		$this->em->flush($log);
	}
}