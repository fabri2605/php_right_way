<?php
declare(strict_types=1);

use Ramsey\Uuid\UuidFactory;

class Transaction
{
    public $id;
    private $status;
    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'declined';

    private const ALL_STATUS = [
        self::STATUS_PAID => 'Paid',
        self::STATUS_PENDING => 'Pending',
        self::STATUS_DECLINED => 'Declined',
    ];

    public function __construct()
    {
        $idNow = new UuidFactory();
        $this->status = self::STATUS_PENDING;
        $this->id = $idNow->uuid4();
    }

    public function setStatus(string $stat)
    {
        if (!isset(self::ALL_STATUS[$stat])) {
            ini_set('display_errors', 1);

            echo 'bad';
            throw new Exception('Bad parameters!');
        }
        $this->status = $stat;
    }
}