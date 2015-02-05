<?php

class MobWeb_NewsletterSubscriptionHandler_Model_Observer
{
	public function newsletterSubscriberSaveAfter($observer)
	{
		// Get the subscriber object
		$subscriber = $observer->getEvent()->getSubscriber();

		// Check if the subscription status has changed
		if($subscriber->getIsStatusChanged()) {

			// Get the current status
			$subscriberStatus = $subscriber->getStatus();

			// Get the subscriber email
			$subscriberEmail  = $subscriber->getSubscriberEmail();

			if($subscriberStatus === Mage_Newsletter_Model_Subscriber::STATUS_SUBSCRIBED) {
				Mage::helper('newslettersubscriptionhandler')->handleSubscriberSubscribe($subscriberEmail);
			}
		}

		// Return the observer object
		return $observer;
	}
}