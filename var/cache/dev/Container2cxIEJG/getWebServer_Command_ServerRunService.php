<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'web_server.command.server_run' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\web-server-bundle\\Command\\ServerRunCommand.php';

$this->privates['web_server.command.server_run'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand(($this->targetDirs[3].'/public'), 'dev');

$instance->setName('server:run');

return $instance;
