<?php

namespace Cls\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity()
 * @ORM\Table(name="equipment")
 */
class Equipment
{
    /**
     * @var integer
     * 
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @var UploadedFile
     */
    protected $image;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     */
    protected $path;

    /**
     * @var string
     * 
     * @ORM\Column(type="text")
     */
    protected $description;

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setImage(UploadedFile $image = null)
    {
        $this->image = $image;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    public function getUploadDir()
    {
        return 'uploads/equipment';
    }

    public function upload()
    {
        if (null === $this->image) {
            return;
        }

        $this->image->move(
            $this->getUploadRootDir(), 
            $this->image->getClientOriginalName()
        );

        $this->setPath($this->image->getClientOriginalName());

        $this->setImage(null);
    }
}