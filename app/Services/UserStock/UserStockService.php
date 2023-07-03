<?php

namespace App\Services\UserStock;

use App\Repositories\UserStock\UserStockRepository;

class UserStockService
{
    public function __construct(
        private readonly UserStockRepository $userStockRepository,
    ) {
    }

    public function list($userId, $search, $paginate, $sort)
    {
        return $this->userStockRepository->list($userId, $search, $paginate, $sort);
    }
}
