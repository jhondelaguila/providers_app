<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user.provider.concrete.users_in_memory' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\User\\UserProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\User\\InMemoryUserProvider.php';

return $this->privates['security.user.provider.concrete.users_in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider(array());
