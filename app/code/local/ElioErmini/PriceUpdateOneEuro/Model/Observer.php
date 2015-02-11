<?php
class ElioErmini_PriceUpdateOneEuro_Model_Observer
{

	public function applyOneDiscount(Varien_Event_Observer $observer)
	{
		/* @var $item Mage_Sales_Model_Quote_Item */
		$item = $observer->getQuoteItem();
		if ($item->getParentItem()) {
			$item = $item->getParentItem();
		}

		// Define New Special Price of One Euro
		$specialPrice = 1;
		// Set Special Price
		$item->setCustomPrice($specialPrice);
		$item->setOriginalCustomPrice($specialPrice);
		$item->getProduct()->setIsSuperMode(true);
	}

}
