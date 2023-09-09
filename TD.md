# Méthodes GET et POST 
* La méthode GET


La méthode GET envoie directement les données au serveur en les écrivant dans l'URL comme par exemple : www.example.com/register.php?firstname=peter&amp;name=miller&amp;age=55&amp;gender=male.

Toutes les informations sont ainsi publiées librement, cela a des avantages comme des inconvénients. 

Les avantages de cette méthode sont que les paramètres de l’URL peuvent être enregistrés avec l’adresse du site Web, cela permet de récupérer une requête en marque page et si besoin dans l'historique de navigation mais aussi d'enregistrer des pages Web contenant certains paramètres de filtrage et de tri. 

Le principal inconvénient est l'absence de protection des données car les paramètres URL envoyés sont visibles par tous mais aussi parce que les données sont stockées sans chiffrement dans l'historique. 

L'autre inconvénient est sa capacité limitée mais aussi le fait que ces paramètres ne sont que des caractères ASCII tels que des chiffres, lettres et caractères spéciaux et non des données binaires telles que fichiers audio ou vidéo. 

* La méthode POST

La méthode POST écrit les paramètres URL dans la requête HTTP pour le serveur. Les paramètres ne sont ainsi pas visibles pour les utilisateurs et la portée des requêtes POST est illimitée.

** Les avantages de la méthode POST
La confidentialité, par exemple, lors de l'envoi d'un formulaire contenant des données sensibles, tels qu'un mdp et un login, à un serveur, ceux-ci ne seront pas visibles par tous.

Les données ne sont pas retrouvables dans l'historique de navigation non plus car elles ne sont pas mises en cache. 
La flexibilité de cette méthode est importante aussi car on peut y transmettre des données de toute taille et de tout type (vidéos, photos).

** Les incovénients de la méthode POST



