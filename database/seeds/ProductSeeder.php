<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //HOODIE//

        DB::table('products')->insert([
        	'nama' => 'All Blacks Blue Hoodie',
            'clothe_id' => 1,
            'gambar' => 'all blacks blue hoodie.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Black Bappe Hoodie',
            'clothe_id' => 1,
            'gambar' => 'Black bappe hoodie.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'GAP black premium hoodie',
            'clothe_id' => 1,
            'gambar' => 'GAP black premium hoodie.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'H&M grey hoodie',
            'clothe_id' => 1,
            'gambar' => 'h&m grey hoodie.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'H&M hoodie Panini white lilnax X',
            'clothe_id' => 1,

            'gambar' => 'h&m hoodie oanini white lilnax X.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'H&M NASA crewneck hoodie',
            'clothe_id' => 1,
            'gambar' => 'h&m NASA crewneck hoodie.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'H&M star wars hoodie',
            'clothe_id' => 1,
            'gambar' => 'h&m star wars hoodie.png'
        ]);
    
        DB::table('products')->insert([
        	'nama' => 'H&M team tiger red hoodie',
            'clothe_id' => 1,
            'gambar' => 'h&m team tiger red hoodie.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Livingin nebraska pull and bear grey hoodie',
            'clothe_id' => 1,
            'gambar' => 'livingin nebraska pull and bear grey hoodie.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Pull and Bear 1991 white hoodie',
            'clothe_id' => 1,
            'gambar' => 'pull and bear 1991 white hoodie.png'
        ]);

        //JACKET//
    

        DB::table('products')->insert([
        	'nama' => '2ND ARMORED DIVSION 3-SEASON JACKET',
            'clothe_id' => 2,
            'gambar' => 'jaket-1.png'
        ]);

        DB::table('products')->insert([
        	'nama' => '3 SECOND BASEBALL BLUE NAVY JACKET',
            'clothe_id' => 2,
            'gambar' => '3 SECOND BASEBALL BLUE NAVY JACKET.png'
        ]);    

        DB::table('products')->insert([
        	'nama' => 'ADIDAS 3 STRIPE BROWN JACKET',
            'clothe_id' => 2,
            'gambar' => 'ADIDAS 3 STRIPE BROWN JACKET.png'
        ]);   

        DB::table('products')->insert([
        	'nama' => 'DICKIES BLUE NAVY JACKET',
            'clothe_id' => 2,
            'gambar' => 'DICKIES BLUE NAVY JACKET.png'
        ]);  

        DB::table('products')->insert([
        	'nama' => 'GREEN LIGHT JAKET',
            'clothe_id' => 2,
            'gambar' => 'GREEN LIGHT JAKET.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'LEA BASIC DENIM JACKET',
            'clothe_id' => 2,
            'gambar' => 'LEA BASIC DENIM JACKET.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'LEVI DENIM JACKET',
            'clothe_id' => 2,
            'gambar' => 'LEVI DENIM JACKET.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'LEVI X PSG DENIM JACKET',
            'clothe_id' => 2,
            'gambar' => 'LEVI X PSG DENIM JACKET.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'NIKE COLLEGE (OREGON) JACKET',
            'clothe_id' => 2,
            'gambar' => 'NIKE COLLEGE (OREGON) JACKET.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'NIKE PARK 20 REPEL REAIN JACKET',
            'clothe_id' => 2,
            'gambar' => 'NIKE PARK 20 REPEL REAIN JACKET.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'REAL MADRID 2011-2012 JACKET',
            'clothe_id' => 2,
            'gambar' => 'REAL MADRID 2011-2012 JACKET.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'TASLAN WATERPROOF JACKET',
            'clothe_id' => 2,
            'gambar' => 'TASLAN WATERPROOF JACKET.png'
        ]); 

        
      //JEAN//

        DB::table('products')->insert([
        	'nama' => 'CARDINAL JEANS',
            'clothe_id' => 3,
            'gambar' => 'CARDINAL JEANS.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'CARDINAL TROUSER',
            'clothe_id' => 3,
            'gambar' => 'CARDINAL TROUSER.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'GO-TO 2 RUNNING SHORT',
            'clothe_id' => 3,
            'gambar' => 'GO-TO 2 RUNNING SHORT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'H&M DENIM SHORT',
            'clothe_id' => 3,
            'gambar' => 'H&M DENIM SHORT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'JOYFUL JEANS SHORT PANTS',
            'clothe_id' => 3,
            'gambar' => 'JOYFUL JEANS SHORT PANTS.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'LEA SLIM FIT JEANS',
            'clothe_id' => 3,
            'gambar' => 'LEA SLIM FIT JEANS.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'LEVI 112 DARK BLUE BOOTCUT DENIM JEANS',
            'clothe_id' => 3,
            'gambar' => 'LEVI 112 DARK BLUE BOOTCUT DENIM JEANS.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'LEVI BLACK JEAN',
            'clothe_id' => 3,
            'gambar' => 'LEVI BLACK JEAN.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'LEVI DENIM TROUSER',
            'clothe_id' => 3,
            'gambar' => 'LEVI DENIM TROUSER.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNDER ARMOUR WS GAME SHORT',
            'clothe_id' => 3,
            'gambar' => 'UNDER ARMOUR WS GAME SHORT.png'
        ]); 



        //SWEATER//

        DB::table('products')->insert([
        	'nama' => 'Black crewneck sweatshirt',
            'clothe_id' => 4,
            'gambar' => 'black crewneck sweatshirt.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'Blue kore sweater',
            'clothe_id' => 4,
            'gambar' => 'blue kore sweater.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'Blue navy sweater',
            'clothe_id' => 4,
            'gambar' => 'Blue navy sweater.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'Grey Knit sweater',
            'clothe_id' => 4,
            'gambar' => 'Grey Knit sweater.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'Heavy sweater with alpine pattern',
            'clothe_id' => 4,
            'gambar' => 'heavy sweater with alpine pattern.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'Kind is cool grey sweater',
            'clothe_id' => 4,
            'gambar' => 'kind is cool grey sweater.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'MR peanut holiday sweater',
            'clothe_id' => 4,
            'gambar' => 'mr peanut holiday sweater.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'Red moon holiday sweater',
            'clothe_id' => 4,
            'gambar' => 'red moon holiday sweater.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'Weekend mode grey sweater',
            'clothe_id' => 4,
            'gambar' => 'weekend mode grey sweater.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'Yonex white sweater',
            'clothe_id' => 4,
            'gambar' => 'yonex white sweater.png'
        ]); 

        //T-SHIRT

        DB::table('products')->insert([
        	'nama' => '3 SECOND GREEN WITH HAVE A GOOD TIME SHIRT',
            'clothe_id' => 5,
            'gambar' => '3 SECOND GREEN WITH HAVE A GOOD TIME SHIRT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'ART OF LIFE TSHIRT',
            'clothe_id' => 5,
            'gambar' => 'ART OF LIFE TSHIRT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNIQLO GUDETAMA WHITE TSHIRT',
            'clothe_id' => 5,
            'gambar' => 'UNIQLO GUDETAMA WHITE TSHIRT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNIQLO KAWS BFF POCKET WHITE T SHIRT',
            'clothe_id' => 5,
            'gambar' => 'UNIQLO KAWS BFF POCKET WHITE T SHIRT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNIQLO KAWS TSHIRT',
            'clothe_id' => 5,
            'gambar' => 'UNIQLO KAWS TSHIRT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNIQLO KAWS X PEANUTS TSHIRTr',
            'clothe_id' => 5,
            'gambar' => 'UNIQLO KAWS X PEANUTS TSHIRT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNIQLO KAWS X SESAME STREET FAMILY TSHIRT',
            'clothe_id' => 5,
            'gambar' => 'UNIQLO KAWS X SESAME STREET FAMILY TSHIRT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNIQLO POKEMON TSHIRT',
            'clothe_id' => 5,
            'gambar' => 'UNIQLO POKEMON TSHIRT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNIQLO tshirt KAWS flayed white',
            'clothe_id' => 5,
            'gambar' => 'UNIQLO tshirt KAWS flayed white.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNIQLO X DISNEY MICKEY MOUSE TSHIRT',
            'clothe_id' => 5,
            'gambar' => 'UNIQLO X DISNEY MICKEY MOUSE TSHIRT.png'
        ]); 

        DB::table('products')->insert([
        	'nama' => 'UNIQLO X NINTENDO TSHIRT',
            'clothe_id' => 5,
            'gambar' => 'UNIQLO X NINTENDO TSHIRT.png'
        ]);
    }
    }
