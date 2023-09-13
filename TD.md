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

-> http:// correspond au protocole. Cela indique au navigateur le protocole qui doit être utilisé pour récupérer le contenu. Généralement HTTP ou HTTPS (sécurisé)
-> www.unsite.fr correspond au nom de domaine. Il indique le serveur web auquel le navigateur s'adresse pour échanger le contenu. À la place du nom de domaine, on peut utiliser une adresse IP, ce qui est moins pratique et donc moins utilisé sur le Web.
-> :1337 correspond au port utilisé sur le serveur web. Il indique la « porte » technique à utiliser pour accéder aux ressources du serveur. Généralement, cette partie est absente car le navigateur utilise les ports standards associés aux protocoles (80 pour HTTP, 443 pour HTTPS).
-> /intro/page.html est le chemin, sur le serveur web, vers la ressource. Aux débuts du Web, ce chemin correspondait souvent à un chemin « physique » existant sur le serveur. De nos jours, ce chemin n'est qu'une abstraction qui est gérée par le serveur web, il ne correspond plus à une réalité « physique ».
-> #chap1 correspond à une ancre. Celle-ci désigne un endroit donné de la ressource. Elle représente une sorte de "marque-page" à l'intérieur de la ressource, afin que le navigateur affiche la ressource à l'endroit de ce "marque page".

# 6. Codes Status

Il y a 5 classes de codes Statut : 
La 100s qui correspond aux codes d’information indiquant que la demande initiée par le navigateur se poursuit.
Ex : 101 -> Switching Protocols : Acceptation du changement de protocole
La 200s qui correspond aux codes de réussite renvoyés lorsque la requête du navigateur est reçue, comprise et traitée par le serveur.
Ex : 200 -> OK : succès de la requête
La 300s qui correspond aux codes de redirection renvoyés lorsqu’une nouvelle ressource a été substituée à la ressource demandée.
Ex : 301 -> Moved Permanently	 : Document déplacé de façon permanente
La 400s qui correspond aux codes d’erreur des clients lorsqu’il y a eu un problème avec la requête.
Ex : 404 -> Not Found	: Ressource non trouvée
La 500s qui correspond aux codes d’erreur du serveur indiquant l'acceptation de la requête, mais qu’une erreur sur le serveur a empêché son exécution.
Ex : 500 -> Internal Server Error	: Erreur interne du serveur

# 7. Négociation de contenu

La négociation de contenu est un mécanisme du protocole HTTP qui permet de proposer une même ressource sous plusieurs formes différentes permettant ainsi aux clients HTTP de choisir automatiquement la représentation la mieux adaptée à leurs capacités.

![image](https://developer.mozilla.org/fr/docs/Web/HTTP/Content_negotiation/httpnego.png)

Un document donné est défini comme une ressource. Lorsqu'un client souhaite obtenir une ressource, il la demande via une URL. Le serveur utilise alors cette URL pour choisir l'une des variantes disponibles. Chaque variante est appelée "représentation". Le serveur renvoie alors une représentation au client. La ressource, ainsi que chacune de ses représentations, dispose d'une URL spécifique. La négociation de contenu détermine quelle représentation donnée est utilisée lorsque la ressource est demandée. 
On distingue alors deux méthodes de négociation de contenu, la négociation proactive, qui consiste à ce que le serveur sélectionne la représentation en fonction des préférences déclarées de l’agent utilisateur, et la négociation réactive qui est celle du serveur, ici, le serveur fournit une liste de représentations pour l’agent utilisateur à choisir.

# 8/9. Fonctionne pas

# 10. Headers

|En-tête|Signification|Exemple|
|-------|-------------|-------|
|Accept|Types de contenu traitables par le client (champ vide -> tous types de contenu)|Accept: text/html, application/xml|
|Accept-Charset|Jeux de caractères que le client peut afficher|Accept-Charset: utf-8|
|Accept-Encoding|Formats compressés pris en charge par le client|Accept-Encoding: gzip|
|Accept-Language|Version linguistique souhaitée|Accept-Language: fr-FR|
|Authorization|Données d’authentification (ex : login)|Basic WjbU7D25zTAlV2tZ7==|
|Cache-Control|Options du mécanisme de mise en cache|Cache-Control: no-cache|
|Cookie|Cookie stocké pour ce serveur|Cookie: $Version=1; Content=23|
|Content-Length|Longueur de l’organisme demandeur|Content-Length: 212|
|Content-Type|Type MIME ; pertinent pour les requêtes POST et PUT|Content-Type: application/x_222-form-urlencoded|
|Date|Date et heure de la demande|Date: Mon, 9 March 2020 09:02:22 GMT|
|Expect|Formule une attente au serveur, généralement la réception d’une demande importante|Expect: 100-continue (le serveur doit envoyer le code 100 lorsqu’il est prêt à recevoir la requête)|
|Host|Nom de domaine du serveur|Host: exemple.fr|
|If-Match|Exécution conditionnelle d’une action, en fonction de la concordance d’un code transmis|If-Match: „ft678iujhnjio90’pöl“|
|If-Modified-Since|Envoi uniquement si le contenu demandé a été modifié depuis le moment spécifié|IF-Modified-Since: Mon 2 Mar 2020 1:00:00 GMT|
|If-None-Match|Comme ci-dessus, mais spécifié via un ETag (Entity-Tag = tag d’entité)|If-None-Match: „cxdrt5678iujhgbvb“|
|If-Range|Ne demande que la partie du contenu qui a été modifiée ou qui manque dans le cache du client|If-Range: Mon 2 Mar 2020 1:00:00 GMT|
|If-Unmodified-Since|Analogue à IF-Modified-Since|If-Modified-Since: Mon 2 Mar 2020 1:00:00 GMT|
|Max-Forwards|Définit le nombre maximum de fois que la réponse du serveur peut être transmise|Max-Forwards: 12|
|Proxy-Authorization|Utilisé pour authentifier le client auprès d’un serveur proxy|Proxy-Authorization: Basic WjbU7D25zTAlV2tZ7==|
|Range|Précise une partie du contenu demandé|Range: bytes=0-9999|
|Referrer|URL de la ressource à partir de laquelle la demande est faite|Referrer: https://exemple.fr/index.html|
|TE|Codage de transfert d’extension accepté|TE: gzip, deflate|
|User-Agent|User-Agent du client (navigateur)|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36|



