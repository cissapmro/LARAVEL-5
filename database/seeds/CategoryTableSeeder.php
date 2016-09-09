<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;
//use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {
    //put your code here
    
    public function run(){
            
        DB::table('categories')->truncate();
        
        //$faker = Faker::create();
        
        //foreach(range(1,15) as $i){
            
        //Category::create([
          // 'name'=> $faker->word(), 
          // 'description' => $faker->sentence()                
        //]); 
        //}
        factory('App\Category')->create([
           'name'=> 'Informática', 
           'description' => 'Computador'
           
        ]);
        factory('App\Category', 3)->create();
        
}
}
