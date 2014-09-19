<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ProductTableSeeder');
    $this->command->info('Product table seeded.');
    $this->call('ReviewTableSeeder');
    $this->command->info('Review table seeded.');
	}

}
