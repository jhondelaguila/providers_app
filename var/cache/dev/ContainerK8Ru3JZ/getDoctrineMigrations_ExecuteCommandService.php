<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.execute_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsExecuteDoctrineCommand.php';

$this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();

$instance->setName('doctrine:migrations:execute');

return $instance;
