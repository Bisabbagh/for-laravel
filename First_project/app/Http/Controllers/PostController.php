<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class PostController extends Controller
{

    
public function createpost(Request $request){

$incomefield= $request->validate([
    'title'=>'required',
    'body'=>'required'


]);
$incomefield['title']= strip_tags($incomefield['title']);
$incomefield['body']= strip_tags($incomefield['body']);
$incomefield['user_id']=auth()->id();
posts::create($incomefield);
return redirect('/');



}
}
