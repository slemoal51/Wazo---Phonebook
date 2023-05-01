#!/bin/bash
# Scrypt lancé par crontab

sleep 5

#Remplacer les caractères non apprecié
sed -i 's/&#39;/ /' /var/www/html/phonebook/*
sed -i 'y/_àçéèêëîïôöùüÂÇÉÈÊËÎÏÔÖÙÜ/ aceeeeiioouuACEEEEIIOOUU/' /var/www/html/phonebook/*

## Adapter au format Tbook
sed -i 's#/SnomIPPhoneDirectory#/tbook#' /var/www/html/phonebook/*
sed -i 's/SnomIPPhoneDirectory/tbook complete="true"/' /var/www/html/phonebook/*

sed -i 's#/DirectoryEntry#/item#' /var/www/html/phonebook/*
sed -i 's/DirectoryEntry/item context="active" type="colleagues"/' /var/www/html/phonebook/*

sed -i 's#/Name>#/name>#' /var/www/html/phonebook/*
sed -i 's/Name>/name>/' /var/www/html/phonebook/*

sed -i 's#/Telephone>#/number>#' /var/www/html/phonebook/*
sed -i 's/Telephone>/number>/' /var/www/html/phonebook/*

