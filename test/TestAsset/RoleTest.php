<?php

/**
 * @see       https://github.com/laminas/laminas-permissions-rbac for the canonical source repository
 * @copyright https://github.com/laminas/laminas-permissions-rbac/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-permissions-rbac/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Permissions\Rbac\TestAsset;

use Laminas\Permissions\Rbac\AbstractRole;

class RoleTest extends AbstractRole
{
    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
