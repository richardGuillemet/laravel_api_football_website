<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Teams')->insert([
            'nom' => 'atletico madrid',
            'logo' => "atletico.png",
            'presentation' => "Le Club Atlético de Madrid S.A.D, plus couramment appelé Atlético de Madrid, Atlético ou Atleti, est un club de football espagnol basé à Madrid, qui dispute actuellement la Liga.Au niveau national, l’Atlético est sacré champion d’Espagne à onze reprises et a remporté dix Coupes du Roi, dont un doublé coupe-championnat en 1996. Au niveau européen, le club gagne la Coupe d'Europe des vainqueurs de coupe4 en 1962, la Coupe intercontinentale en 1975 et la Ligue Europa à trois reprises en 20105, en 2012 et en 2018, et trois éditions de la Supercoupe d'Europe en 2010, 2012 et 2018. Il atteint également la finale de la Ligue des champions de l'UEFA en 1974 , en 2014 et en 2016.",
            "pays" => "espagne",
            "championnat_id" => 3,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'barcelone',
            'logo' => "barcelone.png",
            'presentation' => "Le Futbol Club Barcelona, communément appelé FC Barcelone (diminutif Barça), est un club de football espagnol fondé en 1899, basé à Barcelone, capitale de la Catalogne, et qui évolue dans le championnat d'Espagne. C'est la section football du club omnisports de même nom. Il a remporté au total vingt-six championnats, trente-et-une coupes d'Espagne, cinq Ligues des champions, quatre coupes des vainqueurs de coupe, trois coupes des villes de foires et trois coupes du monde des clubs.",
            "pays" => "espagne",
            "championnat_id" => 3,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'bayern munich',
            'logo' => "bayern.png",
            'presentation' => "Le Bayern Munich (Fußball-Club Bayern München e.V.) est un club omnisports allemand fondé le 27 février 1900 et basé à Munich, en Bavière. L'équipe joue depuis 1965 en Bundesliga et est surnommée Rekordmeister (en français : « Détenteur du record de titres »)3, il est le club européen le plus titré du 21e siècle (2e au monde).",
            "pays" => "allemagne",
            "championnat_id" => 2,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'chelsea',
            'logo' => "chelsea.png",
            'presentation' => "Chelsea Football Club (CFC) est un club de football professionnel anglais fondé le 10 mars 1905 à Londres. Son siège est situé dans le quartier de Fulham, au sein du borough de Hammersmith et Fulham, dans le sud-ouest de la capitale britannique. Il évolue actuellement en Premier League et a passé la majorité de son histoire dans la plus haute division du football anglais. Leur stade est Stamford Bridge, qui comprend 40 341 places6,7, et où le club évolue depuis sa fondation.",
            "pays" => "angleterre",
            "championnat_id" => 4,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'manchester city',
            'logo' => "city.png",
            'presentation' => "Le Manchester City Football Club est un club de football anglais basé à Manchester et fondé en 1880 sous le nom de St. Mark's (West Gorton). Le club devint le Ardwick Association Football Club en 1887 avant de prendre son nom actuel en 1894. Surnommée City, The Citizens, ou encore, The Sky Blues (Les Bleu Ciel), l'équipe professionnelle évolue depuis 2003 à l'Etihad Stadium. Le derby mancunien l’oppose à l’autre grand club de la ville, Manchester United. Depuis le 1er juillet 2016, le club est entraîné par Pep Guardiola.",
            "pays" => "angleterre",
            "championnat_id" => 4,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'borussia dortmund',
            'logo' => "dortmund.png",
            'presentation' => "Le BV Borussia 09 Dortmund, communément appelé Borussia Dortmund ou BVB, est un club de football allemand fondé le 19 décembre 1909 et basé à Dortmund. Le nom complet du club Ballspiel-Verein Borussia signifie en allemand \"association de jeu de balle Borussia\". Si sa section football est la plus célèbre, le BVB comprend aussi des équipes de handball3 et de tennis de table4. Bien que \"Borussia\" soit le nom latin de la Prusse, c'est au nom d'une brasserie locale qu'il était fait référence5. Le club évolue en 1. Bundesliga, la première division du football allemand.",
            "pays" => "allemagne",
            "championnat_id" => 2,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'liverpool',
            'logo' => "liverpool.png",
            'presentation' => "Le Liverpool Football Club est un club de football anglais fondé le 13 août 1892 et basé à Liverpool, dans le Nord-Ouest de l'Angleterre. Ses joueurs (les « Reds ») évoluent depuis sa création au stade d'Anfield. Son emblème est le « Liver bird », un oiseau mythique, mi-cormoran mi-aigle. Le chant You'll Never Walk Alone, l'hymne et la devise du club, est mondialement connu. Le Liverpool FC possède l'un des plus beaux palmarès européens avec six Ligues des champions, trois Coupes de l'UEFA, quatre Supercoupes de l'UEFA, et une coupe du monde des clubs, et l'un des plus grands palmarès anglais avec dix-neuf championnats d'Angleterre, huit Coupes d'Angleterre, neuf Coupes de la Ligue et seize Community Shield.",
            "pays" => "angleterre",
            "championnat_id" => 4,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'milan ac',
            'logo' => "milan.png",
            'presentation' => "L'Associazione Calcio Milan (association de football de Milan), connu sous le nom d'AC Milan5, est un club de football italien fondé le 16 décembre 1899 sous le nom initial de Milan Foot-Ball and Cricket Club6. L'équipe première, qui évolue en Serie A, est entraînée par Stefano Pioli. Le club possède également une section féminine évoluant en Série A.",
            "pays" => "italie",
            "championnat_id" => 5,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'olympique lyonnais',
            'logo' => "ol.png",
            'presentation' => "L'Olympique lyonnais (OL) est un club de football français fondé en 1950 à Lyon. Le club, basé au Parc Olympique lyonnais à Décines-Charpieu, est présidé depuis juin 1987 par Jean-Michel Aulas.L'équipe masculine évolue depuis 1989 en Ligue 1 et est entraînée depuis mai 2021 par Peter Bosz. Le club possède également une section féminine évoluant en Division 1 et entraînée par Sonia Bompastor.",
            "pays" => "france",
            "championnat_id" => 1,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'olympique de marseille',
            'logo' => "om.png",
            'presentation' => "L'Olympique de Marseille (OM) est un club de football français fondé en 1899 à Marseille par René Dufaure de Montmirail. Le club marseillais joue au stade de l'Huveaune de 1904 à 1937, date à laquelle est inauguré le stade Vélodrome. Auparavant, le club remporte sa première Coupe de France en 1924 et devient le tout premier club provincial à s'adjuger ce titre. L'OM est l'un des clubs qui a joué durant la saison inaugurale 1932-1933 et qui évolue encore en Ligue 1 aujourd'hui. Après un premier titre de champion de France en 1929, dans une compétition aujourd'hui disparue, le club phocéen remporte son premier championnat professionnel en 1937.",
            "pays" => "france",
            "championnat_id" => 1,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'paris saint germain',
            'logo' => "psg.png",
            'presentation' => "Le Paris Saint-Germain Football Club, couramment abrégé en Paris Saint-Germain FC, Paris Saint-Germain, Paris SG, ou PSG, est un club de football français, basé à Saint-Germain-en-Laye et à Paris. C'est la section football du Paris Saint-Germain omnisports. Présent depuis la saison 1974-1975, le club s'entraîne au Camp des Loges à Saint-Germain-en-Laye et joue au Parc des Princes à Paris.",
            "pays" => "france",
            "championnat_id" => 1,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'paris saint germain',
            'logo' => "psg.png",
            'presentation' => "Le Paris Saint-Germain Football Club, couramment abrégé en Paris Saint-Germain FC, Paris Saint-Germain, Paris SG, ou PSG, est un club de football français, basé à Saint-Germain-en-Laye et à Paris. C'est la section football du Paris Saint-Germain omnisports. Présent depuis la saison 1974-1975, le club s'entraîne au Camp des Loges à Saint-Germain-en-Laye et joue au Parc des Princes à Paris.",
            "pays" => "france",
            "championnat_id" => 1,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'real madrid',
            'logo' => "real.png",
            'presentation' => "Le Real Madrid Club de Fútbol, plus connu sous le nom de Real Madrid ou simplement Real, est un club professionnel espagnol de football, basé à Madrid. Vainqueur de très nombreux titres nationaux et internationaux, il a reçu de la Fédération internationale de football association (FIFA) le titre honorifique de plus grand club du xxe siècle.",
            "pays" => "espagne",
            "championnat_id" => 3,
        ]);

        DB::table('Teams')->insert([
            'nom' => 'manchester united',
            'logo' => "united.png",
            'presentation' => "Le Manchester United Football Club est un club de football anglais basé dans le district de Trafford, à proximité de la ville de Manchester. Fondé en 1878 sous le nom de Newton Heath, Manchester United évolue à Old Trafford, son stade historique, qui tire son surnom de « Théâtre des rêves » des exploits réalisés au fil des années par le club mancunien.",
            "pays" => "angleterre",
            "championnat_id" => 4,
        ]);
    }
}
