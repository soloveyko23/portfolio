<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    protected $corporates;
    protected $eCommerce;
    protected $other;

    public function __construct()
    {
        $this->corporates = config('portfolio.corporates', []);
        $this->eCommerce = config('portfolio.eCommerce', []);
        $this->other = config('portfolio.other', []);
    }

    public function index()
    {
        return view('front.index', [
            'portfolioCorporates' => [
                $this->corporates[2], // HOMEWOOD
                $this->corporates[12], // NOVOBUDOVA
                $this->corporates[1], // EQUIS
                $this->corporates[0], // REDDIT-MARKETING
                $this->corporates[8], // HELLAS DENTAL
                $this->corporates[9], // PROSTO PEREEZD
                $this->corporates[10], // BRAVE TATTOO
                $this->corporates[13], // ВТС
                $this->other[3], // mobios school
                $this->other[45], // IDEALSTROY
                $this->other[14], // UKRTICKET
                $this->other[1], // MOBILUS
                $this->other[34], // BODYFORCE
                $this->corporates[11], // DAMBA
                $this->other[52], // NONNA
            ],
            'portfolioEcommerce' => [
                $this->other[12], // NAIZNANKU
                $this->other[6], // NASVITLO
                $this->other[2], // KARE
                $this->other[4], // HOZSKLAD
                $this->other[35], // CAPPI
                $this->other[32], // EASYPIZZA
                $this->other[20], // KOLGOTOFF
                $this->other[31], // ESTE
                $this->other[22], // PLANETA KOLGOT
                $this->other[27], // CITY PARKING
                $this->other[8], // POSUDGRAD
                $this->other[79], // BIGFOOD
            ],
            'portfolioOther' => [
                $this->other[36], // АТЛАНТА СТРОЙ
                $this->other[34], // BODy FORCE
                $this->other[80], // DRESS ISLAND
                $this->other[81], // EQUIS AGROGROUP
                $this->other[42], // JEANS MARKET
                $this->other[38], // LK ENERGY GROUP
                $this->other[22], // PLANETA KOLGOT
                $this->other[82], // SWIFT SOFT
                $this->other[83], // MARINE
                $this->other[84], // TRUST TIME
                $this->other[19], // UNIQUE
                $this->other[79], // BIGFOOD
            ],
        ]);
    }

    public function e_commerce()
    {
        return view('front.e_commerce', [
            'portfolioEcommerce' => [
                $this->other[12], // NAIZNANKU
                $this->other[6], // NASVITLO
                $this->other[2], // KARE
                $this->other[4], // HOZSKLAD
                $this->other[35], // CAPPI
                $this->other[32], // EASYPIZZA
                $this->other[20], // KOLGOTOFF
                $this->other[31], // ESTE
                $this->other[22], // PLANETA KOLGOT
                $this->other[27], // CITY PARKING
                $this->other[8], // POSUDGRAD
                $this->other[79], // BIGFOOD
            ],
        ]);
    }

    public function website()
    {
        return view('front.website', [
            'portfolioCorporates' => [
                $this->corporates[2], // HOMEWOOD
                $this->corporates[12], // NOVOBUDOVA
                $this->corporates[1], // EQUIS
                $this->corporates[0], // REDDIT-MARKETING
                $this->corporates[8], // HELLAS DENTAL
                $this->corporates[9], // PROSTO PEREEZD
                $this->corporates[10], // BRAVE TATTOO
                $this->corporates[13], // ВТС
                $this->other[3], // mobios school
                $this->other[45], // IDEALSTROY
                $this->other[14], // UKRTICKET
                $this->other[1], // MOBILUS
                $this->other[34], // BODYFORCE
                $this->corporates[11], // DAMBA
                $this->other[52], // NONNA
            ],
        ]);
    }

    public function razrabotkaSaitaVizitki()
    {
        return view('front.razrabotkaSaitaVizitki', [
            'portfolioCorporates' => [
                $this->corporates[2], // HOMEWOOD
                $this->corporates[12], // NOVOBUDOVA
                $this->corporates[1], // EQUIS
                $this->corporates[0], // REDDIT-MARKETING
                $this->corporates[8], // HELLAS DENTAL
                $this->corporates[9], // PROSTO PEREEZD
                $this->corporates[10], // BRAVE TATTOO
                $this->corporates[13], // ВТС
                $this->other[3], // mobios school
                $this->other[45], // IDEALSTROY
                $this->other[14], // UKRTICKET
                $this->other[1], // MOBILUS
                $this->other[34], // BODYFORCE
                $this->corporates[11], // DAMBA
                $this->other[52], // NONNA
            ],
        ]);
    }

    public function smm()
    {
        return view('front.smm');
    }

    public function portfolioItem($slug)
    {
        return view('front.portfolio.' . $slug);
    }

    public function portfolio()
    {
        return view('front.portfolio', ['portfolios' => $this->corporates + $this->eCommerce + $this->other]);
    }

    public function contacts()
    {
        return view('front.contacts');
    }

    public function seo()
    {
        return view('front.seo');
    }

    public function context()
    {
        return view('front.context');
    }
    public function mobapps()
    {
        return view('front.mobapps');
    }
    public function branding()
    {
        return view('front.branding', ['portfolios' => []]);
    }

    public function brief()
    {
        return view('front.brief');
    }
    public function briefSeo()
    {
        return view('front.brief-seo');
    }
    public function briefStyle()
    {
        return view('front.brief-style');
    }
    public function emailtest()
    {
        return view('front.email_test');
    }
}
