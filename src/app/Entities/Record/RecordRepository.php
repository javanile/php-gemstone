<?php
declare(strict_types=1);

namespace App\Entities\Record;

interface RecordRepository
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
