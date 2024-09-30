#!/bin/bash

REPERTOIRE_SOURCE=$(dirname "$(readlink -f "$0")")
REPERTOIRE_CIBLE="/var/www/html/CorsaAutomobile"

echo "Déploiement du site CorsaAutomobile en cours..."

if [ ! -d "$REPERTOIRE_CIBLE" ]; then
    sudo mkdir -p "$REPERTOIRE_CIBLE"
    sudo chown -R $USER:$USER "$REPERTOIRE_CIBLE"
fi

rsync -a --delete "$REPERTOIRE_SOURCE/" "$REPERTOIRE_CIBLE"

if [ $? -eq 0 ]; then
    echo "Déploiement réussi !"
    echo "Votre site est accessible à l'adresse : http://localhost/CorsaAutomobile"
else
    echo "Erreur lors du déploiement !"
fi
