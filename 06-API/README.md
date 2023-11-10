# Process de création du projet

## initialisation

```shell
composer init
```

## Modifier le nameSpace

Dans le fichier `composer.json`, Modifier le namespace

```json
"autoload": {
    "psr-4": {
        "App\\": "src/"
    }
},
```

Valider le namespace :

```shell
composer dump-autoload
```

## Initialiser `GIT`

Initialisation de Git

```shell
git init
```

Ajout du fichier `.gitignore`,

Puis faire le commit initial

```shell
git add *
git commit -m "initial commit"
```

Création du depot GitHub (voir procedure sur GitHub)

Puis liaison du depot GitHub au projet local

```shell
git remote add origin https://github.com/<user>/<project>.git
git push --set-upstream origin master
```

Exemple:

```shell
git add *;git commit -m "-";git push
git add * && git commit -m "-" && git push
```

## Creation des répertoire de l'application

```txt
- config; element de config de l'app
- public; DocumentRoot de l'app
- caches; stock le cache de l'app
- utils;
- tests; pour les tests unitaire
- src; source de la partie métier de l'app
- app; source de la base de l'app
```