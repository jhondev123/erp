<?php

namespace Domain\Enums;

enum PaymentStatus:string
{
    case PENDING = 'pending';
    case PAID = 'paid';
    case CANCELED = 'canceled';

}
