<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>HRVantage - Human Resources Management System</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          HRVantage
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Home</a>
          <a class="nav-link" href="{{ route('employee') }}">Employee</a>
          <a class="nav-link" href="{{ route('position') }}">Position</a>
          <a class="nav-link" href="{{ route('recruitment') }}">Recruitment</a>
          <a class="nav-link" href="{{ route('socialbenefit') }}">Social Benefit</a>
          <a class="nav-link" href="{{ route('termination') }}">Termination</a>
          <a class="nav-link" href="{{ route('training') }}">Training</a>
          <a class="nav-link" href="{{ route('vacation') }}">Vacation</a>

          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>

        <form class="d-flex">
          <a class="btn btn-outline-success" href="{{ route('login') }}">Logout</a>
        </form>
    </div>
  </div>
</nav>
    </header>
    <main class ="min-vh-100">
        @yield('content')
    </main>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="justify-content-end text-center">
            <p>&copy; 2023 HRVantage. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>