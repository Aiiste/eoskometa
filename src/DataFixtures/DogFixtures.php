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
        $dartas->setNickname('Dartas');
        $dartas->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $dartas->setGender('male');
        $dartas->setGang('Patinai');
        $dartas->setPedigree('<table>
                <tr>
                    <td rowspan ="4">Excellmagic L\'Broadway</td>
                    <td rowspan = "2">Stardust Kipling Von Skaer SL</td>
                    <td>Franz Kafka Von Skaer L</td>
                </tr>
                <tr>
                    <td>Boondox Havana</td>
                </tr>
                <tr>
                    <td rowspan="2">Windswept\'s Rhythm of the Rain</td>
                    <td>Riverwalk\'s Thunder Storm</td>
                </tr>
                <tr>
                    <td>Windswept shepherd moon sl</td>
                </tr>
                <tr>
                    <td rowspan ="4">	Kinchville Nice Girl for Excellmagic</td>
                    <td rowspan = "2">Timmy v.d. Langbroeker WildHoek</td>
                    <td>Zhoerka van der Tongelaar</td>
                </tr>
                <tr>
                    <td>Brendy v.d. Langbroeker WildHoek</td>
                </tr>
                <tr>
                    <td rowspan="2">Renessans Kleopatra II</td>
                    <td>Renessans Gerard Richard</td>
                </tr>
                <tr>
                    <td>Renessans Alkiona</td>
                </tr>
            </table>');

        $dorado = new Dog();
        $dorado->setName('Eos Kometa Dorado');
        $dorado->setNickname('Dorado');
        $dorado->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $dorado->setGender('male');
        $dorado->setGang('Patinai');

        $eros = new Dog();
        $eros->setName('Armarila\'s Style Verse Of Eos Love');
        $eros->setNickname('Eros');
        $eros->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $eros->setGender('male');
        $eros->setGang('Patinai');

        $aurora = new Dog();
        $aurora->setName('Eos Kometa Aurora Rise Up');
        $aurora->setNickname('Aurora');
        $aurora->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $aurora->setGender('female');
        $aurora->setGang('Kales');

        $debbie = new Dog();
        $debbie->setName('Debbonaire Siamon');
        $debbie->setNickname('Debi');
        $debbie->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $debbie->setGender('female');
        $debbie->setGang('Kales');

        $rose = new Dog();
        $rose->setName('Eos Kometa Damascus Rose');
        $rose->setNickname('Rose');
        $rose->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $rose->setGender('female');
        $rose->setGang('Kales');

        $selga = new Dog();
        $selga->setName('Selga Rude');
        $selga->setNickname('Selga');
        $selga->setAbout('Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat ea quod ipsa reiciendis praesentium dignissimos, repellendus maxime? Fugiat ipsa dignissimos, adipisci temporibus et rerum corporis repellendus natus ab tempore est ullam error sint quae officiis provident exercitationem excepturi iure bland itiis rem? Placeat provident ducimus quidem, optio recusandae expedita autem!');
        $selga->setGender('female');
        $selga->setGang('Palikę mus');

        $saira = new Dog();
        $saira->setName('Saira');
        $saira->setNickname('Saira');
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
