#!/bin/bash
# Charger les données depuis le fichier variables.json
contenu=$(cat /var/www/html/includes/donnees.json)
donnees=($(echo "$contenu" | jq -r '.[] | "\(.valeur1),\(.valeur2),\(.valeur3),\(.valeur4)"'))

# Parcourir les données et télécharger les fichiers
for donnee in "${donnees[@]}"; do
    # Extraire les valeurs de chaque colonne
    valeur1=$(echo "$donnee" | cut -d ',' -f 1)
    valeur3=$(echo "$donnee" | cut -d ',' -f 3)
    valeur4=$(echo "$donnee" | cut -d ',' -f 4)

    # Vérifier si la case de la colonne 1 est activée
    if [ "$valeur1" == "oui" ]; then
        # Télécharger le fichier avec wget
        wget "$valeur3" -O "/var/www/html/phonebook/$valeur4"
        echo "Le fichier $valeur4 a été téléchargé depuis $valeur3."
    fi
done

