<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>HRVantage - Human Resources Management System</title>
<body>
<main class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">{{ __('Register') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('auth.register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('E-mail address') }}</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-light">
    <div class="justify-content-end text-center">
        <p>&copy; 2023 HRVantage. All rights reserved.</p>
    </div>
</footer>
</body>
</html>

