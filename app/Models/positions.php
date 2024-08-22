<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positions extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
}
