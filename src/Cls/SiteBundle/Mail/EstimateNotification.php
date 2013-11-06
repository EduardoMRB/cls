<?php

namespace Cls\SiteBundle\Mail;

use Cls\SiteBundle\Entity\EstimateInterface;
use Symfony\Component\Templating\EngineInterface;

class EstimateNotification
{
	protected $mailer;

	/**
	 * @var EngineInterface
	 */
	protected $templating;

	/**
	 * @var string
	 */
	protected $from;

	public function __construct($mailer, EngineInterface $templating, $from)
	{
		$this->mailer = $mailer;
		$this->templating = $templating;
		$this->from = $from;
	}

    public function sendMailNotification(EstimateInterface $estimate)
    {
    	$rendered = $this->templating->render('ClsSiteBundle:Estimate:estimate_notification.txt.twig', array(
    		'estimate' => $estimate,
		));

    	$message = \Swift_Message::newInstance()
    		->setSubject('CLS - Orçamento')
    		->setTo($estimate->getEmail())
    		->setFrom($this->from)
    		->setBody($rendered)
		;

		if (is_file($estimate->getAbsolutePath())) {
    		$message->attach(\Swift_Attachment::fromPath($estimate->getAbsolutePath()));
		}

		$this->mailer->send($message);
    }
}