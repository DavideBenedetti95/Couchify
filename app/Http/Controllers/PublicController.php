<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        
        $products = [
            ['name' => 'Divano', 'type' => 'Berretto', 'description' => "Il Divano Berretto è un divano di lusso ultra chic ed elegante. Realizzato con bellissimi tessuti di alta qualità.", 'img' => 'media/berretto.png',],

            ['name' => 'Divano', 'type' => 'America', 'description' => "Il Divano America è un divano di lusso ultra chic ed elegante. Realizzato con bellissimi tessuti di alta qualità.", 'img' => 'media/america.png',],

            ['name' => 'Divano', 'type' => 'Neo', 'description' => "Il Divano Neo è un divano di lusso ultra chic ed elegante. Realizzato con bellissimi tessuti di alta qualità.", 'img' => 'media/neo.png',],

            ['name' => 'Divano', 'type' => 'Orion', 'description' => "Il Divano Orion è un divano di lusso ultra chic ed elegante. Realizzato con bellissimi tessuti di alta qualità.", 'img' => 'media/orion.png',],
        ];

        return view('homepage', ['products' => $products]);
    }

    public function detailProducts($type){
        $products = [
            ['name' => 'Divano', 'type' => 'Berretto', 'description' => "Il Divano Berretto è un divano di lusso ultra-chic ed elegante. Realizzato con bellissimi tessuti di alta qualità. Realizzato con materiali di alta qualità, il nostro divano è eccezionalmente resistente e duraturo, assicurando che rimarrà un pezzo fondamentale nell'arredamento della tua casa per gli anni a venire. I posti a sedere accoglienti e spaziosi sono perfetti per rilassarsi durante le serate di cinema o per intrattenere gli ospiti con facilità.", 'img' => '../../media/berretto.png', 'th1' => '../../media/berretto.png', 'th2' => '../../media/berretto.png', 'th3' => '../../media/berretto.png', 'th4' => '../../media/berretto.png', 'price' => '250$'],

            ['name' => 'Divano', 'type' => 'America', 'description' => "Il Divano America è un divano di lusso ultra-chic ed elegante. Realizzato con bellissimi tessuti di alta qualità. Realizzato con materiali di alta qualità, il nostro divano è eccezionalmente resistente e duraturo, assicurando che rimarrà un pezzo fondamentale nell'arredamento della tua casa per gli anni a venire. I posti a sedere accoglienti e spaziosi sono perfetti per rilassarsi durante le serate di cinema o per intrattenere gli ospiti con facilità.", 'img' => '../../media/america.png', 'th1' => '../../media/america.png', 'th2' => '../../media/america.png', 'th3' => '../../media/america.png', 'th4' => '../../media/america.png', 'price' => '300$'],

            ['name' => 'Divano', 'type' => 'Neo', 'description' => "Il Divano Neo è un divano di lusso ultra-chic ed elegante. Realizzato con bellissimi tessuti di alta qualità. Realizzato con materiali di alta qualità, il nostro divano è eccezionalmente resistente e duraturo, assicurando che rimarrà un pezzo fondamentale nell'arredamento della tua casa per gli anni a venire. I posti a sedere accoglienti e spaziosi sono perfetti per rilassarsi durante le serate di cinema o per intrattenere gli ospiti con facilità.", 'img' => '../../media/neo.png', 'th1' => '../../media/neo.png', 'th2' => '../../media/neo.png', 'th3' => '../../media/neo.png', 'th4' => '../../media/neo.png', 'price' => '1200$'],

            ['name' => 'Divano', 'type' => 'Orion', 'description' => "Il Divano Orion è un divano di lusso ultra-chic ed elegante. Realizzato con bellissimi tessuti di alta qualità. Realizzato con materiali di alta qualità, il nostro divano è eccezionalmente resistente e duraturo, assicurando che rimarrà un pezzo fondamentale nell'arredamento della tua casa per gli anni a venire. I posti a sedere accoglienti e spaziosi sono perfetti per rilassarsi durante le serate di cinema o per intrattenere gli ospiti con facilità.", 'img' => '../../media/orion.png', 'th1' => '../../media/orion.png', 'th2' => '../../media/orion.png', 'th3' => '../../media/orion.png', 'th4' => '../../media/orion.png', 'price' => '2400$'],
        ];

        foreach ($products as $product) {
            if ($product['type'] == $type) {
               return view('detail' , ['product' => $product]); 
            }
        }
    }



    public function shop(){
        return view('shop');
    }

    public function tracking(){
        return view('tracking');
    }

    public function login(){
        return view('login');
    }

    public function contact(){
        return view('contact');
    }

    public function submit(Request $request){
        $email = $request -> email;
        $name = $request -> name;
        $message = $request -> message;

        $user = compact('email', 'name', 'message');
        
        
        try {
            Mail::to($email)->send(new ContactMail($user));
        } catch (Exception $e) {
            return redirect(route('homepage'))->with('errorMessage' ,"C'e stato un problema con l'invio della mail. Per favore, riprova piu tardi");
        }

        return redirect(route('homepage'))->with('message' ,"La tua mail e' stata inviata correttamente. Grazie.");
    }
}
