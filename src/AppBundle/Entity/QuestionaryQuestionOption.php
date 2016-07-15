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
	 * @ORM\Column(type="string")
	 */
	protected $text;

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
     * Set text
     *
     * @param string $text
     *
     * @return QuestionOption
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
}
