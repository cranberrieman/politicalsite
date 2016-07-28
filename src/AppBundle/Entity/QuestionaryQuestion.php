<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="questionary_question")
 */
class QuestionaryQuestion
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $questionaryid;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $text;

    /**
     * @ORM\Column(type="integer")
     */
    protected $ordernumber;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set questionaryid
     *
     * @param integer $questionaryid
     *
     * @return Question
     */
    public function setQuestionaryid($questionaryid)
    {
        $this->questionaryid = $questionaryid;

        return $this;
    }

    /**
     * Get questionaryid
     *
     * @return integer
     */
    public function getQuestionaryid()
    {
        return $this->questionaryid;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Question
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set ordernumber
     *
     * @param integer $ordernumber
     *
     * @return QuestionaryQuestion
     */
    public function setOrdernumber($ordernumber)
    {
        $this->ordernumber = $ordernumber;

        return $this;
    }

    /**
     * Get ordernumber
     *
     * @return integer
     */
    public function getOrdernumber()
    {
        return $this->ordernumber;
    }
}
