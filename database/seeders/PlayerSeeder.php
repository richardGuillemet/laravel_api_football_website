<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Players')->insert([
            'prenom' => "karim",
            'nom' => "benzema",
            'date_naissance' => "1987-12-19",
            'age' => 34,
            'nationalite' => "français",
            'presentation' => "Karim Benzema, surnommé KB9 ou El Nueve en Espagne, né le 19 décembre 1987 à Lyon, est un footballeur international français évoluant au poste d'avant-centre au Real  Madrid.Natif de Lyon, il intègre le centre de formation de l'Olympique lyonnais à l'âge de dix ans et signe son premier contrat professionnel en 2005.",
            'photo' => "benzema.png",
            'club_id' => 12,
        ]);

        DB::table('Players')->insert([
            'prenom' => "maxence",
            'nom' => "caqueret",
            'date_naissance' => "2000-02-15",
            'age' => 22,
            'nationalite' => "français",
            'presentation' => "Maxence Caqueret, né le 15 février 2000 à Vénissieux, est un footballeur français qui évolue au poste de milieu de terrain à l'Olympique lyonnais.",
            'photo' => "caqueret.png",
            'club_id' => 9,
        ]);

        DB::table('Players')->insert([
            'prenom' => "rúben",
            'nom' => "dias",
            'date_naissance' => "1997-05-14",
            'age' => 25,
            'nationalite' => "portugais",
            'presentation' => "Rúben Dias, de son nom complet Rúben Santos Gato Alves Dias, né le 14 mai 1997 à Amadora au Portugal, est un footballeur international portugais, évoluant actuellement à Manchester City au poste de défenseur central.",
            'photo' => "dias.png",
            'club_id' => 5,
        ]);

        DB::table('Players')->insert([
            'prenom' => "joão",
            'nom' => "félix",
            'date_naissance' => "1999-11-10",
            'age' => 22,
            'nationalite' => "portugais",
            'presentation' => "João Félix Sequeira, né le 10 novembre 1999 à Viseu (Portugal), est un footballeur international portugais qui évolue au poste de milieu offensif ou d'attaquant de soutien au sein de l'Atlético de Madrid. Il est considéré, depuis son éclosion au Benfica Lisbonne au cours de la saison 2018-2019, comme un grand espoir du football mondial.",
            'photo' => "felix.png",
            'club_id' => 1,
        ]);

        DB::table('Players')->insert([
            'prenom' => "pablo martín páez",
            'nom' => "gavi",
            'date_naissance' => "2004-08-05",
            'age' => 18,
            'nationalite' => "espagnol",
            'presentation' => "Pablo Martín Páez Gavira, dit Gavi, né le 5 août 2004 à Los Palacios y Villafranca (province de Séville, Espagne), est un footballeur international espagnol qui évolue actuellement au poste de milieu de terrain au FC Barcelone.",
            'photo' => "gavi.png",
            'club_id' => 2,
        ]);

        DB::table('Players')->insert([
            'prenom' => "antoine",
            'nom' => "Griezmann",
            'date_naissance' => "1991-03-21",
            'age' => 31,
            'nationalite' => "français",
            'presentation' => "Antoine Griezmann, né le 21 mars 1991 à Mâcon, est un footballeur international français évoluant au poste d'attaquant ou milieu offensif à l'Atlético de Madrid, en prêt du FC Barcelone. Recruté par la Real Sociedad à l'âge de quatorze ans, il fait ses débuts dans le championnat d'Espagne en 2009-2010. Il est ensuite recruté par l'Atlético de Madrid et devient un des plus brillants acteurs de la Liga dont il sera désigné meilleur joueur du championnat en 2016.",
            'photo' => "griezmann.png",
            'club_id' => 1,
        ]);

        DB::table('Players')->insert([
            'prenom' => "erling",
            'nom' => "haaland",
            'date_naissance' => "2000-07-21",
            'age' => 22,
            'nationalite' => "norvégien",
            'presentation' => "Erling Braut Haaland, né le 21 juillet 2000 à Leeds dans le Yorkshire de l'Ouest, en Angleterre, est un footballeur international norvégien, évoluant au poste d'attaquant à Manchester City. Fils du footballeur Alf-Inge Håland, Erling Håland est formé au Bryne FK, avec qui il fait ses débuts professionnels en 2016. Lors de la saison suivante, il rejoint le Molde FK où, après une année d'adaptation, il découvre la Ligue Europa. En janvier 2019, il rejoint le club autrichien du RB Salzbourg.",
            'photo' => "haaland.png",
            'club_id' => 5,
        ]);

        DB::table('Players')->insert([
            'prenom' => "pierre",
            'nom' => "kalulu",
            'date_naissance' => "2000-06-05",
            'age' => 22,
            'nationalite' => "français",
            'presentation' => "Pierre Kalulu, né le 5 juin 2000 à Lyon, est un footballeur français d'origine congolaise (RDC). Pouvant évoluer au poste de défenseur central ou d'arrière droit, il joue à l'AC Milan depuis 2020.",
            'photo' => "kalulu.png",
            'club_id' => 8,
        ]);

        DB::table('Players')->insert([
            'prenom' => "joshua",
            'nom' => "kimmich",
            'date_naissance' => "1995-02-08",
            'age' => 27,
            'nationalite' => "allemand",
            'presentation' => "Joshua Kimmich, né le 8 février 1995 à Rottweil en Allemagne, est un footballeur international allemand qui évolue au poste de milieu de terrain ou de défenseur latéral au Bayern Munich.",
            'photo' => "kimmich.png",
            'club_id' => 3,
        ]);

        DB::table('Players')->insert([
            'prenom' => "kylian",
            'nom' => "mbappé",
            'date_naissance' => "1998-12-20",
            'age' => 23,
            'nationalite' => "français",
            'presentation' => "Kylian Mbappé, né le 20 décembre 1998 à Paris, est un footballeur international français qui évolue au poste d'attaquant au Paris Saint-Germain, en Ligue 1. Vainqueur du championnat de France en 2017 avec l'AS Monaco, il est transféré au Paris Saint-Germain le 31 août 2017. Le soir même, il marque son premier but en équipe de France.",
            'photo' => "mbappe.png",
            'club_id' => 11,
        ]);

        DB::table('Players')->insert([
            'prenom' => "edouard",
            'nom' => "mendy",
            'date_naissance' => "1992-03-01",
            'age' => 30,
            'nationalite' => "sénégalais",
            'presentation' => "Édouard Mendy, né le 1er mars 1992 à Montivilliers en France, est un footballeur international sénégalais qui évolue au poste de gardien de but au Chelsea FC.",
            'photo' => "mendy.png",
            'club_id' => 4,
        ]);

        DB::table('Players')->insert([
            'prenom' => "luka",
            'nom' => "modric",
            'date_naissance' => "1985-09-09",
            'age' => 36,
            'nationalite' => "croate",
            'presentation' => "Luka Modrić, né le 9 septembre 1985 à Zadar en Yougoslavie (aujourd'hui en Croatie), est un footballeur international croate. Il évolue au poste de milieu de terrain au Real Madrid. Il est, avec Davor Šuker et Bernard Vukas, considéré comme l'un des plus grands joueurs croates de l'histoire.",
            'photo' => "modric.png",
            'club_id' => 12,
        ]);

        DB::table('Players')->insert([
            'prenom' => "dimitri",
            'nom' => "payet",
            'date_naissance' => "1987-03-29",
            'age' => 35,
            'nationalite' => "français",
            'presentation' => "Dimitri Payet, né le 29 mars 1987 à Saint-Pierre sur l'île de La Réunion, est un footballeur international français qui évolue au poste de milieu offensif à l'Olympique de Marseille.",
            'photo' => "payet.png",
            'club_id' => 10,
        ]);

        DB::table('Players')->insert([
            'prenom' => "Gerard",
            'nom' => "piqué",
            'date_naissance' => "1987-02-02",
            'age' => 35,
            'nationalite' => "espagnol",
            'presentation' => "Gerard Piqué Bernabéu, né le 2 février 1987 à Barcelone (Catalogne, Espagne), est un footballeur international espagnol. Il évolue au sein du FC Barcelone à partir de 2008 au poste de défenseur central. Il débute avec l'équipe d'Espagne en 2009.",
            'photo' => "pique.png",
            'club_id' => 2,
        ]);

        DB::table('Players')->insert([
            'prenom' => "marco",
            'nom' => "reus",
            'date_naissance' => "1989-05-31",
            'age' => 33,
            'nationalite' => "allemand",
            'presentation' => "Marco Reus, né le 31 mai 1989 à Dortmund (Allemagne), est un footballeur international allemand. Il évolue au poste de milieu offensif, d'attaquant et d'ailier au Borussia Dortmund.",
            'photo' => "reus.png",
            'club_id' => 6,
        ]);

        DB::table('Players')->insert([
            'prenom' => "cristiano",
            'nom' => "ronaldo",
            'date_naissance' => "1985-02-25",
            'age' => 37,
            'nationalite' => "portugais",
            'presentation' => "Cristiano Ronaldo dos Santos Aveiro, couramment appelé Cristiano Ronaldo ou Ronaldo et surnommé CR7, né le 5 février 1985 à Funchal, est un footballeur international portugais qui évolue au poste d'attaquant à Manchester United.",
            'photo' => "ronaldo.png",
            'club_id' => 13,
        ]);

        DB::table('Players')->insert([
            'prenom' => "fikayo",
            'nom' => "tomori",
            'date_naissance' => "1997-12-19",
            'age' => 24,
            'nationalite' => "anglais",
            'presentation' => "Oluwafikayomi Oluwadamilola « Fikayo » Tomori, né le 19 décembre 1997 à Calgary (Canada), est un footballeur international anglais qui évolue au poste de défenseur à l'AC Milan.",
            'photo' => "tomori.png",
            'club_id' => 8,
        ]);

        DB::table('Players')->insert([
            'prenom' => "virgil",
            'nom' => "van dijk",
            'date_naissance' => "1991-07-08",
            'age' => 31,
            'nationalite' => "néerlandais",
            'presentation' => "Virgil van Dijk, né le 8 juillet 1991 à Bréda aux Pays-Bas, est un footballeur international néerlandais qui évolue au poste de défenseur central au Liverpool FC.",
            'photo' => "vandijk.png",
            'club_id' => 7,
        ]);
    }
}
