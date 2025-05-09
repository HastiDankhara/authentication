<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable
{
    use Notifiable;
    protected $table = 'users'; // Specify the table name if it's not 'users'
    public $timestamps = false; // Disable timestamps if not needed
}
