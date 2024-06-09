<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!Session::has('locale')) {
            $locale = $this->getLocaleByIp();
            Session::put('locale', $locale);
        } else {
            $locale = Session::get('locale');
        }

        App::setLocale($locale);
    }
    public function getLocaleByIp()
    {
        // IP-Adressinformationen von ipinfo.io API abrufen
        $ip = request()->ip();
        $response = Http::get("http://ipinfo.io/{$ip}/json");
        $data = $response->json();
        // Ländercode aus den JSON-Daten extrahieren
        if (isset($data['country'])) {
            $countryCode = $data['country'];

            // Hier können Sie die Sprache nach Ländercode vergleichen.
            $this->getLocale($countryCode);
        }

        return config('app.locale');
    }
    public function getLocale(string $countryCode): string
    {
        switch ($countryCode) {
            case 'TR':
                $locale = 'tr';
                break;
            case 'US':
                $locale = 'en';
                break;
            case 'DE':
                $locale = 'de';
                break;
            case 'ES':
                $locale = 'es';
                break;
            case 'FR':
                $locale = 'fr';
                break;
                // Fügen Sie weitere Sprachen für andere Länder hinzu.
            default:
                $locale = 'de';
        }

        return $locale;
    }
}
