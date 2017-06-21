# Challenge PHP.

Le but de ce challenge est de vous faire travailler les tableaux et les différents méthodes communément utilisées lorsque vous travaillez avec ceux-ci.

Tous les exercices ici présents ont 3 niveaux de difficultés :
- **1er niveau** : Vous choississez les valeurs du ou des tableaux. Chaque tableau compte 2 à 3 valeurs.
- **2ème niveau** : Les tableaux sont créés par nous (mis au début de l'exercice). Vous avez moins de marge de manoeuvre et des pièges peuvent être glissés dans les tableaux.
- **3ème niveau**: Les utilisateurs peuvent rentrer les valeurs au choix. Attention, nous chercherons volontairement les cas particuliers si vous faîtes le choix de ce niveau difficulté. Imaginez que votre code passe au peloton d'éxecution par la suite, alors soyez sûr de qu'il soit à l'épreuve des balles lorsque vous rendez, #unit_testing.

L'attendu absolu de ce challenge est que vous réussissiez tous les exercices au 1er niveau. Les autres niveaux sont en bonus pour ceux qui ont peur de s'ennuyer ce WE. Ne soyez pas trop gourmands. 

Merci de spécifier votre choix de niveau en commentaire de l'exercice, et faîtes en sorte que l'affichage des résultats soit lisible et compréhensible pour nous :
- séparation des exercices (saut de ligne, affichage du titre de l'exercice etc...)
- Une phrase pour expliciter le résultat. Exemple : au lieu d'avoir "*votre résultat*" sans aucune info supplémentaire, favorisez une sortie du style "le nombre de fruit est " "*votre résultat*".
- Pour ceux qui ont vraiment rien à faire ce week-end, vous pouvez même styliser votre page avec du CSS (rendu profesionnel et sobre SVP, pas de mauvais goût, ce challenge peut finir dans votre portfolio pro).

La réponse attendus pour chaque exercice est une fonction, recevant en paramètre d'entrée un tableau.
Exemple : 
```
    function getLongestItem(Array $tab){
        // Votre code ici
    }
```
Maintenant, place aux exercices et bon courage !

## Exercice 1

Un algo pour créer un tableau associatif à partir de deux autres tableaux.

Tableau formateurs : 
$cuissons : ["à point", "saignant", "bleu", "bien cuit"];
$viandes : ["poulet", "boeuf", "mouton"];

Exemple de rendu :
$commandes : ["poulet à point", "poulet saignant", "poulet bleu", etc... ]

## Exercice 2

Un algo pour transformer une chaine de caractères en tableau 

Phrase formateurs : 
$genres : "horreur fantastique action western thriller comédie drame romance historique";

Exemple de rendu :
$tags : ["horreur", "fantastique", "action", "western", etc...] 

## Exercice 3

Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau

Tableau formateur : 
$fruits : ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];

Exemple de rendu :
$fruits_favoris : ["noix de coco", "ananas"];

## Exercice 4

Un algo pour supprimer la valeur "milieu" d'un tableau

Tableau formateur :
$prenoms : ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];

Exemple de rendu :
$prenoms : ["Harry", "Hilary", "Hagrid", "Holmes"];

## Exercice 5 

Un algo pour trouver la chaine de charactères la plus longue d'un tableau

Tableau formateur :
$phrase : ["ah...", "encore un beau dimanche", "de perdu", "cloitré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrais ?", "alors courage !"];

Exemple de rendu
$plus_longue_phrase : " vous avez signé pour ça pas vrais ?"

## Exercice 6 (attention, on monte d'un cran)

Un algo pour modifier les valeurs d'un tableau de façon systèmatique

Tableau formateur :
$portables : ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];

Exemple de rendu:
$portables : ["+33612459623", "+33645896235", "+33678145263", "+33647895263", "+33655069912"];

## Exercice 7 (le bourreau du week-end)

Un algo pour trouver le nombre d'occurence d'une lettre dans un tableau 

Tableau formateur :
$sadisme : ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];

Exemple rendu : 
$occurrence_lettre_h : 14;

# Bon week-end :D 

![gambatte](images/gambatte.jpg-large)
