<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pagesmodel;
use App\config\sessions;
use Session;

class PagesController extends Controller {

    function __construct() {

        $this->pages = new pagesmodel;
    }
   public function index()
   {
       if(isset($_POST['sub']))
       {
         $stmt = $this->pages->addmessage();
         //var_dump('$stmt');
        //     exit();
         return redirect('index');
           
       }
       return view('index');
       
   }

    public function products() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('products');
        }
        return view('products');
    }

    public function about_gmff() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('my grand mills.about_gmff');
        }

        return view('my grand mills.about_gmff');
    }

    public function agthia_part() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('my grand mills.agethia-part');
        }


        return view('my grand mills.agthia-part');
    }

    public function quality() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('my grand mills.quality');
        }
        return view('my grand mills.quality');
    }

    public function recipes_regular() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('recipes-regular');
        }

        return view('recipes-regular');
    }
   

    public function recipes_light() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('recipes-light');
        }

        return view('recipes-light');
    }

    public function baking_gm() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('baking-gm');
        }
        return view('baking-gm');
    }

    public function gallery() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('gallery');
        }
        return view('gallery');
    }

    public function live_healthy() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('live healthy.live-healthy');
        }

        return view('live healthy.live-healthy');
    }

    public function tips_and_tricks() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
          // var_dump($stmt);
           // exit();
            return redirect('live healthy.tips-and-tricks');
        }

        return view('live healthy.tips-and-tricks');
    }

    public function power_of_grains() {
        if (isset($_POST['sub'])) {
            $stmt = $this->pages->addmessage();
            // var_dump($stmt);
            // exit();
            return redirect('live healthy.power-of-grains');
        }

        return view('live healthy.power-of-grains');
    }

    public function food_pyramid() {
        if (isset($_post['sub'])) {
            $stmt->$this->pages->addmessage();
            return redirect('live healthy.the-food-pyramid');
        }
        return view('live healthy.the-food-pyramid');
    }

    public function login() {

        return view('join free.login');
    }

    public function register() {

        return view('join free.register');
    }

}
