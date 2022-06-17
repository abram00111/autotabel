<?php

namespace App\Http\Controllers;

use App\Models\TableHistory;
use Illuminate\Http\Request;

class TableHistoryController extends Controller
{
    public function index(){
        $tabels = TableHistory::all();
        foreach ($tabels as $tabel){
//            $tabel->news;
        }
//        return view('test', ['items' => $items]);
//        return view('auth_user.tabelHistory');
    }
}
