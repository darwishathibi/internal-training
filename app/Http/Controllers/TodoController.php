<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Impl\QrCodeService;
use App\Services\IQrCodeService;


class TodoController extends Controller
{
    //
    private IQrCodeService $qr;
    public function __construct(QrCodeService $qr){
        $this->qr = $qr;
    }
    public function index(Request $request){
        return view('todo.index', ['req' => $this->qr->generateQrCode('Hello World')]); //return a template
    }
}
