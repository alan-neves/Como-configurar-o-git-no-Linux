#!/bin/bash

# Exibindo uma mensagem de início
echo "Inicializando o repositório..."
git init

# Configurando o remote origin com a chave SSH correta
echo "Configurando o remote origin..."
git remote set-url origin git@github-alan-neves:alan-neves/Como-configurar-o-git-no-Linux.git

# Verificando as configurações de remote
echo "Verificando as configurações de remote..."
git remote -v

# Fazendo pull do repositório remoto
echo "Fazendo pull do repositório..."
git pull

# Exibindo uma mensagem de conclusão
echo "Configuração concluída!"


