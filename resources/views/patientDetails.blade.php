<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Follow Up | Détails du patient</title>
</head>
<body>
    @include('components/header')
    <main class="mainDetailsPatient">
        <div>
            <p>Nom : {{ $patient->nom }}</p>
            <p>Prenom : {{ $patient->prenom }}</p>
            <p>Date de naissance : {{ $patient->dateNaissance }}</p>
            <p>Lieu de naissance : {{ $patient->lieuNaissance }}</p>
            <p>Sexe : {{ $patient->sexe }}</p>
            <p>Poids : {{ $patient->poids }} Kg</p>
            <p>Rue : {{ $patient->rue }}</p>
            <p>Ville : {{ $patient->ville }}</p>
            <p>Code postal : {{ $patient->codePostal }}</p>
        </div>
        <div>
            @foreach($incidents as $incident)
                <p>Description : {{ $incident->description }}</p>
                @if($incident->gravite == 1)
                    <p>Gravité : Faible</p>
                @elseif($incident->gravite == 2)
                    <p>Gravité : Moyen</p>
                @else
                    <p>Gravité : Elevé</p>
                @endif
            @endforeach
        </div>
        <div>
            <span class="spanDetailPatient">
                <a href="{{ route('incident.create', $patient->id) }}">Ajouter un incident</a>
            </span>
        </div>
    </main>
    @include('components/footer')
</body>
</html>
