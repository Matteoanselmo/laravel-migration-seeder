<?php
use App\Train;
namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        $data = [
            'trains' => $trains,
        ];
        return view('trains.index', $data);
    }
}
