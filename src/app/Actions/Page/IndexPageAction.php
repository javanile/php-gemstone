<?php
declare(strict_types=1);

namespace App\Actions\Page;

use App\Actions\Action;
use App\Domain\User\RecordRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Log\LoggerInterface;

class IndexPageAction extends Action
{
    /**
     * @var RecordRepository
     */
    protected $recordRepository;

    /**
     * @param LoggerInterface $logger
     * @param RecordRepository $recordRepository
     */
    public function __construct(
        //LoggerInterface $logger,
        RecordRepository $recordRepository
    ) {
        //parent::__construct($logger);
        $this->recordRepository = $recordRepository;
    }

    protected function action(): Response
    {
        $this->response->getBody()->write("Page");

        return $this->response;
    }
}
