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
            <div class="card-header">{{ __('Admin Login') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('auth.login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">{{ __('E-mail address') }}</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember me') }}
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-light">
    <div class="justify-content-end text-center">
        <p>&copy; 2023 HRVantage. All rights reserved.</p>
    </div>
</footer>
</footer>
</body>
</html>

