<?php

use App\Donation;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker=Faker\Factory::create();
		\Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);
		$faker->addProvider(new Liior\Faker\Prices($faker));

		for($i=1; $i<6; $i++){
			$donation = new Donation();

			$donation->title = $faker->productName;
			$donation->price = $faker->price(5, 100, true);

			$donation->save();
		}
    }
}
