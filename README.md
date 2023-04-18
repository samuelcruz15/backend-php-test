# Teste prático de backend

Neste repositório você encontra o enunciado do teste técnico de desenvolvedor com foco em PHP e Laravel.

## O Teste

Criar uma API que implementa o crud de produtos utilizando o framework laravel.

Um produto deve possuir os seguintes dados:
- ID (PK - Inteiro)
- Código (String)
- Nome (String)
- Preço (Float)
- Qty Disponível (Inteiro)
- Marca (String Alfanumérica)

A API deve implementar os seguintes verbos e endpoint:

- GET /api/products/
  - Lista todos os produtos da aplicação.
- POST /api/products/
  - Cria um novo produto na aplicação.
  - Não deve permitir duplicação de códigos. O código deve ser único.
- GET /api/products/id/
  - Obtém um produto específico por meio do ID
- PUT /api/products/id/
  - Atualiza um produto específico (todo o objeto deve ser atualizado).
- DELETE /api/products/id/
  - Deleta um produto especifico da aplicação

### Requisitos  

- Use PHP 8.x e Mysql 8.x (disponíveis do docker-compose.yml do repositório).
- Você deve utilizar o Laravel 9 ou superior para criação da solução.
- Você deve implementar o seed de produtos no banco de dados para eventuais testes.

## Recomendações

- Utilize docker. Você pode usar o docker-compose.yml deste repositório para rodar sua solução, mas fique livre para usar outro ou personaliza-lo. Você também pode usar o Laravel Sail caso prefira.
- Siga as [boas práticas](https://swagger.io/resources/articles/best-practices-in-api-design/) para o desenvolvimento de APIs RESTful

## Processo de submissão

O candidato deverá fazer um fork deste reposítório e efetuar a implementação do teste.

Ao finalizar a implementação deve adicionar o email denis.spalenza@redeancora.com.br ao seu repositório (onde está a implementação do seu teste) para validação do mesmo.

Não abra PRs no nosso repositório público.

## Dúvidas?

Caso tenha alguma dúvida referente ao teste você pode abrir uma issue aqui mesmo neste repositório.
