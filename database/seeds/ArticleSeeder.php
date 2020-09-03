<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'name' => 'Potato',
            'category_id' => 1,
            'price' => 20.50,
            'description' => 'a big old potato',
            'created_at' => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'name' => 'Honeymelon',
            'category_id' => 1,
            'price' => 4.00,
            'description' => 'a big juicy honeymelon',
            'created_at' => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'name' => 'Bread',
            'category_id' => 1,
            'price' => 1.99,
            'description' => 'white bread',
            'created_at' => Carbon::now()
        ]);
        
        DB::table('articles')->insert([
            'name' => 'Goat and venison madras',
            'category_id' => 1,
            'price' => 16.99,
            'description' => 'Medium-hot madras made with goat and venison',
            'created_at' => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'name' => 'Bacon and falafel burgers',
            'category_id' => 1,
            'price' => 12.50,
            'description' => 'Tasty burgers made from back bacon and falafel, served in a roll',
            'created_at' => Carbon::now()
        ]);


        DB::table('articles')->insert([
            'name' => 'Starcraft 2',
            'category_id' => 2,
            'price' => 29.99,
            'description' => 'space red alert 2 or warcraft 3 just not refucked',
            'created_at' => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'name' => 'Factorio',
            'category_id' => 2,
            'price' => 19.99,
            'description' => 'kill all those pesky biters as ya try to build ya base to launch to space',
            'created_at' => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'name' => 'Metal Gear Solid',
            'category_id' => 2,
            'price' => 29.99,
            'description' => 'play as big boss in this tactical espionage action game',
            'created_at' => Carbon::now()
        ]);
        
        DB::table('articles')->insert([
            'name' => 'Risk of Rain 2',
            'category_id' => 2,
            'price' => 24.99,
            'description' => 'survival game with some lore somewhere',
            'created_at' => Carbon::now()
        ]);
        
        DB::table('articles')->insert([
            'name' => 'Bloons TD 6',
            'category_id' => 2,
            'price' => 8.19,
            'description' => 'shoot them bloons with some monkeys, cannons, boats and maybe a god?',
            'created_at' => Carbon::now()
        ]);

        
        DB::table('articles')->insert([
            'name' => 'Milk',
            'category_id' => 3,
            'price' => 0.50,
            'description' => 'from a cow, mooo',
            'created_at' => Carbon::now()
        ]);
                
        DB::table('articles')->insert([
            'name' => 'Chocolate milk',
            'category_id' => 3,
            'price' => 0.99,
            'description' => 'not from a cow but it does have some milk in it',
            'created_at' => Carbon::now()
        ]);
                
        DB::table('articles')->insert([
            'name' => '7up',
            'category_id' => 3,
            'price' => 1.25,
            'description' => 'sprite but better',
            'created_at' => Carbon::now()
        ]);
                
        DB::table('articles')->insert([
            'name' => 'Fanta',
            'category_id' => 3,
            'price' => 1.25,
            'description' => 'fanta is a brand of fruit-flavored carbonated soft drinks',
            'created_at' => Carbon::now()
        ]);
                
        DB::table('articles')->insert([
            'name' => 'Hero Cassis',
            'category_id' => 3,
            'price' => 1.25,
            'description' => 'Hero Cassis is a refreshing black currant soft drink from the Netherlands',
            'created_at' => Carbon::now()
        ]);
        
        
        DB::table('articles')->insert([
            'name' => 'One piece',
            'category_id' => 4,
            'price' => 2.99,
            'description' => 'nice pirate on an adventure',
            'created_at' => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'name' => 'fairy tail',
            'category_id' => 4,
            'price' => 3.99,
            'description' => 'wizards going on adventures with their guild friends',
            'created_at' => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'name' => 'bleach',
            'category_id' => 4,
            'price' => 4.99,
            'description' => 'follow a new Soul Reaper, dedicating his life to protecting the innocent and helping the tortured spirits themselves find peace',
            'created_at' => Carbon::now()
        ]);
        
        DB::table('articles')->insert([
            'name' => 'sword art online',
            'category_id' => 4,
            'price' => 5.99,
            'description' => 'people got stuck in a game',
            'created_at' => Carbon::now()
        ]);
        
        DB::table('articles')->insert([
            'name' => 'needless',
            'category_id' => 4,
            'price' => 1.98,
            'description' => 'Needless is set in the future, after World War 3. Because of the events of WW3.
            Specifically the bombings, a black hole has appeared in what was once Tokyo. The inhabitants of this area have gained powers called "Fragments". The city people on the outside have a label for those that have these strange powers:"Needless".',
            'created_at' => Carbon::now()
        ]);
        

        DB::table('articles')->insert([
            'name' => 'KUMO DESU GA, NANI KA?',
            'category_id' => 5,
            'price' => 2.99,
            'description' => 'follow the adventures of someone thats been reincarnated as a spider in a game like world with a stat system and skills',
            'created_at' => Carbon::now()
        ]);
        
        DB::table('articles')->insert([
            'name' => 'The Ride-On King',
            'category_id' => 5,
            'price' => 2.99,
            'description' => 'the president of a country fell into a portal to an other world with magic and really low tech',
            'created_at' => Carbon::now()
        ]);
        
        DB::table('articles')->insert([
            'name' => "Monsters Can't Clean",
            'category_id' => 5,
            'price' => 2.99,
            'description' => 'follow the stories of a dragon that got a nun as offering, but the nun demands he cleans everything before eating her',
            'created_at' => Carbon::now()
        ]);
        
        DB::table('articles')->insert([
            'name' => 'Tomo-chan Is A Girl!',
            'category_id' => 5,
            'price' => 2.99,
            'description' => 'a romcon about a dude thats blind to his child hood friend having feelings for him as he always saw her as one of the guys',
            'created_at' => Carbon::now()
        ]);
        
        DB::table('articles')->insert([
            'name' => 'Seichou Cheat de Nandemo Dekiru you ni Natta ga, Mushoku dake wa Yamerarenai you desu',
            'category_id' => 5,
            'price' => 2.99,
            'description' => 'follow the adventures of a man that got reincarnated into an other world with 2 blessings making him gain EXP faster',
            'created_at' => Carbon::now()
        ]);
    }
}
