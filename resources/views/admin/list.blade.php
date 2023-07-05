@extends('admin.client')
@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($lops as $lop)
                <tr>
                    <td>{{$lop->id}}</td>
                    <td>{{$lop->name}}</td>
                    <td>{{$lop->email}}</td>
                    <td>{{$lop->birthday}}</td>
                    <td>{{$lop->gender}}</td>
                    <td>{{$lop->phonenumber}}</td>
                    <td>{{$lop->address}}</td>
                    <td>
                        <a href="/edit/{{$lop->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="/delete/{{$lop->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{$lops->links('pagination::bootstrap-4')}}
@endsection
