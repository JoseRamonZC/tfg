#!/bin/bash
clear

if [ $USER == "root" ]; then
    if [ ! -d "/var/www/html/almacen" ]; then
    echo "No se ha encontrado carpeta de almacen, carpeta creada"
    sudo cp -r almacen /var/www/html/almacen
    sudo chmod -R 777 /var/www/html/almacen
    fi

    check=`which symfony`
    if [ $check ]; then
    echo "Se ha encontrado Symfony instalado, instalación omitida"
    else
    echo "No se ha encontrado Symfony, ejecutando instalación"
    echo 'deb [trusted=yes] https://repo.symfony.com/apt/ /' | sudo tee /etc/apt/sources.list.d/symfony-cli.list
    sudo apt update
    sudo apt install symfony-cli
    fi

    check=`which composer`
    if [ $check ]; then
    echo "Se ha encontrado Composer instalado, instalación omitida"
    else
    echo "No se ha encontrado Composer, ejecutando instalación"
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    fi

    check=`which symfony`
    if [ $check ]; then
    url=`hostname -I`
    echo "Script acabado, servidor Symfony ejecutándose en 10 segundos, visite http://"$url"/almacen/ para el asistente de configuración"
    sleep 10
    symfony server:start --dir="/var/www/html/almacen/"
    else
    echo "No se ha podido completar correctamente la instalación, vuelva a intentarlo"
    fi


else
echo "No es root, ejecútame como root"
fi
