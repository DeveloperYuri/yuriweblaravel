<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Request;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    static public function getRecord($request)
    {
        $return = self::select('users.*')
            //->where('status', '=', 'active')
            ->orderBy('id', 'desc');

            if (!empty(Request::get('email'))) {
                $return = $return->where('users.email', 'like', '%' . Request::get('email') . '%');
            }

        $return = $return->paginate(10);
        return $return;
    }

    static public function getSingle($id){
        return self::find($id);
    }

    public function getProfile(){
        if (!empty($this->profile_pic) && file_exists('storage/profile/'.$this->profile_pic)) {
            return url('storage/profile/'.$this->profile_pic);
        }
        else {
            return url('assets/img/profile-img.jpg');
        }
    }

}
