<html>
    <head>
        <title>BOOKSTORE</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        @yield('css')
    </head>
    <body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <h1 style="color:white">Book Store</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="/">Books</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/book/create">Add New Book</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
        <div class="container">
            @yield('content')
        </div>
        @yield('javascript')
    </body>
</html>