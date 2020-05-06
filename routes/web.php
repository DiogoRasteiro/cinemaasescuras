<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Film;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/films', function () {
    return view('cartaz');
});

Route::get('/createfilm', function () {
    return view('createfilm');
});


Route::post('/film', function (Request $request) {
    $validator = Validator::make($request->all(),[
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $film = new Film;
    $name = $request->name;    
    $url = "http://www.omdbapi.com/?apikey=93106eba&t=" . $name;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);

    $content = curl_exec($ch);
    $info = curl_getinfo($ch);
    $movie_info = json_decode($content, true);
    curl_close($ch);
    

    $film->name = $movie_info['Title'];
    $film->release_date = $movie_info['Year'];
    $film->genre = $movie_info['Genre'];
    $film->description = $movie_info['Plot'];
    $film->country = $movie_info['Country'];
    $film->rating = $movie_info['imdbRating'];
    $film->language = $movie_info['Language'];
    $film->awards = $movie_info['Awards'];
    $film->actors = $movie_info['Actors'];
    $film->director = $movie_info['Director'];
    $film->image = $movie_info['Poster'];

    $film->save();

    return redirect('/filmlist');

});

Route::get('/filmlist', function () {
    $films = Film::orderBy('id', 'asc')->get();
    return view('filmes', [
        'films' => $films
    ]);
});

Route::get('/film/{id}', function ($id) {
    $film = Film::findOrFail($id);
    return view('film', [
        'film' =>$film
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/bilhetes', function () {
    return view('bilhetes');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/brevemente', function () {
    return view('brevemente');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('home');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
