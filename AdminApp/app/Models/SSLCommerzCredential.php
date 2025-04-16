<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SSLCommerzCredential extends Model
{
    protected $table = "SSLCommerz_credential";

    protected $fillable = [
        'store_id',
        'store_password',
        'currency',
        'success_url',
        'file_url',
        'cancel_url',
        'ipn_url',
        'init_url'
    ];
}
