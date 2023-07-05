
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Ngay sinh</th>
                <th>Gioi tinh</th>
                <th>Sdt</th>
                <th>Dia chi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lops as $lop)
                <tr>
                    <td>{{$lop->id}}</td>
                    <td>{{$lop->name}}</td>
                    <td>{{$lop->email}}</td>
                    <td>{{$lop->birthday}}</td>
                    <td>{{$lop->phonenumber}}</td>
                    <td>{{$lop->address}}</td>
                    <td>
                        <a href="/admin/lop/edit/{{$lop->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <!-- <a class="btn btn-danger" href="#" onclick="Delete({{$lop->id}},'/admin/lop/delete')" ><i class="fa fa-trash"></i></a> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $lops->links() }}
