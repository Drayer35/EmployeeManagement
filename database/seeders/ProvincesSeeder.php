<?php

namespace Database\Seeders;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $provinces = [
            // Departamento 1 (Amazonas)
        Province::create(['province' => 'Chachapoyas', 'department_id' => 1]),
        Province::create(['province' => 'Bagua', 'department_id' => 1]),
        Province::create(['province' => 'Bongara', 'department_id' => 1]),
        Province::create(['province' => 'Condorcanqui', 'department_id' => 1]),
        Province::create(['province' => 'Luya', 'department_id' => 1]),
        Province::create(['province' => 'Rodriguez de Mendoza', 'department_id' => 1]),
        Province::create(['province' => 'Utcubamba', 'department_id' => 1]),
        
        // Departamento 2 (Ancash)
        Province::create(['province' => 'Huaraz', 'department_id' => 2]),
        Province::create(['province' => 'Aija', 'department_id' => 2]),
        Province::create(['province' => 'Antonio Raymondi', 'department_id' => 2]),
        Province::create(['province' => 'Asuncion', 'department_id' => 2]),
        Province::create(['province' => 'Bolognesi', 'department_id' => 2]),
        Province::create(['province' => 'Carhuaz', 'department_id' => 2]),
        Province::create(['province' => 'Carlos F.Fitzcarrald', 'department_id' => 2]),
        Province::create(['province' => 'Casma', 'department_id' => 2]),
        Province::create(['province' => 'Corongo', 'department_id' => 2]),
        Province::create(['province' => 'Huari', 'department_id' => 2]),
        Province::create(['province' => 'Huarmey', 'department_id' => 2]),
        Province::create(['province' => 'Huaylas', 'department_id' => 2]),
        Province::create(['province' => 'Mariscal Luzuriaga', 'department_id' => 2]),
        Province::create(['province' => 'Ocros', 'department_id' => 2]),
        Province::create(['province' => 'Pallasca', 'department_id' => 2]),
        Province::create(['province' => 'Pomabamba', 'department_id' => 2]),
        Province::create(['province' => 'Santa', 'department_id' => 2]),
        Province::create(['province' => 'Sihuas', 'department_id' => 2]),
        Province::create(['province' => 'Yungay', 'department_id' => 2]),
        
        // Departamento 3 (Apurimac)
        Province::create(['province' => 'Abancay', 'department_id' => 3]),
        Province::create(['province' => 'Antabamba', 'department_id' => 3]),
        Province::create(['province' => 'Aymaraes', 'department_id' => 3]),
        Province::create(['province' => 'Cotabambas', 'department_id' => 3]),
        Province::create(['province' => 'Grau', 'department_id' => 3]),
        Province::create(['province' => 'Chincheros', 'department_id' => 3]),
        Province::create(['province' => 'Andahuaylas', 'department_id' => 3]),

        // Departamento 4 (Arequipa)
        Province::create(['province' => 'Arequipa', 'department_id' => 4]),
        Province::create(['province' => 'Camana', 'department_id' => 4]),
        Province::create(['province' => 'Caraveli', 'department_id' => 4]),
        Province::create(['province' => 'Castilla', 'department_id' => 4]),
        Province::create(['province' => 'Caylloma', 'department_id' => 4]),
        Province::create(['province' => 'Condesuyos', 'department_id' => 4]),
        Province::create(['province' => 'Islay', 'department_id' => 4]),
        Province::create(['province' => 'La Union', 'department_id' => 4]),

        // Departamento 5 (Ayacucho)
        Province::create(['province' => 'Cangallo', 'department_id' => 5]),
        Province::create(['province' => 'Huanta', 'department_id' => 5]),
        Province::create(['province' => 'Huamanga', 'department_id' => 5]),
        Province::create(['province' => 'Huanca Sancos', 'department_id' => 5]),
        Province::create(['province' => 'La Mar', 'department_id' => 5]),
        Province::create(['province' => 'Lucanas', 'department_id' => 5]),
        Province::create(['province' => 'Parinacochas', 'department_id' => 5]),
        Province::create(['province' => 'Paucar del Sara Sara', 'department_id' => 5]),
        Province::create(['province' => 'Sucre', 'department_id' => 5]),
        Province::create(['province' => 'Victor Fajardo', 'department_id' => 5]),
        Province::create(['province' => 'Vilcashuaman', 'department_id' => 5]),

        // Departamento 6 (Cajamarca)
        Province::create(['province' => 'Cajamarca', 'department_id' => 6]),
        Province::create(['province' => 'Cajabamba', 'department_id' => 6]),
        Province::create(['province' => 'Celendin', 'department_id' => 6]),
        Province::create(['province' => 'Chota', 'department_id' => 6]),
        Province::create(['province' => 'Contumaza', 'department_id' => 6]),
        Province::create(['province' => 'Cutervo', 'department_id' => 6]),
        Province::create(['province' => 'Hualgayoc', 'department_id' => 6]),
        Province::create(['province' => 'Jaén', 'department_id' => 6]),
        Province::create(['province' => 'San Ignacion', 'department_id' => 6]),
        Province::create(['province' => 'San Marcos', 'department_id' => 6]),
        Province::create(['province' => 'San Miguel', 'department_id' => 6]),
        Province::create(['province' => 'San Pablo', 'department_id' => 6]),
        Province::create(['province' => 'Santa Cruz', 'department_id' => 6]),

        // Departamento 7 (Callao)
        Province::create(['province' => 'Callao', 'department_id' => 7]),

        // Departamento 8 (Cusco)
        Province::create(['province' => 'Cuzco', 'department_id' => 8]),
        Province::create(['province' => 'Acomayo', 'department_id' => 8]),
        Province::create(['province' => 'Anta', 'department_id' => 8]),
        Province::create(['province' => 'Calca', 'department_id' => 8]),
        Province::create(['province' => 'Canas', 'department_id' => 8]),
        Province::create(['province' => 'Canchis', 'department_id' => 8]),
        Province::create(['province' => 'Chumbivilcas', 'department_id' => 8]),
        Province::create(['province' => 'Espinar', 'department_id' => 8]),
        Province::create(['province' => 'La Convencion', 'department_id' => 8]),
        Province::create(['province' => 'Paruro', 'department_id' => 8]),
        Province::create(['province' => 'Paucartambo', 'department_id' => 8]),
        Province::create(['province' => 'Quispicanchi', 'department_id' => 8]),
        Province::create(['province' => 'Urubamba', 'department_id' => 8]),

        // Departamento 9 (Huancavelica)
        Province::create(['province' => 'Huancavelica', 'department_id' => 9]),
        Province::create(['province' => 'Acobamba', 'department_id' => 9]),
        Province::create(['province' => 'Angaraes', 'department_id' => 9]),
        Province::create(['province' => 'Castrovirreyna', 'department_id' => 9]),
        Province::create(['province' => 'Churcampa', 'department_id' => 9]),
        Province::create(['province' => 'Huaytara', 'department_id' => 9]),
        Province::create(['province' => 'Tayacaja', 'department_id' => 9]),

        // Departamento 10 (Huanuco)
        Province::create(['province' => 'Huanuco', 'department_id' => 10]),
        Province::create(['province' => 'Ambo', 'department_id' => 10]),
        Province::create(['province' => 'Dos de Mayo', 'department_id' => 10]),
        Province::create(['province' => 'Huacaybamba', 'department_id' => 10]),
        Province::create(['province' => 'Huamalies', 'department_id' => 10]),
        Province::create(['province' => 'Leoncio Prado', 'department_id' => 10]),
        Province::create(['province' => 'Mrañon', 'department_id' => 10]),
        Province::create(['province' => 'Pachitea', 'department_id' => 10]),
        Province::create(['province' => 'Puerto Inca', 'department_id' => 10]),
        Province::create(['province' => 'Lauricocha', 'department_id' => 10]),
        Province::create(['province' => 'Yarowilca', 'department_id' => 10]),

        // Departamento 11 (Ica)
        Province::create(['province' => 'Ica', 'department_id' => 11]),
        Province::create(['province' => 'Chincha', 'department_id' => 11]),
        Province::create(['province' => 'Nazca', 'department_id' => 11]),
        Province::create(['province' => 'Palpa', 'department_id' => 11]),
        Province::create(['province' => 'Pisco', 'department_id' => 11]),

        // Departamento 12 (Junin)
        Province::create(['province' => 'Chanchamayo', 'department_id' => 12]),
        Province::create(['province' => 'Chupaca', 'department_id' => 12]),
        Province::create(['province' => 'Concepcion', 'department_id' => 12]),
        Province::create(['province' => 'Huancayo', 'department_id' => 12]),
        Province::create(['province' => 'Jauja', 'department_id' => 12]),
        Province::create(['province' => 'Junin', 'department_id' => 12]),
        Province::create(['province' => 'Satipo', 'department_id' => 12]),
        Province::create(['province' => 'Tarma', 'department_id' => 12]),
        Province::create(['province' => 'Yauli', 'department_id' => 12]),

        // Departamento 13 (La Libertad)
        Province::create(['province' => 'Trujillo', 'department_id' => 13]),
        Province::create(['province' => 'Ascope', 'department_id' => 13]),
        Province::create(['province' => 'Bolivar', 'department_id' => 13]),
        Province::create(['province' => 'Chepen', 'department_id' => 13]),
        Province::create(['province' => 'Julcan', 'department_id' => 13]),
        Province::create(['province' => 'Otuzco', 'department_id' => 13]),
        Province::create(['province' => 'Gran Chimu', 'department_id' => 13]),
        Province::create(['province' => 'Pacasmayo', 'department_id' => 13]),
        Province::create(['province' => 'Pataz', 'department_id' => 13]),
        Province::create(['province' => 'Sanchez Carrion', 'department_id' => 13]),
        Province::create(['province' => 'Santiago de Chuco', 'department_id' => 13]),
        Province::create(['province' => 'Viru', 'department_id' => 13]),

        // Departamento 14 (Lambayeque)
        Province::create(['province' => 'Chiclayo', 'department_id' => 14]),
        Province::create(['province' => 'Ferreñafe', 'department_id' => 14]),
        Province::create(['province' => 'Lambayeque', 'department_id' => 14]),

        // Departamento 15 (Lima)
        Province::create(['province' => 'Barranca', 'department_id' => 15]),
        Province::create(['province' => 'Cajatambo', 'department_id' => 15]),
        Province::create(['province' => 'Canta', 'department_id' => 15]),
        Province::create(['province' => 'Cañete', 'department_id' => 15]),
        Province::create(['province' => 'Huaral', 'department_id' => 15]),
        Province::create(['province' => 'Huarochiri', 'department_id' => 15]),
        Province::create(['province' => 'Huaraura', 'department_id' => 15]),
        Province::create(['province' => 'Lima', 'department_id' => 15]),
        Province::create(['province' => 'Oyon', 'department_id' => 15]),
        Province::create(['province' => 'Yautos', 'department_id' => 15]),


        // Departamento 16 (Loreto)
        Province::create(['province' => 'Maynas', 'department_id' => 16]),
        Province::create(['province' => 'Putumayo', 'department_id' => 16]),
        Province::create(['province' => 'Alto Amazonas', 'department_id' => 16]),
        Province::create(['province' => 'Loreto', 'department_id' => 16]),
        Province::create(['province' => 'Mariscal Ramon Castilla', 'department_id' => 16]),
        Province::create(['province' => 'Requena', 'department_id' => 16]),
        Province::create(['province' => 'Ucayali', 'department_id' => 16]),
        Province::create(['province' => 'Datem del Marañon', 'department_id' => 16]),

        // Departamento 17 (Madre de Dios)
        Province::create(['province' => 'Tambopata', 'department_id' => 17]),
        Province::create(['province' => 'Manu', 'department_id' => 17]),
        Province::create(['province' => 'Tahuamanu', 'department_id' => 17]),

        // Departamento 18 (Moquegua)
        Province::create(['province' => 'Mariscal Nieto', 'department_id' => 18]),
        Province::create(['province' => 'General Sanchez', 'department_id' => 18]),
        Province::create(['province' => 'ILO', 'department_id' => 18]),

        // Departamento 19 (Pasco)
        Province::create(['province' => 'Pasco', 'department_id' => 19]),
        Province::create(['province' => 'Oxapampa', 'department_id' => 19]),
        Province::create(['province' => 'Daniel A. Carrion', 'department_id' => 19]),

        // Departamento 20 (Piura)
        Province::create(['province' => 'Ayabaca', 'department_id' => 20]),
        Province::create(['province' => 'Huancabamba', 'department_id' => 20]),
        Province::create(['province' => 'Morropon', 'department_id' => 20]),
        Province::create(['province' => 'Piura', 'department_id' => 20]),
        Province::create(['province' => 'Sechura', 'department_id' => 20]),
        Province::create(['province' => 'Sullana', 'department_id' => 20]),
        Province::create(['province' => 'Paita', 'department_id' => 20]),
        Province::create(['province' => 'Talara', 'department_id' => 20]),

        // Departamento 21 (Puno)
        Province::create(['province' => 'San Roman', 'department_id' => 21]),
        Province::create(['province' => 'Puno', 'department_id' => 21]),
        Province::create(['province' => 'Azangaro', 'department_id' => 21]),
        Province::create(['province' => 'Chucuito', 'department_id' => 21]),
        Province::create(['province' => 'El Collao', 'department_id' => 21]),
        Province::create(['province' => 'Melgar', 'department_id' => 21]),
        Province::create(['province' => 'Carabaya', 'department_id' => 21]),
        Province::create(['province' => 'Huancane', 'department_id' => 21]),
        Province::create(['province' => 'Sandia', 'department_id' => 21]),
        Province::create(['province' => 'San Antonio de Putina', 'department_id' => 21]),
        Province::create(['province' => 'Lampa', 'department_id' => 21]),
        Province::create(['province' => 'Yunguyo', 'department_id' => 21]),
        Province::create(['province' => 'Moho', 'department_id' => 21]),

        // Departamento 22 (San Martin)
        Province::create(['province' => 'Bellavista', 'department_id' => 22]),
        Province::create(['province' => 'El Dorado', 'department_id' => 22]),
        Province::create(['province' => 'Huallaga', 'department_id' => 22]),
        Province::create(['province' => 'Lamas', 'department_id' => 22]),
        Province::create(['province' => 'Mariscal Caceres', 'department_id' => 22]),
        Province::create(['province' => 'Moyobamba', 'department_id' => 22]),
        Province::create(['province' => 'Picota', 'department_id' => 22]),
        Province::create(['province' => 'Rioja', 'department_id' => 22]),
        Province::create(['province' => 'San Martin', 'department_id' => 22]),
        Province::create(['province' => 'Tocache', 'department_id' => 22]),

        // Departamento 23 (Tacna)
        Province::create(['province' => 'Tacna', 'department_id' => 23]),
        Province::create(['province' => 'Candarave', 'department_id' => 23]),
        Province::create(['province' => 'Jorge Basadre', 'department_id' => 23]),
        Province::create(['province' => 'Tarata', 'department_id' => 23]),

        // Departamento 24 (Tumbes)
        Province::create(['province' => 'Tumbes', 'department_id' => 24]),
        Province::create(['province' => 'Zarumilla', 'department_id' => 24]),
        Province::create(['province' => 'Contralmirante Villar', 'department_id' => 24]),

        // Departamento 25 (Ucayali)
        Province::create(['province' => 'Coronel Portillo', 'department_id' => 25]),
        Province::create(['province' => 'Atalaya', 'department_id' => 25]),
        Province::create(['province' => 'Pade Abad', 'department_id' => 25]),
        Province::create(['province' => 'Purus', 'department_id' => 25])

        ];
        
        
        Province::insert($provinces);
        
    }
}
