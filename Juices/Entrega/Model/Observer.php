<?php

class Juices_Entrega_Model_Observer{

	public function customerCheckoutAdd(Varien_Event_Observer $observer){


        $product = $observer->getEvent()->getProduct();

        $entrega = Mage::app()->getFrontController()->getRequest()->getParam('data_entrega', false);
        $sabor 	 = Mage::app()->getFrontController()->getRequest()->getParam('sabor', false);

		Mage::log("Valor Entrega: {$entrega} - Valor Sabor: {$sabor}", null, 'atualizacoes-produtos.log');


        /*$associatedProducts[] = $product->getTypeInstance(true)->getAssociatedProducts($product);

        foreach ($associatedProducts as $singleProduct) {
			foreach ($singleProduct as $product) {

			  $product_id = $product->getId();

			  $productCollection = Mage::getModel("catalog/product")->load($product_id);

				foreach ($productCollection->getOptions() as $value){*/
				
					/*$qty   = $product->getQty();
					$name  = $product->getName();
					$id    = $value->getid();
					$sku   = $value->getSku();
					$type  = $value->getType();
					$title = $value->getTitle();	
					Quantidade: {$qty} - Name:{$name} - Id:{$id} - Sku:{$sku} - Type: {$type} - Title= {$title} -  
					*/

					

					
					
	/*				}
			  
				}
			}
*/

				
			

		
		 
		
    }

}
