<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            "name" => "Lemon Pie",
            "description" => "Masa sable breton rellena con nuestra untuosa crema de limón y terminado con el clásico merengue italiano.",
            "price" => 4200,
            "promo" => 4000,
            "state" => 1,
            "important" => 1,
            "id_category" => 1,
        ]);
        DB::table("products")->insert([
            "name" => "Mini Tarta de Frambuesas",
            "description" => "Masa sableé bretón de vainilla, pastelera y frambuesas frescas. Mantener refrigerado | Puede trasladarse sin inconvenientes en vehículos con aire acondicionado. Máximo 1 hora.",
            "price" => 1400,
            "state" => 1,
            "important" => 0,
            "id_category" => 1,
        ]);
        DB::table("products")->insert([
            "name" => "Macarons",
            "description" => "Macarons Ayulem – Probás uno y no podés parar. Elaborados con fino polvo de almendras y viene en seis sabores: chocolate, limón, frutos del bosque, maracuyá, té matcha, queso mascarpone y chocolate blanco. El precio es por unidad y podemos llevarla a tu casa si pedís un mínimo de ocho macarons",
            "price" => 440,
            "state" => 1,
            "important" => 0,
            "id_category" => 4,
        ]);
        DB::table("products")->insert([
            "name" => "Figazzitas de Manteca",
            "description" => "Así como su nombre lo dice: su equilibrado sabor a manteca, miga esponjosa y delicada corteza hacen de este producto un aliado ideal para preparar deliciosos sándwiches.",
            "price" => 1080,
            "state" => 1,
            "important" => 0,
            "id_category" => 3,
        ]);
        DB::table("products")->insert([
            "name" => "Pan de Hamburguesa",
            "description" => " Nos encantan las hamburguesas y sabemos que no es solo la carne, tienen que estar enmarcadas de un pan tierno, sabroso y delicado. Buscamos esa simple pero muy compleja fusión y lo logramos.",
            "price" => 220,
            "state" => 1,
            "important" => 0,
            "id_category" => 3,
        ]);
        DB::table("products")->insert([
            "name" => "Docena de facturas",
            "description" => "Facturas Ayulem – Probá facturas riquísimas y las mejores medialunas recién horneadas. Para el desayuno, la merienda, con café, maté, té o tu bebida preferida.",
            "price" => 2200,
            "state" => 1,
            "important" => 0,
            "id_category" => 3,
        ]);
        DB::table("products")->insert([
            "name" => "Espiral Vienes",
            "description" => "Masa hojaldrada rellena con pasta de almendras, cacao, cerezas y almendras tostada.",
            "price" => 790,
            "state" => 1,
            "important" => 0,
            "id_category" => 3,
        ]);
        DB::table("products")->insert([
            "name" => "Balcarce",
            "description" => "Bizcochuelo de vainilla, dulce de leche, duraznos, crema chantilly, trozos de merengue.",
            "price" => 7500,
            "state" => 1,
            "important" => 0,
            "id_category" => 1,
        ]);
        DB::table("products")->insert([
            "name" => "Serva negra",
            "description" => "Bizcochuelo de chocolate con dos cortes. Uno con crema chantilly y cerezas al marrasquino; y el otro corte con dulce de frambuesas. Humedecida con almibar de cerezas. Cubierta con crema chantilly y virutas de chocolate al 70%.",
            "price" => 7500,
            "state" => 1,
            "important" => 0,
            "id_category" => 1,
        ]);
        DB::table("products")->insert([
            "name" => "Tarta manzana",
            "description" => "Base de masa sable breton rellena con puré de manzanas, con miel y un toque de canela. Cubierta con un crocante stroisel.",
            "price" => 3580,
            "state" => 1,
            "important" => 0,
            "id_category" => 1,
        ]);
        DB::table("products")->insert([
            "name" => "Rogel",
            "description" => "Discos de masa crocante, dulce de leche y el clásico merengue Italiano.",
            "price" => 5500,
            "state" => 1,
            "important" => 0,
            "id_category" => 1,
        ]);
        DB::table("products")->insert([
            "name" => "Tarta copitos",
            "description" => "Base de masa sable breton rellena con copitos de dulce de leche y bañada de chocolate al 70% de cacao",
            "price" => 4700,
            "state" => 1,
            "important" => 0,
            "id_category" => 1,
        ]);
    }
}
