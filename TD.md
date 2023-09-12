# 1. Méthodes GET et POST 
## La méthode GET

La méthode GET envoie directement les données au serveur en les écrivant dans l'URL comme par exemple : www.example.com/register.php?firstname=peter&amp;name=miller&amp;age=55&amp;gender=male.

Toutes les informations sont ainsi publiées librement, cela a des avantages comme des inconvénients. 

### Les avantages de la méthode GET

Les paramètres de l’URL peuvent être enregistrés avec l’adresse du site Web, cela permet de récupérer une requête en marque page et, si besoin, dans l'historique de navigation. Elle permet aussi d'enregistrer des pages Web contenant certains paramètres de filtrage et de tri. 

### Les inconvénients de la méthode GET

L'absence de protection des données car les paramètres URL envoyés sont visibles par tous mais aussi parce que les données sont stockées sans chiffrement dans l'historique. L'autre inconvénient est sa capacité limitée ainsi que ces paramètres qui ne sont que des caractères ASCII tels que des chiffres, lettres et caractères spéciaux et non des données binaires telles que fichiers audio ou vidéo. 

## La méthode POST

La méthode POST écrit les paramètres URL dans la requête HTTP pour le serveur. Les paramètres ne sont ainsi pas visibles pour les utilisateurs et la portée des requêtes POST est illimitée.

### Les avantages de la méthode POST

La confidentialité, par exemple, lors de l'envoi d'un formulaire contenant des données sensibles, tels qu'un mdp et un login, à un serveur, ceux-ci ne seront pas visibles par tous. Les données ne sont pas retrouvables dans l'historique de navigation non plus car elles ne sont pas mises en cache. La flexibilité de cette méthode est importante aussi car on peut y transmettre des données de toute taille et de tout type (vidéos, photos).

### Les incovénients de la méthode POST

Si une page Web est mise à jour avec un formulaire dans le navigateur, par exemple, en utilisant le bouton « Précédent » / « Retour », les données doivent être de nouveau soumises. Il existe donc un risque que les données soient envoyées plusieurs fois par inadvertance, ce qui peut déclencher des commandes en double par exemple. De plus, les données transmises par la méthode POST ne peuvent pas être sauvegardées sous forme de marque-page avec l’URL.

![Image](https://2.bp.blogspot.com/-Y3I4eNUzdt0/VFTA2CgINyI/AAAAAAAAU7w/zUYYGUt1Z_4/s1600/difference_between_get_and_post_method.png)

# 2. Comparaison méthodes

|                           |GET                         |POST                      |
|---------------------------|--------------------------- |---------------------------|
|Longueur / type de données|Quantité de données limitée, données ASCII |Quantité de données illimitée, données ASCII et binaires|
|Sécurité|Données non sécurisées car visibles dans l'URL|Données sécurisées car non visibles dans l'URL|
|Marque-page et historique de navigation|Les paramètres restent dans l’historique du navigateur car ils font partie de l’URL|Les paramètres ne sont pas enregistrés dans l’historique du navigateur|
|Cache et fichier log du serveur|Les paramètres de l’URL sont stockés sans chiffrement|Les paramètres de l’URL ne sont pas enregistrés automatiquement|
|Actualisation du navigateur / Bouton « précédent »|Les paramètres de l’URL ne sont pas envoyés à nouveau|Avertissement du renvoi des données du formulaire|

# 3. Extensible

Conçu au début des années 1990, HTTP est un protocole extensible qui a évolué au fil du temps. Comme il est extensible, il est utilisé  pour transmettre des documents hypertextes HTTP, mais aussi des images ou des vidéos, ou encore pour envoyer des données ou du contenu à des serveurs, comme dans le cas des formulaires. Le HTTP/0.9 était très limité et les navigateurs et serveurs s'en sont aperçus, l'étendant sur des usages plus polyvalents. Ainsi, dans chaque requête figurait les informations de version, la mention du protocole est ajoutée à la ligne GET de la version HTTP/0.9. Au début de chaque réponse, une ligne de code d'état est aussi envoyée permettant au navigateur de prendre connaissance du succès ou de l'échec de la requête, et de s'adapter en conséquence. La notion d'en-tête HTTP a aussi été mise en place pour les requêtes aisni que les réponses. Celle-ci autorise la transmission de métadonnées rendant le protocole très flexible et extensible. Avec ces nouveaux en-têtes HTTP, il est désormais possible de transmettre d'autres documents que des fichiers HTML bruts. Au fur et à mesure des années, ce protocole a été amené à évoluer, puisqu'après celui-ci se trouve le protocole HTTP/1.1 contenant d'autres améliorations. C'est un protocole qui évolue depuis maintenat près de 15 ans en étant toujours stable.

# 4. Sans état

HTTP est un protocole sans état, c'est-à-dire qu'il ne stocke aucune information sur les connexions précédentes. Or, le développement d'applications Web doit souvent maintenir l'état. Pour ce faire, on utilise des cookies, informations qu'un serveur peut stocker sur le système du client permettant aux applications Web de suivre les utilisateurs et leur activité en ligne puisque les cookies peuvent être stockés sur le client pendant une période indéfinie.

# 5. URL

![image](http://sciences-ingenieur.genevoix-signoret-vinci.fr/SNT/2-web/res/url.jpg)




