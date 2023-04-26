<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-5"> Product </h1>
    <div class="container">
        <div class="row">

            @foreach ($DataShow as $data )
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card">
                        <img src="images/{{ $data->img }}" alt="">
                        <h1 class="text-center"> {{ $data->title }} </h1>
                        <h3 class="text-center">  {{ $data->price }} </h3>
                        <p class="text-center"> {{ $data->sub_title }} </p>
                       
                        <a href="{{ route("product.Delete",$data->id) }}"> Delete </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</body>
</html>



