# Como configurar o Git no seu computador com Linux 

- 1 - Crie ou entre em sua conta no github. 
- 2 - Acesse o site: https://git-scm.com/.
- 3 - Clique em download for linux. Irá aparecer os comandos para instalar na sua versão de distro, no meu caso é uma distro com base em ubuntu.
- 4 - Abra o terminal com o seguinte comando: ctrl + alt + T e siga o passo a passo para a sua versão de linux, abaixo estão listados os comandos para fazer a instalação em cada distro.

Debian/Ubuntu
*Para a versão mais estável da sua versão de Debian/Ubuntu:*

    sudo apt-get install git
    
*Para o Ubuntu, este PPA fornece a última versão estável do Git upstream:*

     add-apt-repository ppa:git-core/ppa # apt update; apt install git

Fedora

     yum install git (up to Fedora 21)
     dnf install git (Fedora 22 and later)

Gentoo

     emerge --ask --verbose dev-vcs/git

Arch Linux

     pacman -S git

openSUSE

     zypper install git

Mageia

     urpmi git

Nix/NixOS

     nix-env -i git

FreeBSD

     pkg install git

Solaris 9/10/11 (OpenCSW)

     pkgutil -i git

Solaris 11 Express

     pkg install developer/versioning/git

OpenBSD

     pkg_add git

Alpine

      apk add git

Red Hat Enterprise Linux, Oracle Linux, CentOS, Scientific Linux, e outros: 
*As distribuições baseadas em RHEL geralmente fornecem versões mais antigas do Git. Você pode baixar um tarball e compilá-lo a partir do código-fonte ou usar um repositório de terceiros, como o IUS Community Project, para obter uma versão mais recente do Git.*

Slitaz

     tazpkg get-install git


**IMPORTANTE!**
diferente do windows, quando você instala o git no linux não aparece um programa para você utiliza-lo como o gitbash no windows, no linux você usa o próprio terminal que você usou para instalar o git.


# Hora de configurar o programa

- 5 - Você irá utilizar dois comandos para cadastrar suas credenciais do Git no computador:

         git config --global user.name "nome do usuário"

         git config --global user.email emaildousuário@exemplo.com

**IMPORTANTE!** Atente-se pelo fato de que os dados acima precisam ser os seus dados do github!

Para verificar se a configuração deu certo digite no terminal:

      git config --list 

- 6- Agora você irá criar uma chave autenticadora do tipo SSH. (é preciso fazer essas configurações para conseguir alterar os arquivos e pastas localmente e posteriormente subi-los para o github via comando no terminal) 

- 7 - Digite o seguinte comando no terminal: 

         ssh-keygen -t ed25519 -C "your_email@example.com" 

(crie um nome para a chave, depois será solicitado uma senha, você precisa cria-la e repiti-la) Pronto, você gerou uma chave. 

**Explicação dos parâmetros:**
     
         ssh-keygen
     
*É o comando usado para gerar um par de chaves SSH (pública e privada). Ele cria as chaves que serão usadas para autenticação.*

        -t

*Este parâmetro especifica o tipo de algoritmo a ser usado na geração da chave. 
No caso, ed25519 é o tipo de algoritmo, que é moderno, mais seguro e mais rápido que outros, como rsa.*

**Outros tipos de algoritmos comuns:**

- *rsa: Mais antigo, mas ainda usado. Pode ter tamanhos de 2048, 3072 ou 4096 bits.*
- *ecdsa: Algoritmo de curva elíptica, mais compacto e rápido que RSA.*
- *ed25519: Curva elíptica moderna, recomendada por ser mais segura e eficiente.*
  
         -C

*Este parâmetro adiciona um comentário à chave pública gerada. O comentário é útil para identificar a chave, especialmente em sistemas onde você tem múltiplas chaves. Geralmente, é um e-mail ou outro identificador.*

*Por exemplo, ao usar -C "your_email@example.com", o e-mail será incluído como comentário no final da chave pública. Quando você abrir o arquivo .pub, verá algo assim:*

          ssh-ed25519 AAAAC3... (chave pública) your_email@example.com

