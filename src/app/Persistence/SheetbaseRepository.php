<?php
declare(strict_types=1);

namespace App\Persistence\User;

use App\Domain\User\User;
use App\Domain\User\UserNotFoundException;
use App\Domain\User\UserRepository;
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
        SpreadsheetInterface $sheetbase
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
    public function findUserOfId(int $id): User
    {
        if (!isset($this->users[$id])) {
           # throw new UserNotFoundException();
        }

        return $this->users[$id];
    }
}
