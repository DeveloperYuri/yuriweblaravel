<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DashboardArtikelTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $user = \App\Models\User::where('email', 'developeryuri2@gmail.com')->first();

            $browser->loginAs($user)
                ->visit('/dashboardupdate')

                ->click('@SidebarDashboard')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/dashboardupdate') // atau sesuai route
                ->pause(1000)  // beri waktu dropdown terbuka

                // Klik artikel info
                ->click('@artikelinfo')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/dashboardartikel') // atau sesuai route
                ->pause(1000)  // beri waktu dropdown terbuka

                // klik create artikel
                ->click('@klikarticlecreate')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/createartikel') // atau sesuai route
                ->pause(1000)  // beri waktu dropdown terbuka

                ->type('title', 'Judul Artikel Dusk')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->type('description', 'Ini adalah deskripsi dari artikel yang diuji oleh Laravel Dusk')
                ->press('Save') // Sesuai tombol form kamu
                ->assertSee('Berhasil'); // Atau assertSee sesuai feedback setelah submit
            ;
        });
    }
}
