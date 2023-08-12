<?php

namespace App\Models;

abstract class AbstractUser
{
    /** @var string default role to affect to all authenticated users */
    protected const ROLE_DEFAULT = 'ROLE_USER';

    /** @var string Password */
    protected $password;

    /** @var array user roles */
    protected $roles;

    /** @var bool true by default a new user account is enabled */
    protected $enabled = true;

    /** @var string username */
    protected $username;

    /** Get user roles. */
    public function getRoles(): array
    {
        return array_merge([self::ROLE_DEFAULT], $this->roles);
    }

    /** add given role to user. */
    public function addRole(string $role): self
    {
        $role = strtoupper($role);

        if (!in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
        }

        return $this;
    }

    /** Set all user roles. */
    public function setRoles(array $roles): self
    {
        $this->roles = array_unique($roles);

        return $this;
    }

    /** Check user account */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /** Activate/deactivate a user account */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->enabled = $isEnabled;

        return $this;
    }

    /** Set username */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }
}


