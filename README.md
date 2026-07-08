# Tema SUAP (`theme_suap`)

O **Tema SUAP** é um tema customizado para a plataforma Moodle, desenvolvido como um tema filho (child theme) do tema **Boost** padrão. Ele foi projetado especialmente para o ecossistema do **IFRN (Instituto Federal do Rio Grande do Norte)**, em particular para o **Campus Avançado Natal - Zona Leste (ZL)**, alinhando a experiência visual e funcional do Moodle com a identidade do SUAP (Sistema Unificado de Administração Pública).

---

## 🌟 Principais Recursos

### ♿ Acessibilidade Avançada
O tema integra um conjunto robusto de preferências de acessibilidade para garantir uma navegação inclusiva aos estudantes:
- **VLibras:** Opção para habilitar o widget de tradução automática em Libras.
- **Modo Amigável para Disléxicos:** Utilização de fontes otimizadas para leitura por pessoas com dislexia.
- **Alinhamento à Esquerda:** Força o alinhamento de textos à esquerda (removendo a justificação), facilitando a leitura.
- **Destaque de Links:** Aplica um destaque visual mais evidente em todos os links da página.
- **Parar Animações:** Interrompe transições e animações visuais para evitar distração ou desconforto.
- **Ocultar Imagens Ilustrativas:** Esconde imagens puramente decorativas para simplificar a interface.
- **Cursor Grande:** Aumenta o tamanho do cursor do mouse.
- **Maior Espaçamento de Linhas (Line Height):** Aumenta a distância entre linhas de texto, melhorando o foco na leitura.
- **Modos de Cores/Contraste:** Suporte para diferentes temas de contraste (como o Modo Escuro ou Alto Contraste).

### 🏠 Página Inicial Personalizada e Dinâmica
- **Layout sob medida (`frontpage.mustache`):** Desenvolvido especificamente para exibir de forma elegante as Trilhas de Aprendizagem e os cursos.
- **Botões Dinâmicos e Condicionais:** Permite configurar botões diferentes no cabeçalho/página inicial para visitantes (usuários não logados) e estudantes logados.
- **Informações Adicionais de Curso:** Exibição de carga horária ("Até X horas") e indicador de certificado diretamente nos cards de cursos na página inicial.

### 📚 Visual de Curso e Matrícula Aprimorado
- **Painel de Matrícula (`enroll_course.mustache`):** Página de inscrição personalizada que apresenta de forma atraente uma visão geral do curso, a lista de docentes (com foto e descrição puxadas via API integrada) e comentários dos estudantes.
- **Facilidade na Emissão de Certificados:** Botões dedicados para emissão rápida de certificados no término do curso.

### 👤 Perfil do Usuário Customizado
- Visualização do perfil dividida em abas interativas contendo:
  - **Sobre mim:** Descrição personalizada do usuário.
  - **Certificados:** Lista de certificados conquistados na plataforma.
  - **Emblemas (Badges):** Medalhas obtidas pelo estudante.

### 🛠️ Configurações Flexíveis para Administradores
- Painel administrativo do tema contendo abas para **Configurações Gerais**, **Configurações Avançadas** e **Configurações da Página Inicial**.
- Suporte para envio de arquivos de **Presets de SCSS** personalizados.
- Campos para injeção de **SCSS Bruto** (inicial e pós-compilação) permitindo customizações ágeis diretamente pela interface administrativa.

---

## 🛠️ Requisitos de Instalação

- **Versão Moodle mínima:** Moodle 4.2+ (requer suporte de core para Boost e componentes modernos de drawer).
- **Tema Pai:** Requer o tema padrão **Boost** (`theme_boost`) instalado e ativado no core do Moodle.

---

## 🚀 Como Instalar

1. **Baixe ou clone** este repositório dentro do diretório de temas do seu servidor Moodle:
   ```bash
   cd /caminho/do/seu/moodle/theme
   git clone https://github.com/suap-moodletheme-suite/moodle-theme_suap.git suap
   ```
   *Nota: O nome da pasta do tema no Moodle deve ser estritamente `suap` para que o plugin seja reconhecido como `theme_suap`.*

2. **Execute a atualização do banco de dados**:
   - Acesse a área administrativa do seu Moodle pelo navegador (a tela de atualização será exibida automaticamente).
   - Ou utilize o terminal via CLI na pasta raiz do Moodle:
     ```bash
     php admin/cli/upgrade.php
     ```

3. **Ative o tema**:
   - Vá em *Administração do Site > Aparência > Temas > Seletor de Temas*.
   - Altere o tema padrão para o **SUAP**.

---

## ⚙️ Configuração de Botões Dinâmicos

A configuração de links e botões da página inicial (tanto para visitantes quanto para usuários logados) é feita a partir de uma caixa de texto administrativo no formato de texto com separador (`|`).

### Sintaxe
Cada linha representa um botão e deve seguir o padrão abaixo:
```text
Rótulo (Texto ou String Moodle) | URL do Link | Ícone FontAwesome | Target (_blank ou _self) | Capabilities Necessárias
```

* **Rótulo:** Pode ser texto puro (ex: `Início`) ou uma string de tradução do Moodle se possuir vírgula no formato `identificador,componente` (ex: `frontpage_button_home,theme_suap`).
* **URL do Link:** Link para onde o botão redireciona (ex: `/my/courses.php`).
* **Ícone FontAwesome:** A classe CSS do ícone (ex: `fa-graduation-cap` ou `fa-home`).
* **Target:** Define como o link abrirá (`_blank` para nova aba ou `_self` para a mesma aba).
* **Capabilities:** Regras de acesso necessárias para o botão ser exibido. Caso não possua restrição, use `N/A`.

#### Exemplo prático de configuração:
```text
Início | / | fa-home | _self | N/A
Cursos | /course/index.php | fa-graduation-cap | _self | N/A
Administração | /admin/search.php | fa-cogs | _self | moodle/site:config
```

---

## 💻 Estrutura de Desenvolvimento

O tema é composto pelas seguintes pastas e arquivos de destaque:

- **`classes/`**: Contém classes auxiliares para navegação (`boostnavbar.php`), APIs e renderizadores customizados.
- **`templates/`**: Arquivos `.mustache` responsáveis pela estruturação do HTML (ex. layouts de página, barra de navegação, painel de matrícula e área de rodapé).
- **`scss/`**: Código de estilização. O tema centraliza suas estilizações sob a pasta `scss/IFRN/`, que organiza em arquivos modulares itens como acessibilidade, rodapé (`footer.scss`), página de matrícula (`enrollcourse.scss`), perfil de usuário (`profileuser.scss`), gavetas (`drawers/`), entre outros.
- **`api/get_teacher_data.php`**: Endpoint para recuperação dinâmica de dados sobre os docentes vinculados aos cursos.
- **`lang/`**: Traduções e chaves de idiomas (com suporte nativo a `pt_br` e `en`).

### CI/CD
O repositório está configurado com ferramentas automatizadas no diretório `.github/workflows/`:
- **`moodle-plugin-ci.yml`**: Executa análises estáticas de qualidade de código (PHPCS, PHPMD), testes de unidade (PHPUnit) e testes de aceitação (Behat) garantindo a conformidade com as diretrizes do ecossistema Moodle.
- **`release.yml`**: Automação para empacotamento e entrega de novas versões da extensão.

---

## 📄 Licença

Este plugin é distribuído sob a licença pública **GNU General Public License (GPL) versão 3** ou posterior. Para mais detalhes, consulte o arquivo [LICENSE](file:///C:/Users/2080882/projetos/IFRN/suap-moodletheme-suite/theme_suap/LICENSE).
