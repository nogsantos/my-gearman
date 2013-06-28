<?php
/**
 * Chamada para o serviços no servidor externo.
 * É necessário configuração do servidor e da porta de
 * acesso para o serviço.
 */
$client = new GearmanClient();
$client->addServer('localhost', 4730);
$vHash = array(
    'chamada-1',
    $this->_session->id,
);
$hash  = serialize($vHash);
$client->doBackground('gearman-job',$hash);
