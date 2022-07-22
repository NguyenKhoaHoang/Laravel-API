<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\v2\CustomerCollection;
use App\Http\Resources\v2\CustomerResource;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }
}
