<?php

namespace App\Models;

use App\Models\OptionJoki;
use App\Models\PaymentDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Crypt;

class JokiRank extends Model
{
    use HasFactory;

    protected $table = 'joki_ranks';

    protected $fillable = ['invoice_code', 'email', 'password', 'id_and_nick', 'login_via', 'select_joki', 'star_order', 'whatsapp', 'payment', 'price', 'payment_expiry'];

    public function paymentDetails()
    {
        return $this->hasOne(PaymentDetail::class);
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Crypt::encrypt($value);
    }

    public function getPasswordAttribute($value)
    {
        return Crypt::decrypt($value);
    }
}
