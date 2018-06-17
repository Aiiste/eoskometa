<?php
/**
 * Created by PhpStorm.
 * User: Aiste
 * Date: 2018-05-19
 * Time: 14:34
 */

namespace App\DataFixtures\ORM;

use App\Entity\Content;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class LoadContent extends Fixture
{
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function load(ObjectManager $manager)
    {
        $newsContent = new Content();
        $newsContent->setTitle($this->faker->word);
        $newsContent->setText($this->faker->paragraph(5));
        $newsContent->setImagePath($this->faker->imageUrl());

        $newsContent2 = new Content();
        $newsContent2->setTitle($this->faker->word);
        $newsContent2->setText($this->faker->paragraph(5));
        $newsContent2->setImagePath($this->faker->imageUrl());

        $veislynasContent = new Content();
        $veislynasContent -> setTitle($this->faker->word);
        $veislynasContent ->setText($this->faker->paragraph(5));
        $veislynasContent->setImagePath($this->faker->imageUrl());

        $kontaktaiContent = new Content();
        $kontaktaiContent -> setTitle($this->faker->word);
        $kontaktaiContent ->setText($this->faker->paragraph(2));


        $manager->persist($newsContent);
        $manager->persist($newsContent2);
        $manager->persist($veislynasContent);
        $manager->persist($kontaktaiContent);
        $manager->flush();
    }
}