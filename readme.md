### Contacta Max - Teste

**Desenvolver um sistema em laravel que possibilite gerenciar um estoque, com os
seguintes requisitos:**

- Um CRUD para os produtos com SKU para identificação.
- Uma tela para adicionar produtos ao estoque.
- Uma tela para dar baixa em produtos que serão enviados aos clientes.

**O sistema deverá possuir uma API, disponível para fazer as movimentações do
estoque com 2 endpoints:**

- **/api/baixar-produtos**
- **/api/adicionar-produtos**

Um relatório de produtos movimentados por dia com:

- Quantos e quais produtos foram adicionados ao estoque.
- Quantos e quais produtos foram removidos do estoque.
- Se a adição/remoção foi feita via sistema ou via API.
- Aviso de estoque baixo quando um produto possuir menos de 100 unidades
no estoque.

- O sistema deverá estar protegido por um sistema de login.

**Algumas validações precisam ser feitas tanto no sistema quanto pela API:**

- Validação de quantidade de produtos:
- Não poderá remover produtos caso não possua a quantidade desejada.
- Não poderão ser cadastrados produtos com SKU duplicados (código para o
produto).

**O que nós gostaríamos de ver em seu sistema:**

- Funcionando, é claro! hehe.
- Um sistema bem organizado que siga os padrões de desenvolvimento.
- Alguma documentação de método em caso de necessidade.
- Commits com uma boa descrição sobre o que foi implementado em cada alteração.
- Alguns testes unitários.

**Por último e não menos importante**

Para envio de seu sistema para avaliação, crie um repositório git e envie o link para
o e-mail dev.mengue@gmail.com. Faça commits regularmente, explicando as alterações
realizadas no código.
As migrações para popular o banco informações as básicas e a criação do usuário
para acesso ao sistema devem estar versionadas.
No arquivo README do repositório juntamente com as instruções de uso do sistema
e as versões usadas no desenvolvimento (PHP - Mysql). Você tem 3 dias corridos para o
desenvolvimento do sistema. Boa sorte!

#### Requisitos

- NGINX 1.14.0
- PHP >= 7.1.19
- MYSQL 5.7.22

#### Instalação

Siga os passos abaixo:

1. git clone https://github.com/raingrave/contactamax.git
2. cd /path/contactamax/
3. composer install
4. configure database in .env
5. php artisan migrate --seed
6. npm install
7. npm run production
8. composer clear
9. php artisan serve
10. access the url http://localhost:8000

#### Credenciais

email: admin@admin.com

password: admin123