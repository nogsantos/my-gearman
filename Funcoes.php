<?php
/**
 *
 * Descrição: Funções diversas.
 *
 * @author Fabricio Nogueira
 *
 * @since 28-Jun-2013
 *
 * @version 1.0.0
 *
 */
class Funcoes {
    /**
     * Gravando arquivos de log no diretório informado
     * 
     * @author Fabricio Nogueira
     * @since 26 JUN 2013
     * 
     * @param String $dir String com o caminho do diretório sem a barra final.
     * @param String $logName String com o nome do arquivo de log sem a extensão.
     * @param String $text String com o corpo do log.
     */
    static public function geraLog($dir, $logName, $text){
        $file = fopen($dir.'/'.$logName.'.log', 'a');
        fwrite($file, $text);
        fclose($file);    
    }
}
