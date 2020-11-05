<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Task
 * @package App/Entity
 * @ORM\Table(name="Task")
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */

class Task
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    public $params;
    /** @ORM\Column(type="string", columnDefinition="ENUM('WAIT', 'ACCEPTED', 'DONE', 'REJECTED', 'BROKEN')") */
    private $state;
    /** @ORM\Column(type="datetime") */
    private $date_create;
    /** @ORM\Column(type="datetime") */
    private $date_done;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDateCreate()
    {
        return $this->date_create;
    }

    /**
     * @return mixed
     */
    public function getDateDone()
    {
        return $this->date_done;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $date_create
     */
    public function setDateCreate()
    {
        $this->date_create = new \DateTime("now");
    }

    /**
     * @param mixed $date_done
     */
    public function setDateDone()
    {
        $this->date_done = new \DateTime("now");
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params): void
    {
        $this->params = $params;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }

}