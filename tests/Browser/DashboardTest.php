<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DashboardTest extends DuskTestCase
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

                ->click('@SidebarDashboard')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/dashboardupdate') // atau sesuai route
                ->pause(1000)  // beri waktu dropdown terbuka

                // Klik media info
                ->click('@mediainfo')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/dashboardmedia') // atau sesuai route
                ->pause(1000)  // beri waktu dropdown terbuka

                ->click('@SidebarDashboard')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/dashboardupdate') // atau sesuai route
                ->pause(1000)  // beri waktu dropdown terbuka

                // Klik users info
                ->click('@usersinfo')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/dashboardusers') // atau sesuai route
                ->pause(1000)  // beri waktu dropdown terbuka

                ->click('@SidebarDashboard')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/dashboardupdate') // atau sesuai route
                ->pause(1000)  // beri waktu dropdown terbuka

                // Klik produkbaru info
                ->click('@produkbaruinfo')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/dashboardprodukbaru') // atau sesuai route
                ->pause(1000)  // beri waktu dropdown terbuka

                ->click('@SidebarDashboard')
                ->pause(1000)  // beri waktu dropdown terbuka
                ->assertPathIs('/dashboardupdate') // atau sesuai route
                ->pause(1000);  // beri waktu dropdown terbuka
                
        });
    }
}
