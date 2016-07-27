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
}
