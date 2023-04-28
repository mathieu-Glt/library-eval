<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture

{

    // public const AUTHOR_REFERENCE = 'author_ref-';

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i <= 10; $i++) {
            $author = new Author;
            $author->setFirstname('Robert C.');
            $author->setLastname('Martin');
            // other fixtures can get this object using the AuthorFixtures::AUTHOR_REFERENCE constant
            $this->addReference('author_ref-' . $i, $author);

            $manager->persist($author);
        }
        $manager->flush();
    }
}
