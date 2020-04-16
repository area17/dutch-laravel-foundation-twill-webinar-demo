<?php

use Illuminate\Support\Facades\Route;

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

Route::name('home')->get('/', function () {
    return view('site.welcome');
});

Route::name('about')->get('/about-us', function () {
    return view('site.about');
});

Route::name('members')->get('/our-members', function () {
    return view('site.members');
});

Route::name('calendar')->get('/calendar', function () {

    $upcomingEvents = \App\Models\Event::published()->where('date', '>=', \Carbon\Carbon::today())->get();
    $pastEvents = \App\Models\Event::published()->where('date', '<', \Carbon\Carbon::today())->get();

    return view('site.calendar', [
        'upcomingEvents' => $upcomingEvents,
        'pastEvents' => $pastEvents,
    ]);
});

Route::name('event.show')->get('/{locale}/events/{slug}', function ($locale, $slug) {

    if (in_array($locale, config('translatable.locales'))) {
        app()->setLocale($locale);
    }

    $event = app(\App\Repositories\EventRepository::class)->forSlug($slug);

    abort_unless($event, 404);

    if ($event->redirect) {
        return redirect()->route('event.show', ['locale' => $locale, 'slug' => $event->slug]);
    }

    return view('site.event', [
        'item' => $event,
    ]);
});
