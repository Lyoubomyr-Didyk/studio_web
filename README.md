# <p style='color: #31d0aa'>Studio_web</p>

current page
```html
<a class="menu-link link <?php echo ($_SERVER['PHP_SELF'] == '/studio_web/index.php') ? 'current' : ''; ?>" href="index.php">Studio</a>
```


Question 1

Comment chercher le mot "drupal" dans le contenu des fichiers du répertoire courant ?

Your answer	Choix


~# grep drupal *
Sélectionné


~# ls | grep drupal


~# which drupal *


~# find drupal *
Question 2

Quelle action est déclenchée par la commande "rm -Rf *" ?

Your answer	Choix


Delete all files in current directory


Means "Remove month" in the calendar


Delete all files in the current directory and subdirectories recursively without asking for confirmation
Sélectionné


Delete all files in the current directory and subdirectories recursively and asking for confirmation
Question 3

La commande "export MYVAR=TRUE" permet d'initialiser la variable d'environnement MYVAR à TRUE

Your answer	Choix
Sélectionné
True
False
Question 4

Un fichier .rpm ou .deb représente un package 'Linux'

Your answer	Choix
Sélectionné
True
False
Question 5

Comment effacer une ligne avec l'éditeur 'vi'

Your answer	Choix


d


del
Sélectionné


dd


delete
Question 6

La commande "find . -name test* -print" permet

Your answer	Choix
Sélectionné


Search for all files starting with 'test' in the current directory and its subdirectories




Search for the string 'test' in the "vi" text editor


To find the character string 'print' in all files
Question 7

Comment ajouter le droit d’exécution à l'utilisateur propriétaire du fichier 'file.txt'

Your answer	Choix


~# chown execute file.txt
Sélectionné


~# chmod u+x file.txt


~# chown -x file.txt


~# chmod u-x file.txt
Question 8

En PHP, comment coder l'affichage de la chaîne Hello World

Your answer	Choix


<?php Document.Write("Hello World"); ?>
Sélectionné


<?php echo "Hello World"; ?>


<?php "Hello World"; ?>
Question 9

En PHP, toutes les variables commencent par

Your answer	Choix
Sélectionné


$


!


&
Question 10

En PHP, comment définit-on une fonction ?

Your answer	Choix


create myFunction() {}
Sélectionné


function myFunction() {}


new_function myFunction() {}
Question 11

En PHP, a-t-on le droit de déclarer un tableau de la façon suivante :

<?php

  $CEOV["Age"] = 11;
  $CEOV["Adresse"] = "Technopole d'Archamps - Alliance porte A, 178, rue des Frères Lumière, 74160 Archamps";
  $CEOV["Nom"] = "CEO-Vision";

?>

Your answer	Choix
True
Sélectionné
False
Question 12

Dans une page HTML, le fragment de code ci-dessous permet d'afficher un texte avec une plus grande police de caractère

<div class="large">Ceci est un table d'exemple.</div>

Your answer	Choix
Sélectionné


It all depends on the content of the CSS style sheet


True


False
Question 13

En PHP Objet, "echo $myclass->attribute;" permet

Your answer	Choix
Sélectionné


display the value returned by the 'attribute' function of the 'myclass' object


display the value of the 'attribute' variable of the 'myclass' object
Question 14

Quel est le rôle d'un outil comme SVN ou GIT ?

Your answer	Choix


Allow to document a bug


Allow to perform non-regression tests
Sélectionné


Allow among other things to manage its source code and to return to an older version of its sources
Question 15

En SQL, quelle expression retourne des valeurs uniques

Your answer	Choix
Sélectionné


SELECT DISTINCT


SELECT UNIQUE


SELECT DIFFERENT
Question 16

En SQL, quelle expression permet de retourner tous les enregistrements d'une table "Persons" dont le "Firsname" commence par "a" ?

Your answer	Choix


SELECT * FROM Persons WHERE FirstName LIKE '%a'


SELECT * FROM Persons WHERE FirstName='%a%'
Sélectionné


SELECT * FROM Persons WHERE FirstName LIKE 'a%'


SELECT * FROM Persons WHERE FirstName='a'
Question 17

En SQL, comment changer "Hansen" par "Nilsen" dans la colonne "LastName" de la table Persons ?
Your answer	Choix
Your answer	Choix
Sélectionné


UPDATE Persons SET LastName='Nilsen' WHERE LastName='Hansen'


UPDATE Persons SET LastName='Hansen' INTO LastName='Nilsen'


MODIFY Persons SET LastName='Hansen' INTO LastName='Nilsen


MODIFY Persons SET LastName='Nilsen' WHERE LastName='Hansen'
Question 18

SOAP, XML-RPC et REST sont-ils tous les trois des protocoles de WebServices ?

Your answer	Choix
Sélectionné
True
False