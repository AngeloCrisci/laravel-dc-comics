<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $manga = [
            [
                'title' => 'Naruto',
                'description' => 'Naruto Uzumaki è un giovane ninja con il sogno di diventare il più grande ninja del villaggio e guadagnarsi il titolo di Hokage.',
                'price' => '9.99',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/5/17407l.jpg?_gl=1*t80alj*_gcl_au*MjExNjU5MTA2LjE3Mjk2OTIxMzM.*_ga*NjE5Njg0Njg2LjE3Mjk2OTIxMzI.*_ga_26FEP9527K*MTcyOTY5MjEzMy4xLjEuMTcyOTY5MjE1MC40My4wLjA.',
                'author' => 'Masashi Kishimoto'
            ],
            [
                'title' => 'One Piece',
                'description' => 'Monkey D. Luffy e la sua ciurma di pirati sono alla ricerca del leggendario tesoro chiamato One Piece.',
                'price' => '8.99',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/5/19082l.jpg',
                'author' => 'Eiichiro Oda'
            ],
            [
                'title' => 'Attack on Titan',
                'description' => 'In un mondo dove l\'umanità è sull\'orlo dell\'estinzione a causa dei giganti, Eren Yeager lotta per proteggere la sua gente.',
                'price' => '12.50',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/10/47347l.jpg',
                'author' => 'Hajime Isayama'
            ],
            [
                'title' => 'Death Note',
                'description' => 'Un giovane studente di nome Light Yagami trova un quaderno che gli consente di uccidere chiunque scriva il nome al suo interno.',
                'price' => '10.99',
                'thumb' => 'https://cdn.myanimelist.net/images/manga/1/258245l.jpg',
                'author' => 'Tsugumi Ohba, Takeshi Obata'
            ],
            [
                'title' => 'My Hero Academia',
                'description' => 'In un mondo dove quasi tutti hanno poteri speciali, Izuku Midoriya è un ragazzo senza abilità che sogna di diventare un eroe.',
                'price' => '11.99',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/9/76970l.jpg?_gl=1*6drm9i*_gcl_au*MjExNjU5MTA2LjE3Mjk2OTIxMzM.*_ga*NjE5Njg0Njg2LjE3Mjk2OTIxMzI.*_ga_26FEP9527K*MTcyOTY5MjEzMy4xLjEuMTcyOTY5MjM4OC43LjAuMA..',
                'author' => 'Kohei Horikoshi'
            ],
            [
                'title' => 'Fullmetal Alchemist',
                'description' => 'Due fratelli, Edward e Alphonse Elric, cercano la Pietra Filosofale per riparare i danni causati a seguito di un esperimento alchemico fallito.',
                'price' => '13.50',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/2/17472l.jpg',
                'author' => 'Hiromu Arakawa'
            ],
            [
                'title' => 'Dragon Ball',
                'description' => 'Le avventure di Goku, un ragazzo con una coda di scimmia, che esplora il mondo in cerca delle Sfere del Drago per esaudire il suo desiderio.',
                'price' => '7.99',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/9/21055l.jpg',
                'author' => 'Akira Toriyama'
            ],
            [
                'title' => 'Tokyo Ghoul',
                'description' => 'Ken Kaneki, un giovane studente, viene trasformato in un ghoul, una creatura che si nutre di esseri umani, dopo un incontro con uno di loro.',
                'price' => '11.00',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/1063/95086l.jpg',
                'author' => 'Sui Ishida'
            ],
            [
                'title' => 'Demon Slayer: Kimetsu no Yaiba',
                'description' => 'Tanjiro Kamado, un ragazzo che vive nella montagna, diventa un cacciatore di demoni dopo che la sua famiglia viene sterminata da un demone.',
                'price' => '10.50',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/1238/103624l.jpg',
                'author' => 'Koyoharu Gotouge'
            ],
            [
                'title' => 'One Punch Man',
                'description' => 'Saitama, un uomo che può sconfiggere chiunque con un solo pugno, cerca un avversario degno del suo potere.',
                'price' => '9.99',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/12/76049l.jpg?_gl=1*1i1bt9m*_gcl_au*MjExNjU5MTA2LjE3Mjk2OTIxMzM.*_ga*NjE5Njg0Njg2LjE3Mjk2OTIxMzI.*_ga_26FEP9527K*MTcyOTY5MjEzMy4xLjEuMTcyOTY5MjYyMy4yMy4wLjA.',
                'author' => 'ONE, Yusuke Murata'
            ],
            [
                'title' => 'Sword Art Online',
                'description' => 'Kirito, uno dei giocatori di un videogioco di realtà virtuale, deve lottare per la propria vita in un mondo dove i giocatori sono intrappolati.',
                'price' => '8.49',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/8/36343l.jpg',
                'author' => 'Reki Kawahara'
            ],
            [
                'title' => 'Hunter x Hunter',
                'description' => 'Gon Freecss scopre che suo padre, un leggendario Hunter, è ancora vivo e decide di intraprendere il viaggio per diventare anche lui un Hunter e trovarlo.',
                'price' => '9.99',
                'thumb' => 'https://cdn.myanimelist.net/images/anime/10/66303l.jpg',
                'author' => 'Yoshihiro Togashi'
            ],
        ];

        foreach ($manga as $item){
            $newItem = new Comic();
            $newItem->title = $item["title"];
            $newItem->description = $item["description"];
            $newItem->price = $item["price"];
            $newItem->thumb = $item["thumb"];
            $newItem->author = $item["author"];
            $newItem->save();
        }

    }
}
