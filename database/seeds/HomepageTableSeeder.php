<?php

use Illuminate\Database\Seeder;

class HomepageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homepage')->insert([
            'tagline' => 'Increase your engergy level with garcinia cambogia',
            'product_1' => 'Effective thermogenic supplements are those that contain key ingredients that create a fat burning \'thermogenic\'
	environment by working together and in synergy. Some of these ingredients also aid
	in reducing appetite and spiking an increase in short-term energy. Dosage of Garcinia cambogia, beginning
	from 750 mg to 1,500 mg, takes 2-3 times in individual dose before meals.',
            'product_2' => 'Obesity is an imbalance between fat intake and energy expenditure.
					Now day obesity is a problem of health and mind in many people.',
            'product_3' => 'The rush hours working lifestyle make many people take junk food and fast food more than nutritionists.
			The important factor is Generic, it is found that one obese patient has a 40% chance of obesity and both
			obese patients have 80% chance of obesity. The chronic diseases that are developed from obesity are
			diabetes, high blood pressure, stroke, heart attack, cancer, gout and sleep apnea. So control the weight
			is the best way to void health problem.',
            'product_4' => 'Control the body weight helps you against the chronic diseases and make good looking. There are many
			ways to reduce and control the weight. Using weight control products is not the best way, especially use
			potential dangerous diet products without consult from the doctors or the pharmacists. Balance the energy
			 expenditure and fat intake is an important point. If you eat more you have to exercise more. Other ways
			are break bad habits such as alcohol intake, watching T.V. during eating, or ignore vegetables. You have
			to realize how much the fat in each menu and should the low cholesterol with high nutrition.'
        ]);
    }
}
