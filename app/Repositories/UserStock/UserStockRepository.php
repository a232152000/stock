<?php

namespace App\Repositories\UserStock;

use App\Models\stock\Stock;
use App\Models\stock\UserStock;
use App\Models\User;

class UserStockRepository
{

    public function list($userId, $search, $paginate, $sort)
    {
        return UserStock::with('stock')
            ->where('user_id', $userId)
            ->when(
                $search,
                function ($query) use ($search) {
                    $query->where('code', 'like', "%{$search}%")
                        ->orWhere('n', 'like', "%{$search}%");
                }
            )
            ->orderBy($sort['sort'], $sort['direction'])
            ->paginate($paginate['perPage'], ['*'], 'page', $paginate['page']);
    }
}