<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>HRVantage - Human Resources Management System</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">
          HRVantage
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="nav-link" href="{{ route('employee') }}">Employee</a>
            <a class="nav-link" href="{{ route('position') }}">Position</a>
            <a class="nav-link" href="{{ route('recruitment') }}">Recruitment</a>
            <a class="nav-link" href="{{ route('socialbenefit') }}">Social Benefit</a>
            <a class="nav-link" href="{{ route('termination') }}">Termination</a>
            <a class="nav-link" href="{{ route('training') }}">Training</a>
            <a class="nav-link" href="{{ route('vacation') }}">Vacation</a>
          </div>

          <form class="d-flex ml-auto">
            <a class="btn btn-outline-success" href="{{ route('login') }}">Logout</a>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main class="min-vh-100">
    @yield('content')
  </main>
  <footer class="footer mt-auto py-3 bg-light">
    <div class="justify-content-end text-center">
      <p>&copy; 2023 HRVantage. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>