<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class private_registration extends Model
{
    use HasFactory;

    protected $table = 'private_registrations'; // Define the table name

    protected $fillable = [
        'contactFirstName',
        'contactLastName',
        'phoneNumber',
        'customerID',
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

    // Optionally, you can define relationships or additional methods specific to UserForm here
}

