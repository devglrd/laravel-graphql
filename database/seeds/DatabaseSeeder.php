<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        for ($i = 1; $i <= 10; $i++) {
            $f = \Faker\Factory::create();
            $u = new \App\Models\User();
            $u->name = $f->name;
            $u->email = $f->email;
            $u->password = bcrypt("passwrd");
            $u->save();
        }
        for ($i = 1; $i <= 10; $i++) {
            
            $p = new \App\Models\Post();
            $p->title = "Titre $i";
            $p->content = "content $i";
            $p->fk_user_id = rand(1, 10);
            $p->save();
        }
        for ($i = 1; $i <= 10; $i++) {
            $f = \Faker\Factory::create();
            $c = new \App\Models\Comment();
            $c->content = "content $i";
            $c->fk_post_id = rand(1, 10);
            $c->save();
            
        }
        
    }
}
