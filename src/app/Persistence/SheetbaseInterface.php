<?php
declare(strict_types=1);

namespace App\Persistence;

interface SheetbaseInterface
{
    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key = '');
}