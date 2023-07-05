
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <form action="/edit/{{$users->id}}" method="POST">
        <input type="hidden" name="_token" value="B72RAzfTCY60yRv8kxscnKCabChKGqSOQbS3FO0n">        <!--  -->

         <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$users->name}}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$users->email}}">
        </div>





        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="text" name="birthday" id="birthday" class="form-control" value="{{$users->birthday}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Giới tính</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Nam" id="genderNam">
                <label class="form-check-label" for="genderNam">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Nữ" id="genderNu">
                <label class="form-check-label" for="genderNu">Nữ</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="phonenumber" class="form-label">Phonenumber</label>
            <input type="text" name="phonenumber" id="phonenumber" class="form-control" value="{{$users->phonenumber}}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{$users->address}}" required>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
        @csrf
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
