<?php

class MobWeb_NewsletterSubscriptionHandler_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function log($msg, $level = NULL)
	{
	    Mage::log($msg, $level, $this->_getModuleName() . '.log');
	}

	public function handleSubscriberSubscribe($subscriberEmail) {
		Mage::helper('newslettersubscriptionhandler')->log('Subscriber subscribed: ' . $subscriberEmail);

		// Add your custom code here
	}
}