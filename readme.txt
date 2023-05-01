Documentation complete sous ce lien:
https://wiki.slemoal.fr/index.php/Wazo_Phonebook_SnomDECT

Télécharger le contenu du repertoire html en racine de votre repertoire apache.

Dans mon exemple: /var/www/html/

Télécharger le contenu du repertoire scripts ou vous le souhaitez.
Dans mon exemple: /etc/phonebook/

Modifier le mot de passe dans le fichier:
/var/www/html/login.php

Adapter le chemin des repertoires dans le fichiers:
/etc/phonebook/download.sh
/etc/phonebook/custom.sh

Modifier crontab pour lancer les scripts toutes les 5minutes
 crontab -e

# Télécharger les répertoires
*/5 * * * * bash /etc/phonebook/download.sh  > /dev/null

# Adapter les répertoires
*/5 * * * * bash /etc/phonebook/custom.sh  > /dev/null
