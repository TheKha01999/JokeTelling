<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>

        <nav class="container d-flex justify-content-between">
            <p>LOGO</p>
            <p>Avatar</p>
        </nav>

    </header>

    <section style="background: #29B363">
        <div class="text-center py-5 container" style="color: #fff"">
            <h1>A joke a day keeps the doctor away</h1>
            <p>If you joke wrong way, your teath have to pay! (Serious)</p>
        </div>
    </section>

    @yield('content')


    <section>
        <div class="text-center container ">
            <p class="text-muted" style="font-size: 15px">This website is created as a part of Hisolutions program. This
                material
                contained
                on
                this website are
                provide for general information only and do not consitute any form of advice. HLS assumes no
                responsibility for the accuracy of any particular statement and accepts no liability for any loss or
                damage which may arise from reliance on the information contained on this site</p>


            <p class="mt-2">Copyright 2021 HLS</p>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
