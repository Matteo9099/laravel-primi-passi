<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
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
                        <li class="nav-item me-4">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active" href="#">Profilo</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link active" href="#">Progetti</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Contatti</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--  /header -->
    
    <!-- main -->
    <div class="container marketing py-5 m-auto">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h3>{{ $name[0] }} {{ $lastname[0] }}</h3>
                <p>{{ $paragraph }}</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>

            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h3>{{ $name[1] }} {{ $lastname[1] }} </h3>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>

            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h3>{{ $name[2] }} {{ $lastname[2] }} </h3>
                <p>{{ $paragraph }}</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
        </div>
    </div>

    


</body>
</html>