<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf {{-- csrf = Cross site request forgeries --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->get('name') as $message)
                                <li style="color: red">{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->get('city') as $message)
                                <li style="color: red">{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control" id="marks" name="marks">
                    </div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->get('marks') as $message)
                                <li style="color: red">{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <hr>
                <ul>
                    <li><a href="/about">About</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
