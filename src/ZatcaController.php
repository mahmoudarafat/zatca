<?php

namespace MahmoudArafat\ZATCA;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZatcaController extends Controller
{

    public function add($a, $b){
        $result = $a + $b;
        return $result;
    }

}