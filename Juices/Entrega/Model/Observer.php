<?php

class Juices_Entrega_Model_Observer{

	public function customerCheckoutAdd(Varien_Event_Observer $observer){


        $product = $observer->getEvent()->getProduct();

        $entrega = Mage::app()->getFrontController()->getRequest()->getParam('data_entrega', false);
        $sabor 	 = Mage::app()->getFrontController()->getRequest()->getParam('sabor', false);

	Mage::log("Valor Entrega: {$entrega} - Valor Sabor: {$sabor}", null, 'atualizacoes-produtos.log');
	
    }

}
