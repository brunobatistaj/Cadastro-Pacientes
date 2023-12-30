# Cadastro-Pacientes
Exercício de Programação em PHP - Cadastro de pacientes. PHP com JSON

1. Cadastro de Pacientes
PHP chamado `register.php` será responsável por cadastrar pacientes. O script deve importar informações de pacientes a partir do arquivo `patients.json`.
* O Script recebe por POST os dados de um paciente, adiciona o paciente no arquivo `patients.json` e retorna um JSON com os dados do paciente no seguinte formato:
`json
{
  "message": "Paciente cadastrado com sucesso",
  "patient": {
    "id": "id do paciente",
    "name": "nome do paciente",
    "phone": "telefone do paciente",
    "email": "email do paciente",
    "notes": "observações sobre o paciente"
  }
}
`
Mantem no arquivo `patients.json` todos os pacientes cadastrados anteriormente.
* Caso receba por POST um email de um paciente que já existe, retorna um JSON com a seguinte estrutura:
`json
{
  "error": true,
  "message": "Paciente já cadastrado",
}
`

2. Listagem de Pacientes
Um script PHP chamado `patients.php` será responsável por listar pacientes. O script importa informações de pacientes a partir do arquivo `patients.json`.
* Recebendo uma requisição do tipo GET, o script retorna um JSON com os dados de todos os pacientes no seguinte formato:
`json
[
  {
    "id": "id do paciente",
    "name": "nome do paciente",
    "phone": "telefone do paciente",
    "email": "email do paciente",
    "notes": "observações sobre o paciente"
  },
]
`
## Front-end
O script `register.js` envia os dados do formulário para o script `register.php` e exibe a resposta em um alerta to tipo toast.
A página `patients.html` usa o script `patients.js` para fazer uma requisição para `patients.php` e receber a lista de pacientes cadastrados no arquivo `patients.json`.
