<?php

namespace KwejkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Komentarz
 *
 * @ORM\Table(name="Komentarz")
 * @ORM\Entity(repositoryClass="KwejkBundle\Repository\KomentarzRepository")
 */
class Komentarz
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ocena", type="integer")
     */
    private $ocena;

    /**
     * @return int
     */
    public function getOcena()
    {
        return $this->ocena;
    }

    /**
     * @param int $ocena
     */
    public function setOcena($ocena)
    {
        $this->ocena = $ocena;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="tresc", type="string", length=255)
     */
    private $tresc;

    /**
     * @ORM\ManyToOne(targetEntity="Obrazek", inversedBy="komentarze")
     * @ORM\JoinColumn(name="obrazek_id", referencedColumnName="id")
     */
    protected $obrazek;

    /**
     * @ORM\ManyToOne(targetEntity="Uzytkownik", inversedBy="komentarze")
     * @ORM\JoinColumn(name="uzytkownik_id", referencedColumnName="id")
     */
    protected $uzytkownik;

    /**
     * @return mixed
     */
    public function getUzytkownik()
    {
        return $this->uzytkownik;
    }

    /**
     * @param mixed $uzytkownik
     */
    public function setUzytkownik($uzytkownik)
    {
        $this->uzytkownik = $uzytkownik;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tresc
     *
     * @param string $tresc
     *
     * @return Komentarz
     */
    public function setTresc($tresc)
    {
        $this->tresc = $tresc;

        return $this;
    }

    /**
     * Get tresc
     *
     * @return string
     */
    public function getTresc()
    {
        return $this->tresc;
    }

    /**
     * @return mixed
     */
    public function getObrazek()
    {
        return $this->obrazek;
    }

    /**
     * @param mixed $obrazek
     */
    public function setObrazek($obrazek)
    {
        $this->obrazek = $obrazek;
    }
}

