<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipalities = array(
            1 => array("Aguascalientes", "Jesús María", "Calvillo"),
            2 => array("Tijuana", "Mexicali", "Ensenada"),
            3 => array("La Paz", "Los Cabos", "Comondú"),
            4 => array("Campeche", "Ciudad del Carmen", "Champotón"),
            5 => array("Tuxtla Gutiérrez", "Tapachula", "San Cristóbal de las Casas"),
            6 => array("Chihuahua", "Juárez", "Delicias"),
            7 => array("Saltillo", "Torreón", "Monclova"),
            8 => array("Colima", "Manzanillo", "Tecomán"),
            9 => array("Durango", "Gómez Palacio", "Lerdo"),
            10 => array("León", "Irapuato", "Celaya"),
            11 => array("Acapulco", "Chilpancingo", "Iguala"),
            12 => array("Pachuca", "Tulancingo", "Tizayuca"),
            13 => array("Guadalajara", "Zapopan", "Tlaquepaque"),
            14 => array("Toluca", "Ecatepec", "Naucalpan"),
            15 => array("Morelia", "Uruapan", "Lázaro Cárdenas"),
            16 => array("Cuernavaca", "Jiutepec", "Cuautla"),
            17 => array("Tepic", "Bahía de Banderas", "Santiago Ixcuintla"),
            18 => array("Monterrey", "Guadalupe", "San Nicolás de los Garza"),
            19 => array("Oaxaca de Juárez", "Salina Cruz", "Juchitán"),
            20 => array("Puebla", "Tehuacán", "Atlixco"),
            21 => array("Querétaro", "San Juan del Río", "Corregidora"),
            22 => array("Cancún", "Playa del Carmen", "Chetumal"),
            23 => array("San Luis Potosí", "Soledad de Graciano Sánchez", "Matehuala"),
            24 => array("Culiacán", "Mazatlán", "Los Mochis"),
            25 => array("Hermosillo", "Ciudad Obregón", "Nogales"),
            26 => array("Villahermosa", "Cárdenas", "Comalcalco"),
            27 => array("Ciudad Victoria", "Tampico", "Reynosa"),
            28 => array("Tlaxcala", "Apizaco", "Huamantla"),
            29 => array("Veracruz", "Xalapa", "Coatzacoalcos"),
            30 => array("Mérida", "Tizimín", "Valladolid"),
            31 => array("Zacatecas", "Fresnillo", "Guadalupe")
        );


        foreach ($municipalities as $estado_id => $municipios) {
            foreach ($municipios as $municipio) {
                Municipality::create(['state_id'=>$estado_id,'name'=>$municipio]);
            }
            
        }
    }
}
