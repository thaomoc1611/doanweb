<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Service\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    protected $clientService;
    public function __construct( $clientService)
    {
        $this->clientService = $clientService;
    }

    public function create(){
        return view('admin.client.addclient',[
            'title'=>'Thêm mới client'
        ]);
    }
    public function postcreate(Request $request){
       //dd($request->input());
        $result = $this->clientService->create($request);
        return redirect()->back();
    }
}
