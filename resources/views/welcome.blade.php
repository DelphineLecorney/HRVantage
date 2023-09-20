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

<main class="container">

    <section id="description">
        <h2 class="mt-5">Description</h2>
            <p>HRVantage is a comprehensive human resources management system designed to simplify HR processes, manage employee information and facilitate HR operations.</p>
            <p>You can register to access more features.</p>
    </section>

    <section id="features">
        <h2 class="mt-5">Features</h2>
            <ul class="list-group">
                <li class="list-group-item">Employee management</li>
                <li class="list-group-item">Job management</li>
                <li class="list-group-item">Benefits management</li>
                <li class="list-group-item">Training management</li>
                <li class="list-group-item">Vacation management</li>
            </ul>
    </section>    
    
    <section id="description">
        <h2 class="mt-5">Sign in or register</h2>
            <a class="btn btn-outline-success" href="{{ route('register') }}">Registrer</a>
            <a class="btn btn-outline-primary" href="{{ route('login') }}">Sign in</a>  
    </section>
</main>
<footer class="footer mt-auto py-3 bg-light">
    <div class="justify-content-end text-center">
        <p>&copy; 2023 HRVantage. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
