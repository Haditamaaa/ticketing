<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingTransaction extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'customer_bank_name',
        'customer_bank_account',
        'customer_bank_number',
        'booking_trx_id',
        'proof',
        'quantity',
        'total_amout',
        'is_paid',
        'workshop_id',
    ];

    public static function generateUniqueTrxId()
    {
        $prefix = 'TKTG';
        do {
            $randomString = $prefix . mt_rand(1000, 9999);
        } while (self::where('booking_transaction_id', $randomString)->exists());
        return $randomString;
    }

    public function participants(): HasMany
    {
        return $this->hasMany(WorkshopParticipant::class);
    }

    public function workshop(): BelongsTo
    {
        return $this->belongsTo(Workshop::class);
    }
}