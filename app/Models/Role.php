<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesCache;

class Role extends Model
{
    use HasFactory, UsesCache;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected array $guarded = ['id', 'created_at', 'updated_at',];

    /**
     * @return Role[]|Collection
     */
    final public function getRoles()
    {
        return $this->all();
    }

    /**
     * @param array $data
     * @return Model|Role
     */
    final public function createRole(array $data): Model|Role
    {
        $this->clearCache();
        return $this->newQuery()->create($data);
    }

    /**
     * @param array $data
     * @return bool
     */
    final public function updateRole(array $data): bool
    {
        $this->clearCache();
        return $this->update($data);
    }

    final public function deleteRole(): void
    {
        $this->clearCache();
        $this->delete();
    }

}
