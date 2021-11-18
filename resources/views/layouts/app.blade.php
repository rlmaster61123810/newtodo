<html>

<head>
    <title>Todo App Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Stackcatas totd Demo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">All Tasks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tasks/create">New Tasks</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class = "container">
       @yield('content')
     </div>

</body>

</html>
