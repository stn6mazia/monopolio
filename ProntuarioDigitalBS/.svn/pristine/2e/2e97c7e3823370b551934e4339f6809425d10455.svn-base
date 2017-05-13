<?php
class Response
{
    private $type;
    private $response;
    private $data;

    /**
     * Construtor
     * 
     * @param string $type array|json Tipo da resposta de retorno.
     */
    public function __construct($type = 'array') 
    {
        $this->type = strtolower($type);
        $this->response = [
            'status' => "error",
            'message' => "ERROR 404: Request not found"
        ];
    }

    /**
     * Configura os dados de reposta do retorno.
     * 
     * @param array[status|message|data] $response A chave 'status' aceita apenas os valores success, error e warning
     */
    public function set(array $response)
    {
        if (!empty($response['status'])) {
            if (($response['status'] === "success") || ($response['status'] === "error") || ($response['status'] === "warning")) {
                $this->response['status'] = $response['status'];
            }
        }
        if (!empty($response['message'])) {
            $this->response['message'] = $response['message'];
        }
        if (!empty($response['data'])) {
            $this->response['data'] = $response['data'];
        }
    }
    
    /**
     * Obtém o tipo do retorno
     * 
     * @return string array|json
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Configura o tipo do retorno.
     * 
     * @param string array|json $type
     */
    public function setType($type = 'array')
    {
        $this->type = strtolower($type);
    }

    /**
     * Obtém o status do retorno.
     * 
     * @return string success|error|warning
     */
    public function getStatus()
    {
        return $this->response['status'];
    }

    /**
     * Obtém a mensagem do retorno.
     * 
     * @return string
     */
    public function getMessage()
    {
        return $this->response['message'];
    }
    
    /**
     * Obtém os dados do retorno.
     * 
     * @return array
     */
    function getData() {
        return $this->data;
    }

    /**
     * Configura os dados do retorno, caso houver.
     * 
     * @param type $data
     */
    function setData($data = []) {
        $this->data = $data;
    }

    /**
     * Envia os dados de retorno para a view.
     * 
     * @return array|string Retorna um array ou um json
     */
    public function send()
    {
        if (!empty($this->data) && is_array($this->data)) {
            array_push($this->response, ['data' => $this->data]);
        }
        if ($this->type === 'json') {
            return $this->responseToJson();
        }
        return $this->response;
    }

    /**
     * Converte o array de resposta em formato json.
     * 
     * @return string
     */
    private function responseToJson()
    {
        return json_encode($this->response);
    }
}