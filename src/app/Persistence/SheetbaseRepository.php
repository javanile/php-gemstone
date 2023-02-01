<?php
declare(strict_types=1);

namespace App\Persistence;

use App\Domain\User\User;
use App\Domain\User\UserNotFoundException;
use App\Entities\Record\Record;
use App\Entities\Record\RecordRepository;
use Psr\Log\LoggerInterface;

class SheetbaseRepository implements RecordRepository
{

    /**
     * @var SheetbaseInterface
     */
    protected $sheetbase;

    /**
     * InMemoryUserRepository constructor.
     *
     * @param array|null $users
     */
    public function __construct(
        SheetbaseInterface $sheetbase
    ) {
        $this->sheetbase = $sheetbase;
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        return array_values($this->users);
    }

    /**
     * {@inheritdoc}
     */
    public function findUserOfId(int $id): Record
    {
        if (!isset($this->users[$id])) {
           # throw new UserNotFoundException();
        }

        return $this->users[$id];
    }
}
