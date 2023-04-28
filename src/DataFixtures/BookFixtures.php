<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i <= 10; $i++) {
            $book = new Book();
            $book->setTitle('Clean code');
            $book->setYear('2012');
            // this reference returns the Author object created in AutorFixtures
            $book->setAuthor($this->getReference('author_ref-1'));

            $manager->persist($book);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            AuthorFixtures::class
        ];
    }
}
