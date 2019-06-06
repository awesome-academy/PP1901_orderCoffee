<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i <10; $i++) {
            DB::table('invoice')->insert ([
                'buydate' => date ('Y-m-d H:i:s'),
                'price_id' => rand(1,10),
                'name_id' => rand(1,10),
                'quantity' => Str::random(10),
            ]);
        }
    }
}
