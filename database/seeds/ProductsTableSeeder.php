<?php

use Illuminate\Database\Seeder;

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
        ////DB::table('product')->truncate();
        //CodeCommerce\Product::truncate();
        
      // factory('CodeCommerce\Product')->create([
        //   'name'=>'Notebook',
          // 'description'=>'Lg',
          // 'price'=>'3.0',
          // 'featured'=>'Em promoção',
          // 'recommend'=>'Sim'
      // ]);
       factory('CodeCommerce\Product', 2)->create();
    }
}
