<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageController extends Controller 
{
    public function incrementCounter()
    {
        $result = DB::transaction(function() {
            $counter = DB::table('pagecounter')->first();
            
            if (!$counter) {
                DB::table('pagecounter')->insert(['count' => 1]);
                return 1;
            }
            
            $newCount = $counter->count + 1;
            DB::table('pagecounter')->update(['count' => $newCount]);
            
            return $newCount;
        });

        return view('pagecounter', compact('result'));
    }
}