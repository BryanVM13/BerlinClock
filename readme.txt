### Berlin Clock Kata #
Pour cette exercice on a travaillé en partage d'écran sur teams, on a travaillé sur un pc et on utilisé la fonctionnalité controle d'écran.
Chacun à son tour à développé les tests et fonctionnalités grâce au controle à distance de l'écran.
On a créer trois méthodes nous permettant de récupérer les heures, les minutes et les secondes qu'on à tester grâce à des test unitaires.

Pour un format d'heure de  HH:MM:SS on utilise le délimiteur ":" afin de séparer les heures, minutes et secondes.
getHours() / getMinutes() / getSecondes
Afin d'obtenir une seule fois l'heure actuel nous avons était obligé de stocké l'heure actuel dans une variable tout à la fin.

Nous utilisons les lettres suivants pour définir les couleurs des lampes :
Y = Lampe jaune allumer
R = Lampe rouge allumer
O = Lampe éteint

On a écrit des test unitaires dans lesquels on a vérifier les égalités entre differents string afin de savoir si les lampes serait allumer ou éteint.
Donc pour chaque ranger (minute simple, minutes de 5, heure simple, heures de 5 et secondes),
nous avons une méthode qui renvoie un string cas par gars que nous avons du implementez après avoir écrit le test unitaire correspondant.

Par exemple, 1 minutes = YOOO = [lampe jaune, lampe éteint, lampe éteint, lample éteint]

Pour afficher l'horloge de berlin nous avons écrits une dernière test unitaire qui appelle une fonction displayBerlinClock();
Nous avons fait en sorte que le test unitaire réussisent à chaque fois. Etant donner que cette méthode effectue juste un printf des élements du tableau contenant l'horloge de berlin.




