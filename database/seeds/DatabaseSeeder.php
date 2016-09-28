<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;
use CodeCommerce\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        //Para postgresql
        //Desativar verificação de chave estrangeira para esta conexão antes de seeds
        //Permite apagar todas as tabelas com chaves estrangeiras - truncate
        
        DB::statement("TRUNCATE TABLE categories, products CASCADE");

        // $this->call(UserTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
       

        Model::reguard();
    }
}
