<?php
class Request
{
    /**
     * Filtra os dados obtidos do formulário.
     *
     * @param string $name Atributo name do formulário.
     * @param bool $trimed Se <code>true</code> remove espaços em branco.
     * @return string|int|null Retorna o valor filtrado ou null.
     */
    public static function filterData($name = null, $trimed = true)
    {
        $method = self::getRequestType();
    	if ( !empty($name) ) {
            $filteredData = filter_input($method, $name, FILTER_SANITIZE_SPECIAL_CHARS);
            return ( $trimed ) ? trim($filteredData) : $filteredData;
        }
        return null;
    }
    
    /**
     * Retorna o número da constante de acordo com o tipo do método.
     * 
     * @return int|null
     */
    private static function getRequestType()
    {
        if (isset($_SERVER['REQUEST_METHOD'])) {
            switch ($_SERVER['REQUEST_METHOD']) {
                case 'POST': 
                    return INPUT_POST;
                case 'GET':
                    return INPUT_GET;
            }    
        }
        return null;
    }
}