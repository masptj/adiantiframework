<?php
namespace Pwd\PTimer;

/**
 * PTimer 
 *
 * @version    2.0
 * @version adianti framework 2.0
 * @package    PTimer
 * @author     Alexandre E. Souza
 
 */
 

class Timer {


private $time;
private $page;

/**

@param  $time tempo para reexecutar o timer
@param $page pagina a ser exibida
*/
function __construct($page,$time){



$this->time = $time;
$this->page = $page;


}





public function show(){


$time = new TElement('div');

$time->id = "ptimer_".uniqid();

$url = 'engine.php';

$code = "

timer($url,'$this->page',$this->time,'$time->id');

";

 TScript::create($code);
 



$time->show();

}



}



?>