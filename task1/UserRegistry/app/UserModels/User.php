<?php

namespace App\UserModels;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
   // protected $guarded = ['id'];
    protected $fillable = ['name', 'surname','email','position'];

//     public function saveUser($data)
// {
        
//         $this->name     = $data['name'];
//         $this->surname  = $data['surname'];
//         $this->email    = $data['email'];
//         $this->position = $data['position'];
//         $this->save();
//         return 1;
// }
}
