<?php
/**
 * Model Default.
 * 
 * @author Fabricio Nogueira
 * @since 26 JUN 2013
 * 
 */
class Default extends Zend_Db_Table_Abstract{
    protected $_name    = 'TABLE';
    protected $_primary = array(
        'PRIMARY_KEY',
    );
    protected $_schema  = 'DEFAULT';
    protected $_sequence = true;
        
    public function init() {
        
    }
    /**
     * Recupera todos os dados
     */
    public function getAll(){
        return $this->fetchAll();
    }
    /**
     * Recupera dados por id
     */
    public function getForId($id){
        return $this->fetchAll('ID = '. (int) $id);
    }
    /**
     * Deletar
     */
    public function delete($where) {
        parent::delete($where);
    }
}
