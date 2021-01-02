# Centel
Automated WordPress server with remote database deployed with ansible 

Add private ssh & chmod 600

exec ssh-agent bash
eval ssh-agent -s
ssh-add

nano /etc/ansible/hosts

[wordpress]
10.0.1.x

[wordpress:vars]
ansible_ssh_user=root
ansible_ssh_private_key_file=/root/.ssh/id_rsa

[database]
10.0.1.x

[database:vars]
ansible_ssh_user=root
ansible_ssh_private_key_file=/root/.ssh/id_rsa

[client]
10.0.1.x

[client:vars]
ansible_ssh_user=root
ansible_ssh_private_key_file=/root/.ssh/id_rsa

add IP's to vars/default.yml



