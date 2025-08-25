<?php

namespace App\Services\Interfaces;

/**
 * Interface LecturerServiceInterface
 * @package App\Services\Interfaces
 */
interface LecturerServiceInterface 
{
    public function paginate($request);
    public function create($request);
}
