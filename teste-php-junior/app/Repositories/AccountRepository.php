<?php

namespace App\Repositories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class AccountRepository
{
    public function create(array $data): Model|Builder
    {
        return Account::query()->create($data);
    }
    public function findById(string $id ): Model|Collection|Builder|array|null
    {
        return Account::query()->find($id);
    }


}
