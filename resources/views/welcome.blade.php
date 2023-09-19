@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRVantage - Système de Gestion des Ressources Humaines</title>
    
<body>
    @section('content')
<header class="jumbotron text-center">
    <h1 class="display-4">Bienvenue dans HRVantage</h1>
    <p class="lead">Votre Solution de Gestion des Ressources Humaines</p>
</header>

<main class="container">
    <section id="description">
        <h2 class="mt-5">Description</h2>
        <p>HRVantage est un système complet de gestion des ressources humaines conçu pour simplifier les processus RH, gérer les informations sur les employés et faciliter les opérations RH.</p>
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
@endsection

</body>
</html>
