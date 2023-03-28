<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'message'];

    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            
            //Mail::to($adminEmail)->send(new ContactMail($item));
            Mail::to($item->email)->send(new ContactMail($item));
        });
    }
}
