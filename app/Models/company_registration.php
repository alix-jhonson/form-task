<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_registration extends Model
{
    use HasFactory;

    protected $table = 'company_registrations';

    protected $fillable = [
        'companyName',
        'chamberOfCommerce',
        'vatId',
        'phoneNumber',
        'customerId',
        'contactFirstName',
        'contactLastName',
        'address',
        'zipcode',
        'city',
        'country',
        'deliveryMethod',
        'ublVoice',
        'attnForInvoices',
        'emailForInvoice',
        'sendingQuotes',
        'iban',
        'accountName',
        'invoicesWorkflow',
        'quotesWorkflow',
    ];

    // Any additional model methods or relationships can be defined here.
}


