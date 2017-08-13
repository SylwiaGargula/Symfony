<?php

namespace KwejkBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Obrazek
 *
 * @ORM\Table(name="Obrazek")
 * @ORM\Entity(repositoryClass="KwejkBundle\Repository\ObrazekRepository")
 */
class Obrazek
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
     * @var string
     *
     * @ORM\Column(name="sciezka", type="string", length=255)
     */
    private $sciezka;

    /**
     * @var string
     *
     * @ORM\Column(name="tytul", type="string", length=255)
     */
    private $tytul;

    /**
     * @var int
     *
     * @ORM\Column(name="licznikkomentarzy", type="integer")
     */

    private $licznikkomentarzy;
    /**
     * Get licznikkomentarzy
     *
     * @return int
     */

    /**
     * @var int
     *
     * @ORM\Column(name="licznikplusow", type="integer")
     */

    private $licznikplusow;

    /**
     * @return mixed
     */
    public function getLicznikplusow()
    {
        return $this->licznikplusow;
    }

    /**
     * @param mixed $licznikplusow
     */
    public function setLicznikplusow($licznikplusow)
    {
        $this->licznikplusow = $licznikplusow;
    }
    /**
     * Get licznikplusow
     *
     * @return int
     */

    public function getLicznikkomentarzy()
    {
        return $this->licznikkomentarzy;
    }

    /**
     * @param mixed $licznikkomentarzy
     */
    public function setLicznikkomentarzy($licznikkomentarzy)
    {
        $this->licznikkomentarzy = $licznikkomentarzy;
    }

    /**
     * @return string
     */

    public function getTytul()
    {
        return $this->tytul;
    }

    /**
     * @param string $tytul
     */
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="date")
     */
    private $data;

    /**
     * @ORM\OneToMany(targetEntity="Komentarz", mappedBy="obrazek")
     */
    private $komentarze;

    public function __construct()
    {
        $this->komentarze = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getKomentarze()
    {
        return $this->komentarze;
    }

    /**
     * @param mixed $komentarze
     */
    public function setKomentarze($komentarze)
    {
        $this->komentarze = $komentarze;
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
     * Set sciezka
     *
     * @param string $sciezka
     *
     * @return Obrazek
     */
    public function setSciezka($sciezka)
    {
        $this->sciezka = $sciezka;

        return $this;
    }

    /**
     * Get sciezka
     *
     * @return string
     */
    public function getSciezka()
    {
        return $this->sciezka;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Obrazek
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
}

