<?php
 /**
  * @author Fastcash <cash@fastcash.com.br>
  * @copyright 2013 Fastcash
  * @license MIT
  */
  /*
  * DO NOT MODIFY THIS CLASS. 
  * This class may be updated in the future by us.
  */
namespace Fastcash
{
    class TransactionRequest
    {
        public $Transaction;
        public $Client;
        public $ClientTransactionData;
        
        function __construct() {
            $this->Transaction = new TransactionData();
            $this->Client = new ClientData();
        }
    }
}
?>