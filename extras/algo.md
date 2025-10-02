La cafétéria de l’école propose des sandwichs ronds et carrés pendant la pause déjeuner, respectivement représentés par les nombres 0 et 1. Tous les étudiants se tiennent dans une file. Chaque étudiant préfère soit les sandwichs carrés, soit les sandwichs ronds.

Le nombre de sandwichs disponibles est égal au nombre d’étudiants. Les sandwichs sont empilés en une pile. À chaque étape :

- Si l’étudiant en tête de file préfère le sandwich qui se trouve au sommet de la pile, il le prend et quitte la file.
- Sinon, il laisse le sandwich et va à la fin de la file.
  Ce processus continue jusqu’à ce qu’aucun étudiant dans la file ne veuille prendre le sandwich du haut de la pile ; les étudiants restants sont alors dans l’impossibilité de manger.

On vous donne deux tableaux d’entiers, students et sandwiches, où sandwiches[i] est le type du iᵉ sandwich dans la pile (i = 0 correspond au haut de la pile) et students[j] est la préférence du jᵉ étudiant dans la file initiale (j = 0 correspond au début de la file). Retournez le nombre d’étudiants qui ne peuvent pas manger.

Exemple 1 :

Entrée : students = [1,1,0,0], sandwiches = [0,1,0,1]
Sortie : 0
Explication :

- L’étudiant en tête laisse le sandwich du haut et retourne en fin de file ⇒ students = [1,0,0,1].
- L’étudiant en tête laisse le sandwich du haut et retourne en fin de file ⇒ students = [0,0,1,1].
- L’étudiant en tête prend le sandwich du haut et quitte la file ⇒ students = [0,1,1] et sandwiches = [1,0,1].
- L’étudiant en tête laisse le sandwich du haut et retourne en fin de file ⇒ students = [1,1,0].
- L’étudiant en tête prend le sandwich du haut et quitte la file ⇒ students = [1,0] et sandwiches = [0,1].
- L’étudiant en tête laisse le sandwich du haut et retourne en fin de file ⇒ students = [0,1].
- L’étudiant en tête prend le sandwich du haut et quitte la file ⇒ students = [1] et sandwiches = [1].
- L’étudiant en tête prend le sandwich du haut et quitte la file ⇒ students = [] et sandwiches = [].
  Ainsi, tous les étudiants peuvent manger.

Exemple 2 :

Entrée : students = [1,1,1,0,0,1], sandwiches = [1,0,0,0,1,1]
Sortie : 3

Contraintes :

1 <= students.length, sandwiches.length <= 100
students.length == sandwiches.length
sandwiches[i] est 0 ou 1.
students[i] est 0 ou 1.
\*/
