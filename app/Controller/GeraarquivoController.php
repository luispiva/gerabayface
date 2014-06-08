<?php
App::uses('AppController', 'Controller');

class GeraarquivoController extends AppController
{
 /**
 * Esse controller não irá usar nenhum model
 *
 * @var array
  *  */ 
    public $uses = array();
    
  /**  
 * Index metod
 * 
 * @return void
 */   
    public function index()
    {
        
    }
    
 /**  
 * viewPDF method Gera o arquivo pdf com os dados do cliente
 * 
 */   
    
public function viewPdf() {
    $this->layout = 'pdf';
   $this->render();
 }       
}
?>
