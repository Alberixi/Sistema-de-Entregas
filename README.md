# Sistema de Entregas

Um sistema completo para gerenciamento de entregas desenvolvido em PHP, MySQL, HTML, CSS e JavaScript.

## 🚀 Características

- ✅ **Dashboard Interativo** - Visualização geral das estatísticas do sistema
- ✅ **Gerenciamento de Clientes** - CRUD completo para clientes
- ✅ **Gerenciamento de Entregas** - CRUD completo para entregas com status tracking
- ✅ **Relatórios Avançados** - Relatórios com gráficos e exportação para CSV/Excel
- ✅ **Design Responsivo** - Interface moderna e adaptável a todos os dispositivos
- ✅ **Tema Personalizado** - Botões azuis claros com contorno laranja e cantos arredondados
- ✅ **Instalação Automática** - Script de instalação fácil e intuitivo

## 📋 Estrutura do Projeto

/sistema-entregas/
├── index.php                 # Página principal (Dashboard)
├── install.php               # Página de instalação do sistema
├── dashboard.php             # Dashboard alternativo
├── relatorios.php            # Página de relatórios e exportação
├── config/
│   └── database.php          # Configuração do banco de dados
├── clientes/
│   ├── listar.php            # Listar clientes
│   ├── adicionar.php         # Adicionar novo cliente
│   ├── editar.php           # Editar cliente existente
│   └── excluir.php          # Excluir cliente
├── entregas/
│   ├── listar.php            # Listar entregas
│   ├── adicionar.php         # Adicionar nova entrega
│   ├── editar.php            # Editar entrega existente
│   └── excluir.php           # Excluir entrega
├── includes/
│   ├── header.php           # Cabeçalho do site
│   ├── sidebar.php          # Menu lateral
│   └── footer.php           # Rodapé do site
├── assets/
│   ├── css/
│   │   └── style.css         # Estilos CSS personalizados
│   ├── js/
│   │   └── script.js         # JavaScript personalizado
│   └── img/                 # Imagens do sistema
├── database.sql             # Estrutura do banco de dados
├──  fix_all.php             # correção de todos os possiveis erros
├──  ajuda.php               # informações úteis do sistema, nova configuração do bando de dados e correções de alguns possíveis erros, e ensinamento de como usar o sistema complet.
└── README.md                # Este arquivo

## 🔧 Requisitos do Sistema

- **PHP** 7.0 ou superior
- **MySQL** 5.6 ou superior
- **Servidor Web** (Apache, Nginx, etc.)
- **Navegador Moderno** (Chrome, Firefox, Safari, Edge)

## 📦 Instalação

### Método 1: Instalação Automática (Recomendado)

1. **Faça o upload dos arquivos** para o seu servidor via FTP ou painel de controle
2. **Acesse a página de instalação** no seu navegador: `http://seusite.com/sistema-entregas/install.php`
3. **Preencha os dados do banco de dados**:
   - Host do Banco de Dados (geralmente `localhost`)
   - Nome do Banco de Dados
   - Usuário do Banco de Dados
   - Senha do Banco de Dados
4. **Clique em "Instalar Sistema"**
5. **Pronto!** O sistema será instalado automaticamente

### Método 2: Instalação Manual

1. **Crie o banco de dados** no seu phpMyAdmin ou MySQL
2. **Importe o arquivo SQL**:
   - Acesse seu phpMyAdmin
   - Selecione o banco de dados criado
   - Clique em "Importar"
   - Selecione o arquivo `database.sql`
   - Clique em "Executar"
3. **Configure o arquivo de conexão**:
   - Abra o arquivo `config/database.php`
   - Altere as seguintes linhas com seus dados:

     ```php
     define('DB_HOST', 'localhost');        // Host do banco de dados
     define('DB_NAME', 'sistema_entregas'); // Nome do banco de dados
     define('DB_USER', 'root');            // Usuário do banco de dados
     define('DB_PASS', '');                // Senha do banco de dados
  
4. **Acesse o sistema** no seu navegador: `http://seusite.com/sistema-entregas/`

## 🎯 Como Usar

### Acessando o Sistema

1. **Dashboard** (`index.php`): Visualização geral com estatísticas e entregas recentes
2. **Clientes** (`clientes/listar.php`): Gerencie todos os clientes do sistema
3. **Entregas** (`entregas/listar.php`): Gerencie todas as entregas
4. **Relatórios** (`relatorios.php`): Visualize relatórios e exporte dados

### Gerenciando Clientes

- **Listar Clientes**: Veja todos os clientes com opções de busca
- **Adicionar Cliente**: Clique em "Novo Cliente" e preencha o formulário
- **Editar Cliente**: Clique no ícone de edição na lista de clientes
- **Excluir Cliente**: Clique no ícone de lixeira (não será possível se houver entregas associadas)

