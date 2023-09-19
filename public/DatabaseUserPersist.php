<?php
declare(strict_types=1);

require_once 'UserPersistInterface.php';

class DatabaseUserPersist implements UserPersistInterface
{

    public function save(User $user): void
    {
        echo __METHOD__;
    }

    public function get(string $login): ?User
    {
        throw new LogicException('Method not implemented');
    }
}