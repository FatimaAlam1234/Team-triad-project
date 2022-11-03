<?php

namespace App\Http\Controllers\Employee;

use App\Holiday;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SelfController extends Controller
{
    public function holidays() {
        $data = [
            'holidays' => Holiday::all()
        ];

        return view('employee.self.holidays')->with($data);
    }

}
