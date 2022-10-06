<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <title>Form</title>
</head>

<body>
    <form action="thank.php" method="post">
        <h1 id="form">Form</h1>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <span class="error">*</span>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <span class="error">*</span>
        </div>
        <div>
            <label for="courriel">E-mail :</label>
            <input type="email" id="email" name="email" required>
            <span class="error">*</span>
        </div>
        <div>
            <label for="telephone">Télephone :</label>
            <input type="telephone" id="telephone" name="telephone" required>
            <span class="error">*</span>
        </div>
        <div>
            <label for="sujet">Sujet</label>
            <select id="sujet" name="sujet" required>
                <option selected>--choisir--</option>
                <option>Bruit trop fort</option>
                <option>Problème de travail</option>
                <option>Retard au travail</option>
                <span class="error">*</span>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
            <span class="error">*</span>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>

    </form>
</body>

</html>