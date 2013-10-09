<?php

namespace Cls\SiteBundle\Entity;

interface ContactInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @param string
     */
    public function setMessage($message);
}