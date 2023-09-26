<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>HRVantage - Human Resources Management System</title>

<body>
    <header class="jumbotron text-center">
        <h1 class="display-4">Welcome to HRVantage</h1>
        <p class="lead">Your Human Resources Management Solution</p>
    </header>

    <main class="min-vh-100">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>

</html>