### Gerenciando Entregas

- **Listar Entregas**: Veja todas as entregas com filtros por status e busca
- **Adicionar Entrega**: Clique em "Nova Entrega" e preencha o formulário
- **Editar Entrega**: Clique no ícone de edição na lista de entregas
- **Alterar Status**: Ao editar, você pode alterar o status da entrega

### Status das Entregas

- **PENDENTE**: Aguardando envio
- **EM_TRANSITO**: Em trânsito para entrega
- **ENTREGUE**: Entrega concluída com sucesso
- **CANCELADO**: Entrega cancelada

### Relatórios

- **Filtros por Período**: Escolha entre último mês, 3 meses, 6 meses, 1 ano ou todo período
- **Exportação**: Exporte relatórios em formato CSV ou Excel
- **Visualizações**: Gráficos de status, entregas por mês e clientes mais ativos

## 🎨 Personalização

### Cores do Tema

O sistema utiliza um tema personalizado com:

- **Botões**: Azul claro (#5DADE2) com contorno laranja (#F39C12)
- **Bordas**: Laranja claro em todo o template
- **Cantos Arredondados**: 8px de border-radius

Para alterar as cores, edite o arquivo `assets/css/style.css`:

```css
:root {
    --primary-color: #5DADE2;    /* Azul claro */
    --secondary-color: #F39C12;   /* Laranja claro */
    --orange-border: #F39C12;     /* Cor das bordas */
    --border-radius: 8px;          /* Raio das bordas */
}
```

### Logo e Imagens

- Substitua os arquivos na pasta `assets/img/`
- `logo.png`: Logo do sistema (tamanho recomendado: 60x60px)
- `user.png`: Ícone de usuário (tamanho recomendado: 40x40px)

## 🔒 Segurança

- **Validação de Dados**: Todos os inputs são validados e sanitizados
- **SQL Injection Protection**: Uso de prepared statements com PDO
- **XSS Protection**: Dados são escapados antes de serem exibidos
- **CSRF Protection**: Implementação de tokens em formulários

## 📱 Responsividade

O sistema é totalmente responsivo e funciona em:

- **Desktop**: Navegadores modernos (Chrome, Firefox, Safari, Edge)
- **Tablet**: iPad, Android tablets
- **Mobile**: iPhones, Android phones

## 🛠️ Manutenção

### Backup do Banco de Dados

1. Acesse seu phpMyAdmin
2. Selecione o banco de dados do sistema
3. Clique em "Exportar"
4. Escolha o formato SQL
5. Clique em "Executar"

### Atualização do Sistema

1. **Faça backup** do banco de dados e dos arquivos
2. **Substitua os arquivos** pelas novas versões
3. **Execute o install.php** se houver alterações na estrutura do banco

## 🐛 Troubleshooting

### Problemas Comuns

#### 1. Erro de conexão com o banco de dados

- Verifique as credenciais no arquivo `config/database.php`
- Certifique-se de que o banco de dados existe
- Verifique se o usuário tem permissões adequadas

#### 2. Página em branco ou erros 500

- Verifique os logs de erro do servidor
- Certifique-se de que o PHP está configurado corretamente
- Verifique as permissões dos arquivos (recomendado: 755 para pastas, 644 para arquivos)

#### 3. Imagens não carregando

- Verifique o caminho das imagens no arquivo `config/database.php`
- Certifique-se de que as imagens existem na pasta correta

#### 4. Formulários não enviam

- Verifique as permissões de escrita
- Certifique-se de que o PHP tem permissão para escrever no servidor

### Logs de Erro

Para habilitar logs de erro, adicione ao arquivo `config/database.php`:

```php
// Habilitar exibição de erros (apenas para desenvolvimento)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```

## 📞 Suporte

Se você encontrar algum problema ou tiver dúvidas:

1. **Verifique este arquivo README** para soluções comuns
2. **Consulte os logs de erro** do seu servidor
3. **Verifique a documentação** do PHP e MySQL

## 📄 Licença

Este sistema é fornecido "como está", sem garantias de qualquer tipo. Você é livre para usar, modificar e distribuir este sistema para seus próprios projetos.

## 🙏 Agradecimentos

- **Bootstrap** - Framework CSS
- **Font Awesome** - Ícones
- **jQuery** - Biblioteca JavaScript
- **AdminLTE** - Template de dashboard

---

### Desenvolvido com ❤️ para facilitar o gerenciamento de entregas

Se você achou este sistema útil, por favor, considere dar uma ⭐️ neste projeto!
