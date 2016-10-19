<?php

use Illuminate\Database\Seeder;
use CodeCommerce\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Apagar os registros do banco
      //  DB::table('categories')->truncate(); //não usar para postgresql
        //CodeCommerce\Category::truncate();
        
         //****FAKER****
    /*    $faker = Faker::create();
        foreach(range(1,5) as $i){
            
            Category::create([
                'name'=>$faker->word(),
                'description'=>$faker->sentence()
               
                
            ]);
            
        }////
     */ 
         //****FACTORY****      
      //  factory('CodeCommerce\Category')->create([
        //    'name'=>'Seeds',
        //    'description'=>'Aprendendo a usar seeds'
      //  ]);
        factory('CodeCommerce\Category', 5)->create();
    }
}
