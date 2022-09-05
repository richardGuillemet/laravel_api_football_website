<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChampionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Championships')->insert([
            'nom' => 'ligue1',
            'logo' => "ligue1.png",
            'presentation' => "Le Championnat de France de football, appelé Ligue 1 (ou Ligue 1 Uber Eats pour des raisons de sponsoring avec Uber EatsNote 3) est le championnat professionnel de football masculin de plus haut niveau de la Fédération française de football. Il regroupe les meilleurs clubs de France et de Monaco. Créé en 1932 sous le nom « Division nationale », il devient en 1972 « Division 1 » (D1) et reçoit en 2002 son nom actuel de « Ligue 1 » (L1). Organisé annuellement, de l'été au printemps suivant, par la Ligue de football professionnel, il oppose actuellement vingt clubs sur 38 journées (aller et retour) diffusées à la télévision par Canal+1 depuis 1984, et sur Prime Video depuis 2021. La première affiche diffusée sur cette chaîne a été un match entre le FC Nantes et l'AS Monaco.",
            'indice_uefa' => 5,
            "pays" => "france",
        ]);

        DB::table('Championships')->insert([
            'nom' => 'bundesliga',
            'logo' => "bundesliga.png",
            'presentation' => "Le Championnat d'Allemagne de football est créé en 1903. Jusqu'en 1963, le statut des clubs est amateur et le championnat national consiste en une phase finale entre les différents champions régionaux. Le championnat professionnel à poule unique, la Bundesliga, est créé en 1963. Le Bayern Munich, vainqueur en 2021-2022, détient le record du nombre de victoires, avec 32 titres.",
            'indice_uefa' => 4,
            "pays" => "allemagne",
        ]);

        DB::table('Championships')->insert([
            'nom' => 'liga',
            'logo' => "liga.png",
            'presentation' => "Le championnat d'Espagne de l'élite est la Primera División entre 1929 et 2008 puis Liga BBVA de 2008 à 2016 et LaLiga Santander depuis 2016. Dans le langage courant, le terme de « Liga » est souvent utilisé pour désigner la compétition, bien que liga signifie simplement « ligue » en espagnol. L'antichambre de cette division est le championnat d'Espagne de football de deuxième division. Le Real Madrid a remporté l'édition 2021-2022, portant son nombre de titre à 351.",
            'indice_uefa' => 2,
            "pays" => "espagne",
        ]);

        DB::table('Championships')->insert([
            'nom' => 'premier league',
            'logo' => "premier_league.png",
            'presentation' => "Le championnat d'Angleterre de football est la plus importante compétition de football en Angleterre. Lancée en 1888 par la Football Association sous le nom de « Football League », la compétition laisse place en 1992 à la Premier League, transformée en Barclays Premier League de 2004 à 2016 avant de reprendre son appellation précédente.",
            'indice_uefa' => 1,
            "pays" => "angleterre",
        ]);

        DB::table('Championships')->insert([
            'nom' => 'serie',
            'logo' => "seriea.png",
            'presentation' => "Le Championnat d'Italie de football, dénommé Serie A est une compétition de football qui représente en Italie le sommet de la hiérarchie du football. La seconde division italienne est la Serie B. Ce championnat regroupe les vingt meilleures équipes italiennes. Elles se rencontrent chacune à deux reprises (un match à domicile et un match à l'extérieur). À la fin de la saison, les trois équipes totalisant le plus faible nombre de points sont reléguées (elles sont départagées à la différence de buts en cas d'égalité). Quant aux quatre premières, elles sont directement qualifiées pour la Ligue des champions. L'équipe en cinquième position est elle en Ligue Europa ainsi que le vainqueur de la Coupe d'Italie (s'il ne dispute pas la Ligue des Champions) et celle en 6e position sera au deuxième tour de qualification).",
            'indice_uefa' => 3,
            "pays" => "italie",
        ]);
    }
}
