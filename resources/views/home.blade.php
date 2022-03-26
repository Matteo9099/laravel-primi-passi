<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <!--  header -->
    <header>
        <!-- Header top -->
        <section class="header-top">
            <nav class="navbar navbar-light bg-dark bg-gradient">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="https://laravel.com/img/logotype.min.svg" alt="Logo Laravel" width="100" height="30" class="d-inline-block align-text-top">
                    </a>
                </div>
            </nav>
        </section>
        <!-- Header bottom -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        @foreach ($links as $link)
                            <li class="nav-item me-4">
                                <a class="nav-link active" href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--  /header -->
    
    <!-- main -->
    <main>
        <div class="container py-4 text-center">
            <div class="p-5 mb-4 rounded-3">
                <div class="py-5">
                    <h1 class="display-5 fw-bold">{{ $title }}</h1>
                    <p class="fs-4 my-4">{{ $paragraph }}</p>
                    <blockquote>{{ $name }} {{ $lastname }}</blockquote>
                </div>
            </div>
        </div>
    </main>
    <!-- /main -->

</body>
</html>