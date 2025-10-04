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
        <form action="{{ route('patient.form.post') }}" method="post">
            @csrf
            <div class="patientFormDiv">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" placeholder="NOM" required>
            </div>
            <div class="patientFormDiv">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" placeholder="Prénom" required>
            </div>
            <div class="patientFormDiv">
                <label for="dateNaissance">Date de naissance :</label>
                <input type="date" name="dateNaissance" required>
            </div>
            <div class="patientFormDiv">
                <label for="lieuNaissance">Lieu de naissance :</label>
                <input type="text" name="lieuNaissance" placeholder="Lieu de Naissance" required>
            </div>
            <div class="patientFormDiv">
                <label for="sexe">Sexe :</label>
                <select name="sexe" required>
                    <option value="M">M (Masculin)</option>
                    <option value="F">F (Feminin)</option>
                </select>
            </div>
            <div class="patientFormDiv">
                <label for="poids">Poids :</label>
                <input type="number" name="poids" placeholder="Poids (Kg)" required>
            </div>
            <div class="patientFormDiv">
                <label for="rue">Rue :</label>
                <input type="text" name="rue" placeholder="N° + Rue" required>
            </div>
            <div class="patientFormDiv">
                <label for="ville">Ville :</label>
                <input type="text" name="ville" placeholder="Ville" required>
            </div>
            <div class="patientFormDiv">
                <label for="codePostal">Code postal :</label>
                <input type="text" name="codePostal" placeholder="Code postal" required>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </main>
    @include('components/footer')
</body>
</html>
