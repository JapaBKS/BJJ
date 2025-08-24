# ShiaiFlow (Skeleton MVC)

Estrutura mínima para iniciar o projeto em PHP (MVC), com assets separados e roteamento básico.

## Requisitos
- PHP 8.1+
- Apache (XAMPP) ou similar
- Composer (opcional, para autoload do vendor)

## Instalação
1. Copie a pasta `shiaiflow_skeleton` para `C:\xampp\htdocs\shiaiflow` (Windows) ou `/var/www/shiaiflow` (Linux/Mac).
2. Renomeie `.env.example` para `.env` e ajuste as variáveis se necessário.
3. (Opcional) Rode `composer install` e depois `composer dump-autoload` no diretório raiz.
4. Configure o Apache:
   - **Opção A (rápida):** Acesse `http://localhost/shiaiflow/public/`.
   - **Opção B (ideal):** aponte o DocumentRoot do VirtualHost para a pasta `public/`.

## Teste rápido
- Abra `http://localhost/shiaiflow/public/` → deve exibir a página de boas-vindas.
- Vá em `http://localhost/shiaiflow/public/login` → formulário de login (stub).

## Próximos Passos
- Adicionar Controllers/Services para RF4-RF6 (inscrição/pesagem).
- Criar migrations/seeders no diretório `database/`.
- Implementar autenticação real e Policies por perfil.
- Adicionar modules JS: bracket, scoreboard, announcer.
