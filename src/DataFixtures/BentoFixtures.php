<?php

namespace App\DataFixtures;

use App\Entity\Emoji;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BentoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $emoji = new Emoji();
        $emoji->setEmoji('🍱');
        $manager->persist($emoji);

        $emoji = new Emoji();
        $emoji->setEmoji('😂');
        $manager->persist($emoji);

        $emoji = new Emoji();
        $emoji->setEmoji('😏');
        $manager->persist($emoji);

        $emoji = new Emoji();
        $emoji->setEmoji('🥰');
        $manager->persist($emoji);

        $emoji = new Emoji();
        $emoji->setEmoji('😻');
        $manager->persist($emoji);

        $emoji = new Emoji();
        $emoji->setEmoji('😬');
        $manager->persist($emoji);

        $emoji = new Emoji();
        $emoji->setEmoji('🤓');
        $manager->persist($emoji);

        $emoji = new Emoji();
        $emoji->setEmoji('😒');
        $manager->persist($emoji);

        $emoji = new Emoji();
        $emoji->setEmoji('🎉');
        $manager->persist($emoji);

        $emoji = new Emoji();
        $emoji->setEmoji('☕');
        $manager->persist($emoji);

        $manager->flush();
    }
}
