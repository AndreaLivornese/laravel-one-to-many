<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable =['name', 'username_creator','link_github','program_langs','img'];

    public function type(){
        return $this->belongTo(Type::class);
    }
}
