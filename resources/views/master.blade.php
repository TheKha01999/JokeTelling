<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="header">
        <nav class="container d-flex justify-content-between">
            <img class="nav-image" src="{{ asset('assets/client/images/logo.png') }}" alt="logo">
            <div class="d-flex align-items-center">
                <div class="text-end">
                    <p class="author author-by text-muted">Handicrafted by</p>
                    <p class="author">Jim HLS</p>
                </div>
                <img class="nav-image" src="{{ asset('assets/client/images/avatar.png') }}" alt="">
            </div>
        </nav>
    </header>

    <section class="title-section">
        <div class="text-center py-5 container" style="color: #fff">
            <h1 class="title">A joke a day keeps the doctor away</h1>
            <p class="serious">If you joke wrong way, your teath have to pay. (Serious)</p>
        </div>
    </section>

    @yield('content')


    <section class="footer-section">
        <div class="text-center container ">
            <p class="text-muted">This website is created as a part of Hisolutions program. This
                material
                contained
                on
                this website are
                provide for general information only and do not consitute any form of advice. HLS assumes no
                responsibility for the accuracy of any particular statement and accepts no liability for any loss or
                damage which may arise from reliance on the information contained on this site</p>


            <p class="mt-2 copyright">Copyright 2021 HLS</p>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
