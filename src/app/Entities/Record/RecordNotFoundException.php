<?php
declare(strict_types=1);

namespace App\Domain\User;

use App\Domain\DomainException\DomainRecordNotFoundException;

class RecordNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The user you requested does not exist.';
}
