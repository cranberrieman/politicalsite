<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="questionary_question_option")
 */
class QuestionaryQuestionOption
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
	protected $questionid;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $answerid;

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
     * Set questionid
     *
     * @param integer $questionid
     *
     * @return QuestionOption
     */
    public function setQuestionid($questionid)
    {
        $this->questionid = $questionid;

        return $this;
    }

    /**
     * Get questionid
     *
     * @return integer
     */
    public function getQuestionid()
    {
        return $this->questionid;
    }

    /**
     * Set answerid
     *
     * @param integer $answerid
     *
     * @return QuestionaryQuestionOption
     */
    public function setAnswerid($answerid)
    {
        $this->answerid = $answerid;

        return $this;
    }

    /**
     * Get answerid
     *
     * @return integer
     */
    public function getAnswerid()
    {
        return $this->answerid;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return QuestionaryQuestionOption
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
     * @return QuestionaryQuestionOption
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
