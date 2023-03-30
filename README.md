## To Run this application in Docker

First you will need to have Docker and Docker-compose installed.
So if you are running Linux, run these commands first:
- "sudo apt update && apt upgrade -y"
- "sudo apt install docker docker-compose"
- Edit etc/sudoers and include "user ALL=(ALL) NOPASSWD: /bin/rm -rf /tmp/QuizGameBackend" if you want a automated pipeline. (replace user to your user)
    
And finally, let's build:
- Clone this project to your EC2 machine for example
- Run "chmod -R 777 ./"
- Run "composer install"
- Adjust your .env with "cp .env.example .env" and replace 
    - APP_DEBUG=false
    - APP_NAME=QuizGameBackend
    - APP_ENV=production
    - Database settings
- Run "docker-compose up -d" to up your containers
- Run 'docker-compose exec -T app bash -c "composer install && php artisan key:generate"'

## OR
If you want a automated pipeline:
1. Configurando runner e variáveis:
    - Crie um repositório próprio e coloque todos os arquivos deste Projeto nele.
    - Na sua conta do github acesse https://github.com/"user"/"repositório"/settings/actions/runners substituindo user e repositório pelos respectivos valores de sua conta.
    - Siga o passo a passo para adicionar um novo runner, recomendo Linux.
    - Em https://github.com/"user"/"repositório"/settings/secrets/actions adicione as variáveis do HOST, USERNAME e PASSWORD que serão usadas para gerar a imagem docker e fazer o deploy na sua máquina escolhida.

2. Prepando ambiente para receber a aplicação:
    - "sudo apt update && apt upgrade -y"
    - "sudo apt install docker && sudo apt install docker.io"
    - "sudo systemctl enable docker && sudo systemctl status docker" 
    - Edit etc/sudoers and include "user ALL=(ALL) NOPASSWD: /bin/rm -rf /tmp/QuizGameBackend" if you want a automated pipeline. (replace user to your user)
    
3. Faça um commit e teste a aplicação.
## DONE! Your application is configured!
