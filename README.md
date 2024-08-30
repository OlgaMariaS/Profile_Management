## Projeto de Gerenciamentos de perfis 

Esta aplicação consiste em um site dinâmico que apresenta as informações sobre:

- Curso de informática com foco em Google Workspace; 🖥️
- Bacharelado em informática; 🎓
- Proposta da disciplina "Din na comunidade"; 📚

Permitindo ao administrador do curso: 
- 👩‍💻 Cadastrar-se e acessar a plataforma;
- ➕ Inscrever pessoas no curso;
- ✏️ Edição dos dados dos inscritos;
- ❌ Remoção de inscritos;
- 🔍 Consulta de pessoas inscritas;
- 📋 Visualização dos inscritos;
- ✅ Avaliação da plataforma por meio de comentários;

## Tecnologias

Essa aplicação foi realizada com arquitetura MVC (Model-Controll-View) e foi utilizado:

[![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)]()
[![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)]()
[![JS](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)]()
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)]()
[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)]()
[![Livewire](https://img.shields.io/badge/livewire-4e56a6?style=for-the-badge&logo=livewire&logoColor=white)]()
[![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)]()

## Como Instalar e Configurar o Projeto no Windows

#### 1. Instalar o XAMPP
Baixe e instale o XAMPP: [Apache Friends](https://www.apachefriends.org/pt_br/index.html).

#### 2. Instalar o Composer
Baixe e instale o Composer: [Composer](https://getcomposer.org/).

#### 3. Ajustar Variáveis de Ambiente
1. Pressione `Windows + R`, digite `cmd` e clique em **OK**.
2. No prompt de comando, execute o seguinte comando:
   ```bash
   rundll32 sysdm.cpl,EditEnvironmentVariables
   ```
3. Encontre a variável `Path`, selecione-a e clique em **Editar**.
4. Adicione o caminho do php por exemplo `C:\xampp\php`.
5. Clique em **Salvar**

#### 4. Instalar o Laravel
No prompt de comando, execute:
```bash
composer global require laravel/installer
```

#### 5. Criar o Diretório do Projeto
Crie uma pasta chamada `Profile_Management`.

#### 6. Criar o Projeto Laravel
Dentro da pasta `Profile_Management`, execute um dos seguintes comandos para criar o projeto:
```bash
composer create-project laravel/laravel Profile_Management
```
ou
```bash
laravel new Profile_Management
```
#### 7. Instalar os pacotes 
Instalação dos pacotes Jetstream e Livewire para autenticação e segurança no login da aplicação 
```bash
composer require laravel/jetstram
```
```bash
php artisan jetstream:install livewire
```

#### Conexão com o Banco de Dados
Assista ao vídeo sobre [Conexão com Banco](https://www.youtube.com/watch?v=zQdBSpTDQpQ).

1. Ative o Apache e o MySQL no XAMPP.
2. No MySQL, crie o banco de dados com o seguinte comando:
   ```sql
   CREATE DATABASE ProfileManagement;
   ```
3. No arquivo `.env`, ajuste as configurações do banco de dados MySQL:
   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ProfileManagement
   DB_USERNAME=youname
   DB_PASSWORD=yourpassword
   ```

#### Solução de Problemas: Erro de Porta
Se ocorrer um erro de portas, altere a porta de `3306` para `3307` no arquivo `C:\xampp\mysql\bin\my.ini`.

#### Migração de Tabelas
Execute o comando a seguir para migrar as tabelas para o banco de dados `ProfileManagement`:
```bash
php artisan migrate
```

#### Ativar o Servidor
Para ativar o servidor, use o comando:
```bash
php artisan serve
```
#

### Laravel Framework <ion-icon name="logo-laravel"></ion-icon>
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

### License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
