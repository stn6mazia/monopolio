<?php
/**
 * Verifica chaves de arrays
 *
 * Verifica se a chave existe no array e se ela tem algum valor.
 * Obs.: Essa função está no escopo global, pois, vamos precisar muito da mesma.
 *
 * @param array  $array O array
 * @param string $key   A chave do array
 * @return string|null  O valor da chave do array ou nulo
 */
function chk_array ( $array, $key ) {
    // Verifica se a chave existe no array
    if ( isset( $array[ $key ] ) && ! empty( $array[ $key ] ) ) {
        // Retorna o valor da chave
        return $array[ $key ];
    }
    
    // Retorna nulo por padrão
    return null;
}