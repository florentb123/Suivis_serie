<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }


    public function load(ObjectManager $manager)
    {
        $this->user($manager);
        // $user = new User();
        // $user->setUsername('test');
        // $user->setPassword($this->passwordEncoder->encodePassword(
        //         $user,
        //        '12345'
        //  ));
        //  $manager->persist($user);

        // $manager->flush();
    }
    public function user(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {
            $user = new User;
            $user->setUsername($faker->word);
            $user->setRoles(['ROLE_ADMIN']);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                '1234'
            ));
            $manager->persist($user);
        }
        $manager-> flush();
    }
}
