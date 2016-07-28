<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Questionary;
use AppBundle\Entity\QuestionaryQuestion;
use AppBundle\Entity\Answer;
use AppBundle\Entity\QuestionaryQuestionOption;

class LoadTestQuestionaryData extends AbstractFixture implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$questionary = new Questionary();
		$questionary->setName("Тестовый опросник");
		$questionary->setDescription("Это описание тестового опросника");
		$questionary->setCreated(new \DateTime());
		$manager->persist($questionary);

		$manager->flush();
		//$this->addReference('test-questionary', $questionary);

		$questionaryQuestion1 = new QuestionaryQuestion();
		$questionaryQuestion1->setQuestionaryid($questionary->getId());
		$questionaryQuestion1->setText("Что делать?");
		$questionaryQuestion1->setSerialnumber(1);
		$manager->persist($questionaryQuestion1);

		$questionaryQuestion2 = new QuestionaryQuestion();
		$questionaryQuestion2->setQuestionaryid($questionary->getId());
		$questionaryQuestion2->setText("Кто виноват?");
		$questionaryQuestion2->setSerialnumber(2);
		$manager->persist($questionaryQuestion2);

		$questionaryQuestion3 = new QuestionaryQuestion();
		$questionaryQuestion3->setQuestionaryid($questionary->getId());
		$questionaryQuestion3->setText("Как дела?");
		$questionaryQuestion3->setSerialnumber(3);
		$manager->persist($questionaryQuestion3);

		$manager->flush();

		$answer1 = new Answer();
		$answer1->setText("Да");
		$manager->persist($answer1);
		$manager->flush();

		$answer2 = new Answer();
		$answer2->setText("Нет");
		$manager->persist($answer2);
		$manager->flush();

		$answer3 = new Answer();
		$answer3->setText("Затрудняюсь ответить");
		$manager->persist($answer3);

		$manager->flush();

		$questionaryQuestionOption11 = new QuestionaryQuestionOption();
		$questionaryQuestionOption11->setQuestionid($questionaryQuestion1->getId());
		$questionaryQuestionOption11->setText($answer1->getText());
		$questionaryQuestionOption11->setAnswerid($answer1->getId());
		$questionaryQuestionOption11->setSerialnumber(1);
		$manager->persist($questionaryQuestionOption11);

		$questionaryQuestionOption12 = new QuestionaryQuestionOption();
		$questionaryQuestionOption12->setQuestionid($questionaryQuestion1->getId());
		$questionaryQuestionOption12->setText($answer2->getText());
		$questionaryQuestionOption12->setAnswerid($answer2->getId());
		$questionaryQuestionOption12->setSerialnumber(2);
		$manager->persist($questionaryQuestionOption12);

		$questionaryQuestionOption13 = new QuestionaryQuestionOption();
		$questionaryQuestionOption13->setQuestionid($questionaryQuestion1->getId());
		$questionaryQuestionOption13->setText($answer3->getText());
		$questionaryQuestionOption13->setAnswerid($answer3->getId());
		$questionaryQuestionOption13->setSerialnumber(3);
		$manager->persist($questionaryQuestionOption13);

		$questionaryQuestionOption21 = new QuestionaryQuestionOption();
		$questionaryQuestionOption21->setQuestionid($questionaryQuestion2->getId());
		$questionaryQuestionOption21->setText($answer1->getText());
		$questionaryQuestionOption21->setAnswerid($answer1->getId());
		$questionaryQuestionOption21->setSerialnumber(3);
		$manager->persist($questionaryQuestionOption21);

		$questionaryQuestionOption22 = new QuestionaryQuestionOption();
		$questionaryQuestionOption22->setQuestionid($questionaryQuestion2->getId());
		$questionaryQuestionOption22->setText($answer2->getText());
		$questionaryQuestionOption22->setAnswerid($answer2->getId());
		$questionaryQuestionOption22->setSerialnumber(2);
		$manager->persist($questionaryQuestionOption22);

		$questionaryQuestionOption23 = new QuestionaryQuestionOption();
		$questionaryQuestionOption23->setQuestionid($questionaryQuestion2->getId());
		$questionaryQuestionOption23->setText($answer3->getText());
		$questionaryQuestionOption23->setAnswerid($answer3->getId());
		$questionaryQuestionOption23->setSerialnumber(1);
		$manager->persist($questionaryQuestionOption23);

		$questionaryQuestionOption31 = new QuestionaryQuestionOption();
		$questionaryQuestionOption31->setQuestionid($questionaryQuestion3->getId());
		$questionaryQuestionOption31->setText($answer1->getText());
		$questionaryQuestionOption31->setAnswerid($answer1->getId());
		$questionaryQuestionOption31->setSerialnumber(1);
		$manager->persist($questionaryQuestionOption31);

		$questionaryQuestionOption32 = new QuestionaryQuestionOption();
		$questionaryQuestionOption32->setQuestionid($questionaryQuestion3->getId());
		$questionaryQuestionOption32->setText($answer2->getText());
		$questionaryQuestionOption32->setAnswerid($answer2->getId());
		$questionaryQuestionOption32->setSerialnumber(2);
		$manager->persist($questionaryQuestionOption32);

		$questionaryQuestionOption33 = new QuestionaryQuestionOption();
		$questionaryQuestionOption33->setQuestionid($questionaryQuestion3->getId());
		$questionaryQuestionOption33->setText($answer3->getText());
		$questionaryQuestionOption33->setAnswerid($answer3->getId());
		$questionaryQuestionOption33->setSerialnumber(3);
		$manager->persist($questionaryQuestionOption33);

		$manager->flush();
	}

}