<?php 

namespace App\Entity;

use \App\Db\Database;

class Vaga {

    /*
    * Identificador unico da vaga 
    * @var integer
    */
    public $id;

    /**
     * Titulo da vaga
     * @var string
     */
    public $titulo;

    /**
     * Descrição da vaga (pode conter html)
     * @var string
     */
    public $descricao;

    /**
     * Define se a vaga ativa
     * @var string(s/n)
     */

     public $ativo;
     /**
      * Data de publicação da vaga 
      * @var string 
      * 
      */
      public $data;

      /**
       * Metodo responsavel por cadastrar uma nova vaga no banco
       * @return boolean
       */

      public function cadastrar(){
          // DEFINE A DATA
          $this->data = date('Y-m-d H:i:s');
          // INSERIR A VAGA NO BANCO
          $obDatabase = new Database('vagas');
          echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;          
          // ATRIBUIR O ID DA VAGA NA INSANCIA
          //RETORNAR SUCESSO

      }


}

