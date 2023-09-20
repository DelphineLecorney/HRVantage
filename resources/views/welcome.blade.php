<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>HRVantage - Système de Gestion des Ressources Humaines</title>
    
<body>
<header class="jumbotron text-center">
    <h1 class="display-4">Bienvenue sur HRVantage</h1>
    <p class="lead">Votre Solution de Gestion des Ressources Humaines</p>
</header>

<main class="container">
    <section id="description">
        <h2 class="mt-5">Description</h2>
        <p>HRVantage est un système complet de gestion des ressources humaines conçu pour simplifier les processus RH, gérer les informations sur les employés et faciliter les opérations RH.</p>
        <p>Vous pouvez vous inscrire pour accéder à plus de fonctionnalités.</p>
        <a class="btn btn-outline-success" href="{{ route('register') }}">S'inscrire</a>
    
    </section>

    <section id="features">
        <h2 class="mt-5">Fonctionnalités</h2>
        <ul class="list-group">
            <li class="list-group-item">Gestion des employés</li>
            <li class="list-group-item">Gestion des postes</li>
            <li class="list-group-item">Gestion des avantages sociaux</li>
        </ul>
    </section>
</main>
<footer class="footer mt-auto py-3 bg-light">
    <div class="justify-content-end text-center">
        <p>&copy; 2023 HRVantage. Tous droits réservés.</p>
    </footer>

</body>
</html>
