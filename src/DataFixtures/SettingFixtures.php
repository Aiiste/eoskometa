<?php

namespace App\DataFixtures;

use App\Entity\Setting;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SettingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $email = new Setting();
        $email
            ->setName('email')
            ->setValue('eoskometa@gmail.com');

        $phone = new Setting();
        $phone
            ->setName('mobile_phone')
            ->setValue('+37067000534');

        $fb = new Setting();
        $fb
            ->setName('facebook')
            ->setValue('ausra.sudintiene');

        $ownerName = new Setting();
        $ownerName
            ->setName('owner_name')
            ->setValue('Aušra Sudintienė');

        $manager->persist($phone);
        $manager->persist($email);
        $manager->persist($fb);
        $manager->persist($ownerName);
        $manager->flush();
    }
}
