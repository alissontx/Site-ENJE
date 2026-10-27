GALERIAS FOTOGRÁFICAS DO ARQUIVO ENJE
======================================

Estrutura
---------
As fotografias de cada edição ficam em:
images/arquivo-enje/enje-ANO-NN/

Exemplo do I ENJE (1985):
images/arquivo-enje/enje-1985-01/

As pastas das 39 edições já estão criadas. O ZIP inclui 11 fotografias na pasta do I ENJE, para o primeiro teste.

Como acrescentar fotografias
-----------------------------
1. Abra a pasta da edição correta.
2. Copie para lá os ficheiros JPG, JPEG, PNG, WEBP ou GIF.
3. Use nomes simples e únicos, por exemplo foto-12.jpg, foto-13.jpg.
4. Não é necessário alterar HTML ou JavaScript.

IMPORTANTE SOBRE A ATUALIZAÇÃO AUTOMÁTICA
-----------------------------------------
O carrossel tenta consultar gallery.php, que lista automaticamente as imagens da pasta em tempo real. Para que adicionar uma fotografia à pasta a faça aparecer automaticamente, o site tem de estar num alojamento que execute PHP.

Se o site estiver num alojamento puramente estático (por exemplo, um serviço que só publique HTML/CSS/JavaScript), o servidor não executa gallery.php. Nesse caso, o carrossel usa gallery-manifest.json como alternativa, mas esse manifesto precisa de ser regenerado quando se acrescentam fotografias. Não existe forma segura de um navegador listar sozinho os ficheiros de uma pasta estática.

Ordem das imagens
-----------------
As fotografias são ordenadas pelo nome do ficheiro. Numere os nomes para controlar a ordem:
foto-01.jpg, foto-02.jpg, foto-03.jpg...

As imagens existentes no carrossel principal e as pastas do arquivo são independentes: a fotografia de capa da ficha histórica mantém-se como estava.


COMO TESTAR CORRETAMENTE NO COMPUTADOR
--------------------------------------
Se abrir index.html com duplo clique (endereço file://), o navegador bloqueia pedidos fetch() a gallery.php e gallery-manifest.json. O JavaScript agora inclui um fallback incorporado para que as 11 fotografias já incluídas no ZIP apareçam mesmo nessa pré-visualização local.

Para testar a deteção AUTOMÁTICA de novas fotografias:
1. Instale/tenha PHP disponível no computador.
2. Abra um terminal dentro da pasta "Projeto ENJE".
3. Execute: php -S localhost:8000
4. Abra no navegador: http://localhost:8000
5. Adicione um JPG/PNG à pasta da edição, atualize a página e abra novamente a ficha.

IMPORTANTE:
- O fallback incorporado serve para ver as fotografias já conhecidas no ZIP quando se abre o site por file://.
- Para detetar automaticamente fotografias que forem adicionadas depois, o site precisa de executar gallery.php num servidor com PHP.
- Se o alojamento só aceitar HTML/CSS/JavaScript, as novas imagens não podem ser descobertas automaticamente pela pasta; nesse caso, será necessário atualizar o manifesto.


PASTAS PREPARADAS PARA TODAS AS EDIÇÕES
Cada edição tem uma pasta em images/arquivo-enje/, com o identificador usado pelo carrossel.
Exemplo: images/arquivo-enje/enje-1985-01/ para o I ENJE; images/arquivo-enje/enje-1986-02/ para o II ENJE; images/arquivo-enje/enje-1986-03/ para o III ENJE.
As pastas vazias já estão incluídas no ZIP. Para acrescentar imagens, copie JPG, JPEG, PNG, WEBP ou GIF para a pasta correta.
Num servidor com PHP ativo, gallery.php deteta os ficheiros da pasta automaticamente. Ao abrir index.html por file://, novas fotografias não podem ser descobertas automaticamente pelo navegador; nesse caso, atualize gallery-manifest.json e o manifesto incorporado em script.js, ou use um servidor com PHP.
Use nomes simples e ordem numérica, por exemplo foto-01.jpg, foto-02.jpg, foto-03.jpg.


ATUALIZAÇÃO DE TESTE — II ENJE (1986)
------------------------------------
A pasta images/arquivo-enje/enje-1986-02 inclui fotografias iniciais e o manifesto local foi sincronizado para que apareçam mesmo ao abrir index.html diretamente. Para fotografias futuras aparecerem automaticamente sem atualizar o manifesto, utilize o site através de um servidor com PHP ativo; o gallery.php lê os ficheiros diretamente da pasta.


ATUALIZAÇÃO — XXXVII ENJE (2024)
--------------------------------
Foram adicionadas fotografias fornecidas para a edição de 2024 à pasta images/arquivo-enje/enje-2024-37/. O manifesto externo e o manifesto incorporado no JavaScript foram sincronizados para que a galeria também funcione em alojamento estático e em pré-visualização local.
