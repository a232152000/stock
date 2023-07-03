<?php

namespace App\Http\Controllers\UserStock;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStock\IndexRequest;
use App\Http\Resources\UserStock\IndexResource;
use App\Services\UserStock\UserStockService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct(
      private readonly UserStockService $userStockService
    ){
    }
    public function __invoke(IndexRequest $request)
    {
        $data = $request->validated();

        $userId = $request->user()->id;

        $list = $this->userStockService->list(
            $userId,
            data_get($data, 'search', null),
            [
                'page' => data_get($data, 'page', 1),
                'perPage' => data_get($data, 'perPage', 10),
            ],
            [
                'sort' => data_get($data, 'sort', 'created_at'),
                'direction' => data_get($data, 'direction', 'desc'),
            ]
        );

        return IndexResource::make($list);
    }
}
