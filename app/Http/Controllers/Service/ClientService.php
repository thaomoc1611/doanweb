<?php

namespace App\Http\Controllers\Service;

use App\Models\Client;
use App\Models\User;
use PHPUnit\Exception;

class ClientService
{
    public function create($request){
        try {
            Client::create([
                'id'=>$request->input('id'),
                'name'=>$request->input('name'),
                'birthday'=>$request->input('birthday'),
                'gender'=>$request->input('gender'),
                'phonenumber'=>$request->input('phonenumber'),
                'address'=>$request->input('address'),

            ]);
            Session()->flash('success','Thêm mới client thành công');

        }
        catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }
    public function getAll(){
        return User::paginate(10);
    }

    public function edit($user, $request){

        try {

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->birthday = $request->input('birthday');
            $user->gender = $request->input('gender');
            $user->phonenumber = $request->input('phonenumber');
            $user->address = $request->input('address');
            $user->save();
            Session()->flash('success','Chỉnh sửa lớp học thành công');
            return true;
        }
        catch (Exception $ex){
            Session()->flash('error','Chỉnh sửa lớp học KHÔNG thành công');
        }
        return false;
    }
}
