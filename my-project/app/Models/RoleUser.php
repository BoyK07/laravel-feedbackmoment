<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;

    // Dit is de standaard tabelnaam die overeenkomt met de many-to-many relatie
    protected $table = 'role_user';

    // Geef aan welke velden massa-assignable zijn
    protected $fillable = [
        'user_id',
        'role_id',
    ];

    // De relatie met het User model (deze is omgekeerd naar de User via RoleUser)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // De relatie met het Role model (deze is omgekeerd naar de Role via RoleUser)
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
