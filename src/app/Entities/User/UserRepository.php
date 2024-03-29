<?php
declare(strict_types=1);

namespace App\Domain\User;

interface UserRepository
{
    /**
     * @return Record[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return Record
     * @throws RecordNotFoundException
     */
    public function findUserOfId(int $id): Record;
}
