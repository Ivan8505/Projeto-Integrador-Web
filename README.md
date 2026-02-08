<div align="center">
  <img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&size=28&duration=4000&pause=1000&color=4CAF50&center=true&vCenter=true&width=600&lines=Projeto+Integrador+Web;%7C+PHP+CodeIgniter+4+%7C+Web+Acad%C3%AAmico+%7C" alt="Typing SVG" />
</div>

<br />

# Projeto Integrador Web

Projeto web desenvolvido como trabalho integrador durante o curso técnico em informática (2022-2023).  
Um sistema web básico construído com o framework **CodeIgniter 4** (PHP), focado em aprender MVC, rotas, controllers, models, views e integração com banco de dados.

**Status atual**:  
- Funcional como base/framework, mas com implementação mínima e erros típicos de iniciante (ex: segurança básica, organização de código, queries sem prepared statements).  
- Serviu como primeiro contato real com um framework PHP full-stack.  
- Não há planos de manutenção ativa aqui — conceitos aprendidos estão sendo aplicados em projetos mais recentes (ex: automações no homelab ou refatorações em outros repos).

### Tecnologias Utilizadas
- **PHP** 8+ (compatível com CodeIgniter 4)
- **CodeIgniter 4** — framework PHP leve, rápido e seguro (MVC nativo)
- **Composer** — gerenciador de dependências
- **MySQL** — banco de dados relacional 
- **HTML/CSS/JS básico** — frontend simples (views do CI4)
  
### Funcionalidades Implementadas (no estado atual)
- Estrutura MVC padrão do CodeIgniter 4
- Rotas básicas configuradas
- Controllers e views de exemplo (possivelmente customizados para o integrador, como cadastro/listagem de itens)
- Conexão com banco de dados (configurada via `.env` ou `app/Config/Database.php`)
- Telas simples (login, dashboard, CRUD básico — inferido do contexto acadêmico)

**Observações importantes**:  
- Segurança: Versão inicial pode ter vulnerabilidades comuns (ex: SQL injection em queries raw, validação fraca) — lição aprendida para projetos futuros.  
- Código: Mínimo customizado visível — a maior parte é o esqueleto do framework.  
- Banco: Script de criação de tabelas ou dump não incluído (configure manualmente se quiser rodar).

### Como Rodar o Projeto
1. **Pré-requisitos**:
   - PHP 7.4+ (recomendado 8.1+)
   - Composer instalado
   - MySQL/MariaDB rodando localmente
   - Servidor web (Apache/Nginx ou PHP built-in server)

2. **Clone o repositório**:
   ```bash
   git clone https://github.com/Ivan8505/Projeto-Integrador-Web.git
   cd Projeto-Integrador-Web
   ```

3. **Instale dependências**:
   ```bash
   composer install
   ```

4. **Configure o ambiente**:
   - Copie `.env.example` para `.env` (se não existir, crie baseado no exemplo do CI4)
   - Edite `.env` com suas credenciais de banco:
     ```
     database.default.hostname = localhost
     database.default.database = seu_banco
     database.default.username = root
     database.default.password = 
     ```

5. **Inicie o servidor de desenvolvimento** (recomendado):
   ```bash
   php spark serve
   ```
   - Acesse em: http://localhost:8080

   Ou configure Apache/Nginx apontando para a pasta `public/`.

6. **Comandos úteis (via spark)**:
   ```bash
   php spark migrate          # Se houver migrations
   php spark db:seed          # Se houver seeders
   ```

### Estrutura do Projeto
Estrutura padrão do CodeIgniter 4:
```
Projeto-Integrador-Web/
├── app/                  # Controllers, Models, Views, Config, Filters
├── public/               # Entry point: index.php + assets
├── system/               # Core do framework (não editar)
├── tests/                # Testes unitários/integração
├── writable/             # Logs, cache, sessions
├── nbproject/            # Configuração do NetBeans (IDE usada)
├── .env                  # Configurações de ambiente
├── composer.json         # Dependências PHP
├── spark                 # CLI tool do CodeIgniter
└── README.md
```

<!-- ### Capturas de Tela (em breve)
Adicione prints reais aqui após rodar:
- Tela inicial / home
- Exemplo de form CRUD
- Dashboard ou listagem

![Home Page](docs/images/home.png)  
![CRUD Example](docs/images/crud.png)

*(Crie pasta `docs/images/` no repo e commit os prints para visual melhor.)*-->

### Lições Aprendidas & Por Que Manter Público?
- Primeiro projeto real com framework MVC em PHP → entendi rotas, controllers, ORM-like (Model), views com dados dinâmicos.  
- Erros comuns: não usar Query Builder sempre, validação fraca, acoplamento alto.  
- Hoje aplico melhorias em homelab (ex: APIs em outros serviços Docker) e evito os mesmos pitfalls.

### Contato & Contribuição
Quer discutir CodeIgniter, PHP web, migração para Laravel/Symfony, ou como usar PHP em homelab (ex: APIs containerizadas)?  
- LinkedIn: [ivan8505](https://www.linkedin.com/in/ivan8505)  
- Portfólio: [ivanrodrigues.dev](https://ivanrodrigues.dev)  
- Wiki técnica: [xwiki.ivanrodrigues.dev](https://xwiki.ivanrodrigues.dev)

Issues e sugestões bem-vindos — especialmente dicas para modernizar ou refatorar partes antigas!

Obrigado por visitar! 🚀  
Projetos antigos mostram o caminho percorrido.

---
Última atualização: Fevereiro 2026
