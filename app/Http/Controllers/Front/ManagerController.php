<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class ManagerController extends Controller
{
    //
    public function Welcome(): View
    {
        // $articles = [
        //     [
        //         'image' => 'partners.png',
        //         'alt' => 'Actualité de la FANAF',
        //         'title' => "Accompagnement stratégique d'un groupe agroalimentaire",
        //         'description' => "Participation aux échanges sur l'épargne longue, le financement des économies africaines et les marchés de capitaux.",
        //     ],
        //     [
        //         'image' => 'hero-building.png',
        //         'alt' => 'Actualité sur le secteur industriel',
        //         'title' => "Accompagnement stratégique d'un groupe agroalimentaire",
        //         'description' => "Participation aux échanges sur l'épargne longue, le financement des économies africaines et les marchés de capitaux.",
        //     ],
        //     [
        //         'image' => 'hero-bg.png',
        //         'alt' => "Actualité sur l'économie africaine",
        //         'title' => "Accompagnement stratégique d'un groupe agroalimentaire",
        //         'description' => "Participation aux échanges sur l'épargne longue, le financement des économies africaines et les marchés de capitaux.",
        //     ],
        // ];

        $articles = Post::where('status', 'published')->get();

        return view('front.welcome', compact('articles'));
    }

    public function NousConnaitre()
    {
        return view('front.nous-connaitre');
    }

    public function Expertise()
    {
        return view('front.expertise');
    }

    public function TransactionAll() 
    {
        return view('front.transactions.index');
    }

    public function ActulatiesAll() 
    {
        $articles = Post::where('status', 'published')->get();
        return view('front.actualities.index', compact('articles'));
    }

    public function ActualiteShow(int $item_id, string $slug) 
    {
        $item = Post::where('id', $item_id)->where('slug', $slug)->where('status', 'published')->first();
        
        return view('front.actualities.show', compact('item'));
    }

    public function Contact() 
    {
        return view('front.contact');
    }
}
