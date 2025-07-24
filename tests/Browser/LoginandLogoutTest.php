<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginandLogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLoginandLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Login')
                ->type('email', 'developeryuri2@gmail.com')
                ->type('password', 'Developeryuri1234#')
                ->press('Login')
                ->pause(2000) // delay 2 detik
                ->assertPathIs('/dashboardupdate')
                ->pause(2000) // delay 2 detik

                // Klik tombol logout
                ->waitFor('@crudDropdownToggle')
                ->click('@crudDropdownToggle')        // klik untuk buka dropdown
                ->pause(500)
                ->click('@Logout') // ← Pakai Dusk selector
                ->waitForLocation('/login')    // ← Sesuaikan dengan halaman setelah logout
                ->pause(2000) // delay 2 detik
                ->assertSee('Login');     // ← Atau assert halaman login muncul

        });
    }
}
