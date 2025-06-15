Desafio: Desenvolva um sistema de cadastro de usuários que também permita o envio de uma imagem de perfil. 
O upload da imagem deve passar por uma validação para garantir que o arquivo seja, de fato, uma imagem válida.

Requisitos:
A imagem enviada deve estar em um dos seguintes formatos: JPG, JPEG, PNG, TIFF ou GIF.
Utilize funções do PHP para verificar se o conteúdo do arquivo realmente corresponde a uma imagem (por exemplo, getimagesize()).
O sistema deve ser composto por dois arquivos principais:

Formulário de cadastro (php ou apenas HTML):
Exibe os campos de cadastro do usuário.
Inclui o campo de upload da imagem.
Pode conter instruções sobre os requisitos do arquivo.

Processamento e exibição dos dados (obrigatoriamente PHP):
Exibe os dados enviados, incluindo a imagem.
Caso ocorra algum erro (ex: tipo de imagem inválido, dados ausentes, upload mal-sucedido), uma mensagem de erro deve ser exibida.

Observações:
Utilize o arquivo PHP fornecido como base para validar o upload da imagem, ajustando-o conforme os nomes dos campos definidos no seu formulário.
A validação deve ocorrer antes de mover (salvar) o arquivo para o diretório de destino.
