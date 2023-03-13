<?php
declare(strict_types=1);

namespace App\PaymentGateway\Paddle\Transaction;

class Transaction
{
    public $STATUS_PAID;
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'declined';

    public function __construct($STATUS_PAID)
    {
        echo 'hi';
        $this->STATUS_PAID = $STATUS_PAID;
    }
}

?>