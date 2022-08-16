<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_description = "Lorem ipsum dolor sit amet, vix natum propriae dissentiunt in, amet melius mel ut, ad eum quem facer nonumy. Nec ad ludus putant, cu duis feugiat iudicabit mei. Ius veniam inciderint at, habeo facilis ad vis. Ut sed quando adipiscing definitiones. Integre gubergren at per. Idque doming dicunt ea duo, eos sale postea splendide in."."\n
        Ne vim aliquid delicata. Et adhuc recteque vituperata mea. Eu possit iisque ius. Vis movet nonumy omittam ne. Solet iudico timeam ex est, has solum cetero te, at minim nostrud usu. An nec magna decore inimicus, mei vide tibique et. Ei unum errem vix, ius zril consul interpretaris et, ex zril nusquam inciderint vel."."\n
        Dicta eirmod tamquam ex eam, in exerci verterem invenire cum, at nam agam cibo. Nihil constituto vituperatoribus cum ex. Has at ponderum dissentiet, vim ne commune tacimates eleifend. At agam animal oportere mel, mutat ridens molestiae an mea. Eum ipsum maiorum appareat an, at est odio suscipiantur, solum exerci pri eu."."\n
        Pri essent iriure an, cu zril indoctum sea, vel magna consul fabulas ut. Ea duo justo blandit liberavisse. Ferri euismod sententiae mei in, nam ne volutpat dignissim, dicunt mentitum constituto an nam. Has sonet scripta ea, his quod insolens theophrastus cu. Platonem principes assueverit no vix, id dicat reprehendunt sea."."\n 
        In fuisset neglegentur complectitur quo, prompta denique ei est, mel illud ipsum ad. Scripta noluisse incorrupte in has, verear iriure delenit eos et. Libris vituperatoribus te pro, denique dissentiunt et per. Duo latine verterem evertitur eu. Ne eius viderer splendide vim, ad quem prima choro eos."."\n";
        Post::create([
            'title' => 'Summer',
            'url' => 'https://cdn.pixabay.com/photo/2016/04/15/14/07/sunset-1331088_960_720.jpg',
            'description' => 'Lorem ipsum dolor sit amet, vix natum propriae dissentiunt in, amet melius mel ut, ad eum quem facer nonumy. Nec ad ludus putant, cu duis feugiat iudicabit mei. Ius veniam inciderint at, habeo facilis ad vis. Ut sed quando adipiscing definitiones. Integre gubergren at per. Idque doming dicunt ea duo, eos sale postea splendide in.

            Ne vim aliquid delicata. Et adhuc recteque vituperata mea. Eu possit iisque ius. Vis movet nonumy omittam ne. Solet iudico timeam ex est, has solum cetero te, at minim nostrud usu. An nec magna decore inimicus, mei vide tibique et. Ei unum errem vix, ius zril consul interpretaris et, ex zril nusquam inciderint vel.
            
            Dicta eirmod tamquam ex eam, in exerci verterem invenire cum, at nam agam cibo. Nihil constituto vituperatoribus cum ex. Has at ponderum dissentiet, vim ne commune tacimates eleifend. At agam animal oportere mel, mutat ridens molestiae an mea. Eum ipsum maiorum appareat an, at est odio suscipiantur, solum exerci pri eu.
            
            Pri essent iriure an, cu zril indoctum sea, vel magna consul fabulas ut. Ea duo justo blandit liberavisse. Ferri euismod sententiae mei in, nam ne volutpat dignissim, dicunt mentitum constituto an nam. Has sonet scripta ea, his quod insolens theophrastus cu. Platonem principes assueverit no vix, id dicat reprehendunt sea.
            
            In fuisset neglegentur complectitur quo, prompta denique ei est, mel illud ipsum ad. Scripta noluisse incorrupte in has, verear iriure delenit eos et. Libris vituperatoribus te pro, denique dissentiunt et per. Duo latine verterem evertitur eu. Ne eius viderer splendide vim, ad quem prima choro eos.'
        ]);

        Post::create([
            'title' => 'Winter',
            'url' => 'https://cdn.pixabay.com/photo/2017/01/14/12/59/iceland-1979445_960_720.jpg',
            'description' => $default_description
        ]);

        Post::create([
            'title' => 'Automn',
            'url' => 'https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072821_960_720.jpg',
            'description' => $default_description
        ]);

        Post::create([
            'title' => 'Rain',
            'url' => 'https://cdn.pixabay.com/photo/2020/02/20/08/42/heavy-rain-4864257_960_720.jpg',
            'description' => $default_description
        ]);

        Post::create([
            'title' => 'Nature',
            'url' => 'https://cdn.pixabay.com/photo/2015/12/01/20/28/forest-1072828_960_720.jpg',
            'description' => $default_description
        ]);

        Post::create([
            'title' => 'Beach',
            'url' => 'https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072_960_720.jpg',
            'description' => $default_description
        ]);

        Post::create([
            'title' => 'Mountains',
            'url' => 'https://cdn.pixabay.com/photo/2015/04/23/22/01/mountains-736886_960_720.jpg',
            'description' => $default_description
        ]);

        Post::create([
            'title' => 'LAKE',
            'url' => 'https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg',
            'description' => $default_description
        ]);

        Post::create([
            'title' => 'Work',
            'url' => 'https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg',
            'description' => $default_description
        ]);

        Post::create([
            'title' => 'Read',
            'url' => 'https://cdn.pixabay.com/photo/2015/11/19/21/10/glasses-1052010_960_720.jpg',
            'description' => $default_description
        ]);
    }
}
