<?php

namespace App\DataFixtures;

use App\Entity\Users;
use App\Entity\UserTasks;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
        $this->loadTasks($manager);
    }

    public function loadUsers(ObjectManager $manager){
        for($i=0 ; $i<=10 ; $i++){
            $user = new Users();
            $user->setName($this->faker->name);

            $this->addReference("user_$i",$user);

            $manager->persist($user);
        }
        $manager->flush();
    }

    public function loadTasks(ObjectManager $manager){
        for($i=0 ; $i<20 ; $i++){
            $task = new UserTasks();
            $task->setDescription($this->faker->text);
            $task->setState($this->faker->boolean);

            $user= $this->getReference("user_".rand(0,10));

            $task->setUserId($user);

            $manager->persist($task);
        }
        $manager->flush();
    }
}
