<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All data</title>
    <link rel="shortcut icon" href="{{ asset('assets/imgs/Yearex-Group_fav.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            text-align: right;
        }
        .top-left-image {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100px; /* Adjust the size as needed */
            height: auto;
        }
        .card {
            background-color: white;
        }
        .card-header {
            background-color: #fffefe; /* Mauve color */
            color: #df6ac4;
        }
    </style>
</head>
<body >
<header>
    <nav class="navbar bg-dark  navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/imgs/Yearex-Group_fav.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Yearex
            </a>
        </div>
    </nav>
</header>

<div class="container mt-5">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Birth Place</th>
                <th scope="col">Gender</th>
                <th scope="col">Nationality</th>
                <th scope="col">Passport Number</th>
                <th scope="col">passport Type</th>
                <th scope="col">Passport Date</th>
                <th scope="col">passport Expire Date</th>
                <th scope="col">Status</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $d)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $d->first_name . " " . $d->last_name }}
                    </td>

                    <td>
                        {{ $d->birth_date->format("Y M d")  }}
                    </td>

                    <td>
                        {{ $d->birth_place  }}
                    </td>

                    <td>
                        {{ $d->gender  }}
                    </td>

                    <td>
                        {{ $d->nationality  }}
                    </td>

                    <td>
                        {{ $d->passport_number  }}
                    </td>

                    <td>
                        {{ $d->passport_type  }}
                    </td>

                    <td>
                        {{ $d->passport_date }}
                    </td>

                    <td>
                        {{ $d->passport_expire_date }}
                    </td>

                    <td>

                        @if($d->status == \App\Models\Data::STATUS_UNDER_REVIEW)
                            <p class="text-info">
                                 الطلب تحت المراجعة
                            </p>
                        @elseif($d->status == \App\Models\Data::STATUS_APPROVED)
                            <p class="text-primary">
                                تم الموافقة علي الطلب
                            </p>
                        @elseif($d->status == \App\Models\Data::STATUS_REJECTED)
                            <p class="text-danger">
                                تم رفض الطلب
                            </p>
                        @endif

                    </td>

                    <td>
                        <a href="{{ route("data.show" , $d->id) }}" class="btn btn-primary btn-sm"> معرفة التفاصيل</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div> <!-- End container -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('Message'))

    <script>

        toastr.options ={
            "progressBar" :true,
            "closeButton" :true,
        }

        toastr.info("{{ Session::get('Message') }}");
    </script>

@endif



@if(Session::has('Reject'))

    <script>

        toastr.options ={
            "progressBar" :true,
            "closeButton" :true,
        }

        toastr.error("{{ Session::get('Reject') }}");
    </script>

@endif

</body>
</html>
