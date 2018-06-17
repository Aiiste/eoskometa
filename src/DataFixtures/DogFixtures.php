<?php

namespace App\DataFixtures;

use App\Entity\Dog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DogFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $dartas = new Dog();
        $dartas->setName('Excellmagic L\'Dewey');
        $dartas->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $dartas->setGender('male');
        $dartas->setGang('Patinai');

        $dorado = new Dog();
        $dorado->setName('Eos Kometa Dorado');
        $dorado->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $dorado->setGender('male');
        $dorado->setGang('Patinai');

        $eros = new Dog();
        $eros->setName('Armarila\'s Style Verse Of Eos Love');
        $eros->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $eros->setGender('male');
        $eros->setGang('Patinai');

        $aurora = new Dog();
        $aurora->setName('Eos Kometa Aurora Rise Up');
        $aurora->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $aurora->setGender('female');
        $aurora->setGang('Kales');

        $debbie = new Dog();
        $debbie->setName('Debbonaire Siamon');
        $debbie->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $debbie->setGender('female');
        $debbie->setGang('Kales');

        $rose = new Dog();
        $rose->setName('Eos Kometa Damascus Rose');
        $rose->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $rose->setGender('female');
        $rose->setGang('Kales');

        $selga = new Dog();
        $selga->setName('Selga');
        $selga->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $selga->setGender('female');
        $selga->setGang('Palikę mus');

        $saira = new Dog();
        $saira->setName('Saira');
        $saira->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $saira->setGender('female');
        $saira->setGang('Palikę mus');

        $manager->persist($dartas);
        $manager->persist($dorado);
        $manager->persist($eros);

        $manager->persist($aurora);
        $manager->persist($debbie);
        $manager->persist($rose);

        $manager->persist($selga);
        $manager->persist($saira);

        $manager->flush();
    }
}
