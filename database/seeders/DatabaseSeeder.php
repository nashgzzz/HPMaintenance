<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //
        $this -> call(RoleSeeder::class);
        
        \App\Models\User::factory()->create([
             'name' => 'User Admin',
             'email' => 'admin@example.com',
             
         ])->assignRole('Admin');

        \App\Models\User::factory()->create([
            'name' => 'User employee',
            'email' => 'employee@example.com',
            
        ])->assignRole('Empleado');
        
        User::factory(10)->create()->each(function($user){
            $user->assignRole('Cliente');
        });
        
        
        //Llamar a los seeder para los factory
        // en orden de las migraciones para que funcione bien 
         $this -> call(AdressSeeder::class);
         $this -> call(CountrySeeder::class);
         $this -> call(CategorySeeder::class);
         $this -> call(SupplierSeeder::class);
         $this -> call(BrandSeeder::class);
         $this -> call(StateSeeder::class);
         $this -> call(CitySeeder::class);
         $this -> call(CarModelSeeder::class);
         $this -> call(BodegaSucursalSeeder::class);
         $this -> call(ItemClientSeeder::class);
         $this -> call(KindProductSeeder::class);
         $this -> call(StoreSeeder::class);
         $this -> call(ClientSeeder::class);
         $this -> call(InventorySeeder::class);
         $this -> call(EmployeeSeeder::class);
         $this -> call(BodegaSeeder::class);
         $this -> call(ProductSeeder::class);
         $this -> call(OrderSeeder::class);
         $this -> call(BookingSeeder::class);
         $this -> call(CarSeeder::class);
         $this -> call(ReceptionSeeder::class);
         $this -> call(CategoryProductSeeder::class);
         $this -> call(VoucherSeeder::class);
         $this -> call(ProductClientVoucherSeeder::class);
         $this -> call(EntryOrderSeeder::class);
         $this -> call(BranchOfficeUserSeeder::class);
         $this -> call(VoucherUserSeeder::class);

          
          
          
         
          
        
         
    }
}
