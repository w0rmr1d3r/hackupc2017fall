#!/bin/bash

DESKTOP=$HOME"/Desktop/."
DOCUMENTS=$HOME"/Documents/."
MEGA=$HOME"/MEGAsync/."
MUSIC=$HOME"/Music/."
PICTURES=$HOME"/Pictures/."
VIDEOS=$HOME"/Videos/."

USB="/media/ramon/"$1

USBDESKTOP=$USB"/Desktop"
USBDOCUMENTS=$USB"/Documents"
USBMEGA=$USB"/MEGAsync"
USBMUSIC=$USB"/Music"
USBPICTURES=$USB"/Pictures"
USBVIDEOS=$USB"/Videos"

cp -r $DESKTOP $USBDESKTOP
echo "---> Desktop copied"
cp -r $DOCUMENTS $USBDOCUMENTS
echo "---> Documents copied"
#cp -r $MEGA $USBMEGA
#echo "---> Mega copied"
cp -r $MUSIC $USBMUSIC
echo "---> Music copied"
cp -r $PICTURES $USBPICTURES
echo "---> Pictures copied"
cp -r $VIDEOS $USBVIDEOS
echo "---> Videos copied"
