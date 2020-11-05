### Berlin Clock Kata ###
Pour cet exercice, on a travaillé en partage d'écran sur Microsoft teams sur un seul pc et on utilisé la fonctionnalité de controle d'écran.
Chacun à notre tour en changeant toutes les 20 minutes et via la méthode TDD, avons développé les tests et fonctionnalités grâce au controle à distance de l'écran.
Pour ce faire, on a créer trois méthodes nous permettant de récupérer les heures, les minutes et les secondes qu'on à tester grâce à des test unitaires.

Pour un format d'heure de  HH:MM:SS on a utilisé le délimiteur ":" afin de séparer les heures, minutes et secondes.
getHours() / getMinutes() / getSecondes
Afin d'obtenir une seule fois l'heure actuelle nous avons été obligé de stocker l'heure actuelle dans une variable ($currentTime) qui se trouve tout à la fin.

Nous utilisons les lettres suivantes pour définir les couleurs des lampes :
Y = Lampe jaune allumée
R = Lampe rouge allumée
O = Lampe éteinte

On a écrit des test unitaires dans lesquels on a vérifié les égalités entre différentes string afin de savoir si les lampes seraient allumées ou éteintes.
Donc pour chaque ranger (minute simple, minutes de 5, heure simple, heures de 5 et secondes),
nous avons une méthode qui renvoie un string cas par cas et que nous avons implémentés après avoir écrit le test unitaire correspondant.

Par exemple, 1 minutes = YOOO = [lampe jaune, lampe éteinte, lampe éteinte, lample éteinte]

Pour afficher l'horloge de berlin nous avons écrits un dernier test unitaire qui appel une fonction displayBerlinClock();
Nous avons fait en sorte que le test unitaire réussisse à chaque fois. Etant donner que cette méthode effectue juste un printf des élements du tableau contenant l'horloge de berlin.