- 8 - execute o seguinte código para listar suas chave:
 
          ls ~/.ssh

  Observe as chaves que serão listadas, possívelmente pode ter mais de uma criada anteriormente, se não, será listada somente a chave que criou agora.

  Depois de localizar a chave que você acabou de criar, execute o comando abaixo para vizualizar o conteúdo da chave:

          cat ~/.ssh/nome_da_sua_chave.pub

Copie a chave gerada e vá até a parte superior do lado direito do github onde encontra-se sua foto de perfil e clique sobre a imagem, clique em settings e depois em SSH and GPG keys.

- 9 - você irá encontrar a seguinte mensagem: 'Check out our guide to connecting to GitHub using SSH keys', caso clique sobre a mensagem destacada em azul, você será redirecionado(a) para um guia de configuração de autenticação do tipo SSH, você pode ler o guia posteriormente para entender melhor, mas para fins didaticos estou sendo mais direto aqui.

- 10 - Clique em Nova chave SSH ou Adicionar chave SSH. No campo "Title" (Título), adicione uma etiqueta descritiva, selecione o tipo de chave: autenticação ou assinatura e cole aquela chave gerada no terminal anteriormente, se tudo tiver dado certo, você conseguiu configurar sua senha autentificadora do tipo SSH. 

- 11 - Vá até o navegador e abra seu repositório do github, clique no botão verde 'Code' e escolha a opção 'SSH' e em seguida copie o endereço do seu repositório oferecido na opção.

- 12 - No terminal digite o comando 'git clone' acompanhado do endereço copiado. Ex.:

         git clone https://github.com/alan-neves.git

- 13 - No terminal liste as pastas com o comando: 

         ls 

Verifique se seu repositório foi baixado.

- 14 - Visto que a pasta foi clonada (baixada) você vai acessar ela através do comando 

         cd nome-da-pasta

*(substitua pelo real nome da pasta, você pode digitar as 3 ou 4 primeiras letras e apertar a tecla TAB para auto-completar).*

  # Comando uteis para navegar nas pastas:

      cd nome-da-pasta : acessa pasta

      cd - : volta uma pasta

      ls ou dir : lista pastas

      clear : limpa o terminal

- 15 - Agora é hora de abrir com o VSCode, baixe e instale o VSCode para sua versão de linux no link a seguir: (https://code.visualstudio.com/download)

Depois de instalado eutilize o comando a seguir no terminal para abrir o VSCode:

         code .

- 16 - Você pode personalizar o VScode com suas extensões.

- 17 - Dicas do VSCode: Ctrl + S = Salvar (fica uma bolinha na aba quando não está salvo, e fica um M quando é salvo).

# COMO MANDAR AS SUAS CRIAÇÕES/ALTERAÇÕES PRO GITHUB.

- 18 - Use o comando:

         git status

Ele monitora as atividades e te direciona em que etapa do processo você está.

- 19 - Os arquivos em vermelho foram alterados mas não estão inseridos na nuvem, para adiciona-los e atualizar o repositório utilize o comando

         git add nome-do-arquivo

  ou

         git add .

(esse ultimo é pra colocar todas as pastas e alterações de uma vez).

- 20 - Para retirar os arquivos utilize o comando

         git restore --staged nome-do-arquivo

  ou

         git restore --staged .

- 21 - Agora é hora de comentar suas alterações, utilize o comando

         git commit -m "mensagem que deseja"

*Uma boa prática de mercado é escrever a mensagem na terceira pessoa. Exemplo: "Cria um botão na página inicial".*

- 22 - Feito o commit agora é hora de enviar para a nuvem, utilize o comando

         git push

Será solicitado aquela senha que você criou ao gerar a autenticação do tipo SSH, digite sua senha e aperte enter, se tudo deu certo, você conseguiu alterar sua pasta e subi-la para o github com as alterações feitas localmente.
