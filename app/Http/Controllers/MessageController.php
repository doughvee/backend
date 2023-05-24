<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use App\Http\Controllers\Controller;


class MessageController extends Controller
{
    //
    public function index()
    {
        return Messages::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Messages::findOrFail($id);
        
    }

    public function destroy(string $id)
    {
        $messages = Messages::findOrFail($id);
        $messages ->delete();
        return $Messages;
    }
}
