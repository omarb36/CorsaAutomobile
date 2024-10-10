#!/bin/bash

GIT_REPO="https://github.com/omarb36/CorsaAutomobile.git"
SSH_KEY_PATH="${HOME}/.ssh/id_rsa.pub"
TEMP_PATH="/tmp"
XAMPP_PATH="/opt/lampp"

if [ ! -f $SSH_KEY_PATH ]
    then
        echo "SSH Key not found, please generate one in id_rsa.pub and put in your gitlab profile."
        exit 1
    else
        echo "SSH Key found!"
fi; 


if [ ! -d $XAMPP_PATH ]
    then
        echo "XAMPP not found"
    else
        echo "XAMPP found!"
fi;


if ! command -v git >/dev/null
    then
        echo "Git not found, please install it."
        exit 1
    else
        echo "Git found!"
fi;

if [ -d $XAMPP_PATH/htdocs/corsatest ]
    then
        read -p "Project already found, do you want to reinstall it? (y/n) " reply
        if [ "$reply" == "y" ]
            then
                sudo rm -rf $XAMPP_PATH/htdocs/corsatest
                rm -rf $TEMP_PATH/corsatest
        else
            echo "No need to do anything."
            exit 1
        fi;
fi;


if ! (git clone $GIT_REPO $TEMP_PATH/corsatest) then
    echo "The cloning process failed."
    exit 1
else
    echo "The cloning process was successful."
    if ! (sudo mv -t $XAMPP_PATH/htdocs $TEMP_PATH/corsatest) then
        echo "The copy process failed."
        exit 1
    else
        echo "The copy process was successful."
        if ! (sudo /opt/lampp/lampp start) then
            echo "The server didn't start."
            exit 1
        else
            echo "Here is the link to access the website: http://localhost/corsatest"
        fi
    fi;
fi