<?php

use Illuminate\Database\Seeder;
use CodeCommerce\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Apagar os registros do banco
      //  DB::table('products')->truncate(); //não usar para postgresql
        //CodeCommerce\Products::truncate();
        
        //****FAKER****
    /*    $faker = Faker::create();
        foreach(range(1,5) as $i){
            
            Product::create([
                'name'=>$faker->word(),
                'description'=>$faker->sentence(),
                'price'=>$faker->randomNumber(2),
                'category_id'=>$faker->numberBetween(1,5);
                
            ]);
            
        }
     */ 
        //****FACTORY****
      // factory('CodeCommerce\Product')->create([
        //   'name'=>'Notebook',
          // 'description'=>'Lg',
          // 'price'=>'3.0',
          // 'featured'=>'Em promoção',
          // 'recommend'=>'Sim'
      // ]);
       factory('CodeCommerce\Product', 5)->create();
    }
}
