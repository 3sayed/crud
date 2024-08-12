<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Customer;
use app\Models\orderDetails;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'orderNumber',
        'orderDate',
        'requiredDate',
        'shippedDate',
        'status',
        'comments',
        'customerNumber',
    ];

    //relationships

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerNumber', 'customerNumber');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'orderNumber', 'orderNumber');
    }
}
