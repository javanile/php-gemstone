<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use App\Application\Actions\Action;
use App\Domain\User\RecordRepository;
use Psr\Log\LoggerInterface;

abstract class UserAction extends Action
{
    /**
     * @var RecordRepository
     */
    protected $userRepository;

    /**
     * @param LoggerInterface $logger
     * @param RecordRepository $userRepository
     */
    public function __construct(LoggerInterface $logger,
                                RecordRepository $userRepository
    ) {
        parent::__construct($logger);
        $this->userRepository = $userRepository;
    }
}
