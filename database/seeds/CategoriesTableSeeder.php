<?php

use Illuminate\Database\Seeder;

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
        ////DB::table('categories')->truncate();
        //CodeCommerce\Category::truncate();
              
        factory('CodeCommerce\Category')->create([
            'name'=>'Seeds',
            'description'=>'Aprendendo a usar seeds'
        ]);
        factory('CodeCommerce\Category', 2)->create();
    }
}
