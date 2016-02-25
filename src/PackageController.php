<?php

namespace Mr\Hoang;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function index(){
//        
//      return view("Mr\Hoang\views\package");
        // để gọi đến file trong thư mục đó ta dùng tên file sau dấu 2 chấm.
        return view("package::package");

        
    }
}
