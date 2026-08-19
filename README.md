# SGPU — Sistema de Gestão de Parques Urbanos

Sistema web desenvolvido para apoiar a administração, manutenção e operação de parques urbanos. O projecto foi desenvolvido como solução prática de gestão, reunindo funcionalidades de cadastro, organização de informação e acompanhamento de diferentes recursos e actividades.

## Funcionalidades

- Gestão de parques urbanos
- Gestão de zonas e áreas dos parques
- Gestão de eventos
- Gestão de funcionários e utilizadores
- Gestão de fornecedores
- Gestão de produtos/equipamentos
- Registo e consulta de operações
- Autenticação e perfis de acesso
- Upload e utilização de imagens associadas aos registos
- Operações de criação, consulta, edição e eliminação de dados

## Tecnologias

- PHP
- MySQL / MariaDB
- HTML5
- CSS3
- JavaScript
- Bootstrap
- XAMPP
- Visual Studio Code

## Estrutura

O projecto está organizado por módulos, incluindo configuração e acesso à base de dados, área administrativa, área de funcionários, ficheiros de configuração, recursos visuais e páginas públicas.

## Base de dados

O ficheiro `database_schema.sql` contém a estrutura da base de dados sem os registos utilizados durante o desenvolvimento. Dados pessoais, credenciais e registos de teste foram removidos desta versão pública.

## Execução local

1. Instalar XAMPP com Apache e MySQL/MariaDB.
2. Copiar a pasta do projecto para `htdocs`.
3. Criar uma base de dados local chamada `parques`.
4. Importar `database_schema.sql` através do phpMyAdmin.
5. Confirmar a configuração de ligação em `_Config/conexao.php`.
6. Iniciar Apache e MySQL/MariaDB no XAMPP.
7. Abrir o projecto no navegador através de `http://localhost/Sistema_parques/`.

> **Nota:** esta é uma versão de portfólio de um projecto académico/prático. Não deve ser considerada uma configuração de produção sem revisão adicional de segurança, autenticação e gestão de credenciais.

## Autoria

**Ester Isabel Congo**

Projecto desenvolvido como experiência prática em desenvolvimento de sistemas web e gestão de bases de dados.
