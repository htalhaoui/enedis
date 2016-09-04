<?php

namespace Grdf\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Class User
 * @package Grdf\MainBundle\Entity
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_USER = 'ROLE_USER';
    const ROLE_REPRESENTANT_TERRITORIAL = 'ROLE_REPRESENTANT_TERRITORIAL';
    const ROLE_MANAGER_AGENCE = 'ROLE_MANAGER_AGENCE';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    protected $firstname;

    /**
     * @var
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    protected $lastname;

    /**
     * @var
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    protected $phone;


    /**
     * @var
     *
     * @ORM\Column(name="nni", type="integer", nullable=true, nullable=true)
     */
    protected $nni;

    /**
     * @var
     *
     * @ORM\Column(name="typeCompte", type="string", nullable=true, nullable=true)
     */
   // protected $typeCompte;

    /**
     * @var
     *
     * @ORM\Column(name="agence", type="string", nullable=true, nullable=true)
     */
    protected $agence;

    /**
     * @var
     *
     * @ORM\Column(name="territoire", type="string", nullable=true, nullable=true)
     */
    protected $territoire;

    /**
     * @return mixed
     */
    public function getTerritoire()
    {
        return $this->territoire;
    }

    /**
     * @param mixed $territoire
     */
    public function setTerritoire($territoire)
    {
        $this->territoire = $territoire;
    }

    /**
     * @return mixed
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * @param mixed $agence
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;
    }

    /**
     * @return mixed
     */
/*    public function getTypeCompte()
    {
        return $this->typeCompte;
    }
*/
    /**
     * @param mixed $typeCompte
     */
   /* public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }
*/
    /**
     * @return mixed
     */
    public function getNni()
    {
        return $this->nni;
        
    }

    /**
     * @param mixed $nni
     */
    public function setNni($nni)
    {
        $this->nni = $nni;
        parent::setUsername($nni);
        $this->setUsername($nni);
        return $this;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->s = new ArrayCollection();
        $this->setEnabled(false);
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {       
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /* public function getDoneRole()
    {
            $message1='voila';

                echo '<script type="text/javascript">window.alert("'.$message1.'");</script>';  
            if(strcmp ($this->typeCompte, 'managerAgence') == 0 )
            {
                $message='managerAgence';

                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';  
                $this->addRole('MANAGER_AGENCE');
                $em = $this->getDoctrine()->getManager();
            $em->persist($this);
            $em->flush();   
            }
            else if(strcmp ($this->typeCompte, 'representantTerritorial') == 0 )
            {
                $message='representantTerritorial';

                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';  
                $this->addRole('ROLE_REPRESENTANT_TERRITORIAL');
                $em = $this->getDoctrine()->getManager();
            $em->persist($this);
            $em->flush();   
            } 
    }*/
}
