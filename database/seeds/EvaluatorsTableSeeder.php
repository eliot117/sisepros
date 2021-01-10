<?php

use Illuminate\Database\Seeder;
use App\Evaluator;

class EvaluatorsTableSeeder extends Seeder
{
    public function run()
    {
        //1
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'ALICIA DEL SAGRARIO',
            'lastname_evaluators' => 'ALVARADO MATA',
            'address'             => '919 Mathilde Drive',
            'extension'           => '102',
        ]);

        //2
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'DEICY Y. ',
            'lastname_evaluators' => 'GONZALEZ LAZARO',
            'address'             => '867 Marielle Bypass Suite 913',
            'extension'           => '103',
        ]);

        //3
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. BORSI FERNANDO',
            'lastname_evaluators' => 'TORRES LUNA',
            'address'             => '996 Feest Turnpike Suite 132',
            'extension'           => '104',
        ]);

        //4
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. MARITZA BEATRIZ',
            'lastname_evaluators' => 'GARYBAI PEREZ',
            'address'             => '9246 Adolphus Summit',
            'extension'           => '105',
        ]);

        //5
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. MAGALIS ',
            'lastname_evaluators' => 'OVANDO OVANDO',
            'address'             => '6805 Christiansen Walks',
            'extension'           => '106',
        ]);

        //6
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. ALFREDO ',
            'lastname_evaluators' => 'SAYAS MARTINEZ',
            'address'             => '370 Zulauf Islands Suite 724',
            'extension'           => '107',
        ]);

        //7
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. LORENA ',
            'lastname_evaluators' => 'SALGADO TOLEDO',
            'address'             => '2507 Dietrich Villages',
            'extension'           => '108',
        ]);

        //8
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. MARIA DEL PILAR',
            'lastname_evaluators' => 'CORTES MACIAS',
            'address'             => '7921 Hegmann Islands',
            'extension'           => '109',
        ]);

        //9
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'KATIA',
            'lastname_evaluators' => 'MORENO GUINEA',
            'address'             => '26609 Ziemann Green',
            'extension'           => '110',
        ]);

        //10
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'AMADA PATRICIA',
            'lastname_evaluators' => 'RAMOS TRIANO',
            'address'             => '23468 Mills Parks',
            'extension'           => '111',
        ]);

        //11
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. ABIGAIL',
            'lastname_evaluators' => 'TORRES MELENDEZ',
            'address'             => '477 Huel Extensions',
            'extension'           => '112',
        ]);

        //12
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. GUADALUPE YAMALI',
            'lastname_evaluators' => 'DIAZ PEREZ',
            'address'             => '256 Grimes Ford',
            'extension'           => '113',
        ]);

        //13
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. TANIA',
            'lastname_evaluators' => 'DIEGO ABUERTO',
            'address'             => '19763 Rosetta Crossing',
            'extension'           => '114',
        ]);

        //14
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'C.P. CARMEN MARIA',
            'lastname_evaluators' => 'PEREZ EVIA',
            'address'             => '606 Edward Villages',
            'extension'           => '115',
        ]);

        //15
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'LIC. ALAN ROBERTO',
            'lastname_evaluators' => 'HURTADO HURTADO',
            'address'             => '15407 Brennon Well',
            'extension'           => '116',
        ]);

        //16
        $evaluators = Evaluator::create([
            'name_evaluators'     => 'WENDY TERESA',
            'lastname_evaluators' => 'CARDINA DE LA GARZA NAVARRO',
            'address'             => '54809 Blanda Squares',
            'extension'           => '117',
        ]);
    }
}
