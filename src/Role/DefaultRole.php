<?php declare (strict_types=1);

/**
 * This file is part of the Samshal\Acl library
 *
 * @license MIT
 * @copyright Copyright (c) 2016 Samshal http://samshal.github.com
 */
namespace Samshal\Acl\Role;

/**
 * class DefaultRole.
 *
 * A base object for creating new Role objects
 *
 * @package samshal.acl.role
 * @author Samuel Adeshina <samueladeshina73@gmail.com>
 * @since 30/05/2016
 */
class DefaultRole implements RoleInterface
{
    /**
     * @var string
     */
    protected $roleName;

    /**
     * {@inheritdoc}
     */
    public function __construct($roleName)
    {
        $this->roleName = (string) $roleName;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Returns the roleName when this class is treated as a string.
     */
    public function __toString()
    {
        return $this->getRoleName();
    }
}
