<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FollowUp | Patients</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="sectionTitlePatient">
        <h1>Liste des patients :</h1>
    </section>
    <div class="containerGridPatient">
        <section class="sectionGridPatient">
            @foreach($patients as $patient)
                <div class="blockInfoPatient">
                    <p>Nom : {{ $patient->nom }}</p>
                    <p>Prenom : {{ $patient->prenom }}</p>
                    <p>Date de naissance : {{ $patient->dateNaissance }}</p>
                    <p>Lieu de naissance : {{ $patient->lieuNaissance }}</p>
                    <p>Sexe : {{ $patient->sexe }}</p>
                    <p>Poids : {{ $patient->poids }}</p>
                    <p>Rue : {{ $patient->rue }}</p>
                    <p>Ville : {{ $patient->ville }}</p>
                    <p>Code postal : {{ $patient->codePostal }}</p>
                </div>
            @endforeach
        </section>
    </div>
    <a href="{{ url('/') }}">Retour</a>
</body>
</html>
