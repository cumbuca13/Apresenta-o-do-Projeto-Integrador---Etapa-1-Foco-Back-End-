# Entrega Parcial 2: Funcionalidades CRUD, Autenticação e Testes
# Sistema de Atendimento - Clínica Odontológica

## Modelagem de Dados
O sistema é baseado em três entidades principais:
- Pacientes
- Dentistas
- Atendimentos

Cada atendimento está relacionado a um paciente e a um dentista.

## Estrutura do Projeto
O projeto segue a estrutura padrão do Laravel:
- Controllers em `app/Http/Controllers`
- Models em `app/Models`
- Migrations e Seeders em `database/`

## Como Executar
1. Clonar o repositório
2. Configurar o `.env` com as credenciais do banco
3. Rodar `php artisan migrate --seed`
4. Rodar `php artisan serve`