<?php

namespace Cls\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity()
 * @ORM\Table(name="estimate")
 */
class Estimate implements EstimateInterface
{
    /**
     * @var integer
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="email", type="string", length=50)
     * @Assert\Email(message="Por favor, insira um email valido")
     */
    protected $email;

    /**
     * @var string
     * 
     * @ORM\Column(name="name", type="string", length=100)
     * @Assert\NotBlank(message="Campo 'nome' não pode estar vazio")
     */
    protected $name;

    /**
     * @var string
     * 
     * @ORM\Column(name="phone", type="string", length=50)
     */
    protected $phone;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $path;

    /**
     * @var UploadedFile
     * 
     * @Assert\File()
     */
    protected $file;

    /**
     * @var string
     * 
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        
        return $this;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Retorna caminho absoluto pra arquivo
     * 
     * @return mixed
     */
    public function getAbsolutePath()
    {
    	return null === $this->path
    		? null
    		: $this->getUploadRootDir() . '/' . $this->path;
    }

    /**
     * Retorna caminho web para arquivo (para ser colocado nas views)
     * 
     * @return mixed
     */
    public function getWebPath()
    {
    	return null === $this->path
    		? null
    		: $this->getUploadDir() . '/' . $this->path;
    }

    /**
     * Retorna caminho do diretório de upload de arquivos de orçamento (Estimate)
     * 
     * @return string
     */
    protected function getUploadRootDir()
    {
    	return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    /**
     * Retorna nome do diretório de upload de arquivos para orçamento (Estimate)
     * 
     * @return string
     */
    public function getUploadDir()
    {
    	return 'uploads/estimate';
    }

    /**
     * Faz upload de arquivo
     */
    public function upload()
    {
    	if (null === $this->getFile()) {
    		return;
    	}
    	
    	// Move arquivo temporario para pasta de uploads
    	$this->getFile()->move(
    		$this->getUploadRootDir(),
    		$this->getFile()->getClientOriginalName()
		);

		$this->setPath($this->getFile()->getClientOriginalName());

		// Limpa arquivo temporario
		$this->file = null;
    }
}