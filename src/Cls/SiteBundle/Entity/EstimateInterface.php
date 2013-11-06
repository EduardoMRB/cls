<?php

namespace Cls\SiteBundle\Entity;

interface EstimateInterface
{
	public function getId();

	public function getEmail();

	public function getName();

	public function getPhone();

	public function getAbsolutePath();

	public function getDescription();
}