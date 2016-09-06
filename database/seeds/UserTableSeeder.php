<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {
    //put your code here
    
    public function run(){
            
        DB::table('users')->truncate();
        
        //sem o uso do faker
        User::create([
           'name'=> 'Cissa', 
           'email' => 'cissa.pmro@gmail.com',
           'password' => Hash::make(123456)
        ]); 
        
        //usando o faker
        $faker = Faker::create();
      
        foreach(range(1,10) as $i){
            
        User::create([
           'name'=> $faker->name(), 
           'email' => $faker->email(),
           'password' => Hash::make($faker->word)
        ]); 
        }
        
}
}
