<?php

use Illuminate\Support\Facades\Route;

Route::prefix('spotify')->as('spotify.')->group(function () {
    Route::get('authorize', function () {
        return redirect()->away(
            vsprintf("https://accounts.spotify.com/authorize?response_type=code&client_id=%s&scopes=\'%s\'&redirect_uri=%s", [
                config('services.spotify.client_id'),
                'user-read-private user-read-email',
                route('spotify.callback')
            ]));
    })->name('authorize');
    Route::get('callback', function () {
        $clientId = config('services.spotify.client_id');
        $clientSecret = config('services.spotify.client_secret');
        $response = Http::asForm()->withHeaders([
            'Authorization' => 'Basic ' . base64_encode($clientId . ':' . $clientSecret),
        ])->post('https://accounts.spotify.com/api/token', [
            'client_id' => $clientId,
            'grant_type' => 'authorization_code',
            'code' => request('code'),
            'redirect_uri' => route('spotify.callback'),
        ]);
dump($response->body());
        // return redirect()->to('/');
    })->name('callback');
});

Route::any('{any}', function () {
    return view('app');
})->where('any', '.*');
