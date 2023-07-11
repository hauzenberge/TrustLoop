<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Font;

class FontSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fonts = array(
            [    
                'name' => 'Montserrat',
                'swap_link' => 'https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap',
                'css' => 'font-family: "Montserrat", sans-serif;'
            ],
            [    
                'name' => 'Open Sans',
                'swap_link' => 'https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap',
                'css' => 'font-family: "Open Sans", sans-serif;'
            ],
            [    
                'name' => 'Lato',
                'swap_link' => 'https://fonts.googleapis.com/css?family=Lato:400,700&display=swap',
                'css' => 'font-family: "Lato", sans-serif;'
            ],          
            [    
                'name' => 'Roboto',
                'swap_link' => 'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap',
                'css' => 'font-family: "Roboto", sans-serif;'
            ],
            [    
                'name' => 'Nunito',
                'swap_link' => 'https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap',
                'css' => 'font-family: "Nunito", sans-serif;'
            ],
            [    
                'name' => 'Nunito',
                'swap_link' => 'https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap',
                'css' => 'font-family: "Nunito", sans-serif;'
            ],
            [    
                'name' => 'Poppins',
                'swap_link' => 'https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap',
                'css' => 'font-family: "Poppins", sans-serif;'
            ],
            [    
                'name' => 'Italiana',
                'swap_link' => 'https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap',
                'css' => 'font-family: "Italiana", serif;'                
            ]
        );

        Font::insert($fonts);
        
    }
}
