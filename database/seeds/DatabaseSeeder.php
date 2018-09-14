<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTable::class);
        $this->call(WilayahTable::class);
        $this->call(KelompokTable::class);
        $this->call(FaseSapiTable::class);
        $this->call(TipeSapiTable::class);
    }
}
