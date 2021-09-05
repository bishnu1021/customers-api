<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <section style="padding-top:60px ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add  Infomation
                    </div>
                    <div class="card-body">
                        @if(session()->has('post_created'))
                        <div class="alert alert-success">
                            {{ session()->get('post_created') }}
                        </div>
                    @endif
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="">FullName</label>
                                        <input type="text" name="full_name" placeholder="Full Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Age</label>
                                        <input type="text" name="age" placeholder="Age" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Address</label>
                                        <input type="text" name="address" placeholder="Address" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Coordinate Latitude</label>
                                        <input type="text" name="co_latitude" placeholder="Full Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Coordinate Longitude</label>
                                        <input type="text" name="co_longitude" placeholder="Full Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Contact Number</label>
                                        <input type="text" name="contact_no" placeholder="Full Name" class="form-control">
                                </div>
                                <br>

                                <button type="submit"  class="btn btn-primary">ADD</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
