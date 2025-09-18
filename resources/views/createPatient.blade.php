<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>FollowUp | Ajouter un patient</title>
</head>
<body>
    @include('components/header')
    <main class="mainCreatePatient">
        <form action="{{ url('/patients') }}" method="post">
            @csrf
            <label for="nom">Nom :</label>
            <input type="text" name="nom" required>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" required>
            <label for="dateNaissance">Date de naissance :</label>
            <input type="date" name="dateNaissance" required>
            <label for="lieuNaissance">Lieu de naissance :</label>
            <input type="text" name="lieuNaissance" required>
            <label for="sexe">Sexe :</label>
            <select name="sexe" required>
                <option value="M">M (Masculin)</option>
                <option value="F">F (Feminin)</option>
            </select>
            <label for="poids">Poids :</label>
            <input type="number" name="poids" required>
            <label for="rue">Rue :</label>
            <input type="text" name="rue" required>
            <label for="ville">Ville :</label>
            <input type="text" name="ville" required>
            <label for="codePostal">Code postal :</label>
            <input type="text" name="codePostal" required>
            <button type="submit">Envoyer</button>
        </form>
    </main>
    @include('components/footer')
</body>
</html>
