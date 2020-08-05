<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers =[
            '0'=>[
                'id'=>0,
                'name'=>'customer1',
                'bod'=>'1998-09-01',
                'email'=>'cuong1@gmail.com',
                'role'=>'1'
            ],
            '1'=>[
                'id'=>1,
                'name'=>'customer3',
                'bod'=>'1998-09-01',
                'email'=>'cuong3@gmail.com',
                'role'=>'2'
            ],
            '2'=>[
                'id'=>2,
                'name'=>'customer4',
                'bod'=>'1998-09-01',
                'email'=>'cuong4@gmail.com',
                'role'=>'1'
            ],
            '3'=>[
                'id'=>3,
                'name'=>'customer5',
                'bod'=>'1998-09-01',
                'email'=>'cuong5@gmail.com',
                'role'=>'1'
            ],
            '4'=>[
                'id'=>4,
                'name'=>'customer6',
                'bod'=>'1998-09-01',
                'email'=>'cuong6@gmail.com',
                'role'=>'2'
            ]
        ];
        return view('customers.list', compact('customers'));
    }
    public function edit($id)
    {
        echo $id;
    }
}
