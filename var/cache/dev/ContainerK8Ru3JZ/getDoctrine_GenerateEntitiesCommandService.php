<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.generate_entities_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Command\\GenerateEntitiesDoctrineCommand.php';

$this->privates['doctrine.generate_entities_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

$instance->setName('doctrine:generate:entities');

return $instance;
