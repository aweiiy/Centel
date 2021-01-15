#!/bin/sh
sudo apt update
sudo apt upgrade -y
sudo apt install software-properties-common -y
sudo apt-add-repository --yes --update ppa:ansible/ansible
sudo apt install ansible -y
sudo apt-get install git -y
git clone https://github.com/aweiiy/Centel.git
exec ssh-agent bash
eval ssh-agent -s