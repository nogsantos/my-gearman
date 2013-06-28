<?php
/**
 *
 * Gearman Work para gerenciamento do serviço. (http://gearman.org/)
 *
 * @author Fabricio Nogueira
 *
 * @since 28-Jun-2013
 *
 * @version 1.0.0
 *
 */
require_once 'Funcoes.php';
/*
 * Criando um objeto Worker
 */
$worker = new GearmanWorker();
/*
 * Adicionando o servidor default e a porta padrão do servidor.
 */
$worker->addServer('localhost', 4730);
/*
 * Chamada da função
 */
$worker->addFunction('gearman-job', 'job');
/*
 * Inicialização do serviço.
 */
system('clear');
print "GEARMAN WORK >: Aguardando Serviço...";
while($worker->work()){
    if ($worker->returnCode() != GEARMAN_SUCCESS){
        Funcoes::geraLog('logs/erros', 'erro',"Worker Error: \n". $worker->error());
        break;
    }else{
        print "Serviço finalizado com sucesso! \n";
        print "-------------------------------------------------------------\n";
        print "GEARMAN WORK >: Aguardando Serviço...";
    }
}
/**
 * @param Array
 *  [0] => Nome do serviço
 *  [1] => Parametros
 */
function job($job){
    system('clear');
    echo 'Serviço recebido: ' . $job->handle() . "\n";
   /*
    * Unserializando dados enviados pelo cliente de chamada.
    */
    $dados = unserialize($job->workload());
    
    switch ($dados[0]) {
        case 'chamada-1':
            print "SISTEMA 1\n";
            print "ID: $dados[1] \n";
            print "Job em processos...";
            require_once 'controllers/DefaultController.php';
            $oDefault = new DefaultController();
            $oDefault->defaultAction($dados[1]);
            break;
    }
}
