<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Product
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="products")
 */
class Product
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $choice;

    /**
     * @return mixed
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * @param mixed $choice
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;
        return $this;
    }



//    /**
//     * @ORM\Column(type="datetime")
//     */
//    protected $ladate;
//
//    /**
//     * @return mixed
//     */
//    public function getLadate()
//    {
//        return $this->ladate;
//    }
//
//    /**
//     * @param mixed $ladate
//     */
//    public function setLadate($ladate)
//    {
//        $this->ladate = $ladate;
//        return $this;
//    }


//    /**
//     * @ORM\Column(name="`integer`", type="integer")
//     */
//    protected $integer;
//
//    /**
//     * @ORM\Column(type="decimal", scale=3)
//     */
//    protected $number;
//
//    /**
//     * @ORM\Column(type="decimal", scale=3)
//     */
//    protected $floater;
//
//    /**
//     * @ORM\Column(type="decimal", scale=2)
//     */
//    protected $money;
//
////    /**
////     * @ORM\Column(type="string")
////     * @Assert\Length(min="10", minMessage="this value was too short")
////     */
////    protected $title;
////
////    /**
////     * @ORM\Column(type="string")
////     * @Assert\Email()
////     */
////    protected $email;
//
////    /**
////     * @ORM\Column(type="datetime")
////     */
////    protected $availableFrom;
//
////    /**
////     * @ORM\Column(type="text")
////     */
////    protected $description;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

//    /**
//     * @return mixed
//     */
//    public function getInteger()
//    {
//        return $this->integer;
//    }
//
//    /**
//     * @param mixed $integer
//     */
//    public function setInteger($integer)
//    {
//        $this->integer = $integer;
//        return $this;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getNumber()
//    {
//        return $this->number;
//    }
//
//    /**
//     * @param mixed $number
//     */
//    public function setNumber($number)
//    {
//        $this->number = $number;
//        return $this;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getFloater()
//    {
//        return $this->floater;
//    }
//
//    /**
//     * @param mixed $float
//     */
//    public function setFloater($floater)
//    {
//        $this->floater = $floater;
//        return $this;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getMoney()
//    {
//        return $this->money;
//    }
//
//    /**
//     * @param mixed $money
//     */
//    public function setMoney($money)
//    {
//        $this->money = $money;
//        return $this;
//    }


//    /**
//     * @return mixed
//     */
//    public function getTitle()
//    {
//        return $this->title;
//    }
//
//    /**
//     * @param mixed $title
//     */
//    public function setTitle($title)
//    {
//        $this->title = $title;
//        return $this;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAvailableFrom()
//    {
//        return $this->availableFrom;
//    }
//
//    /**
//     * @param mixed $availableFrom
//     */
//    public function setAvailableFrom($availableFrom)
//    {
//        $this->availableFrom = $availableFrom;
//        return $this;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getDescription()
//    {
//        return $this->description;
//    }
//
//    /**
//     * @param mixed $description
//     */
//    public function setDescription($description)
//    {
//        $this->description = $description;
//        return $this;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    /**
//     * @param mixed $email
//     */
//    public function setEmail($email)
//    {
//        $this->email = $email;
//        return $this;
//    }
//

}