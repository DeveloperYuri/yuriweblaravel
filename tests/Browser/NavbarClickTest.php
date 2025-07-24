<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use function Laravel\Prompts\pause;

class NavbarClickTest extends DuskTestCase
{
    // Navbar Test
    public function test_home_link()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->click('a[href="' . route('indexupdate') . '"]')
                ->assertRouteIs('indexupdate')

                ->pause(2000)

                ->visit('/tentangkami')
                ->click('a[href="' . route('tentangkamiupdate') . '"]')
                ->assertRouteIs('tentangkamiupdate')

                ->pause(2000)

                ->visit('/brands')
                ->click('a[href="' . route('brandsupdate') . '"]')
                ->assertRouteIs('brandsupdate')

                ->pause(2000)

                ->visit('/artikel')
                ->click('a[href="' . route('artikelupdate') . '"]')
                ->assertRouteIs('artikelupdate')

                ->pause(2000)

                ->visit('/media')
                ->click('a[href="' . route('mediaupdate') . '"]')
                ->assertRouteIs('mediaupdate')

                ->pause(2000)

                ->visit('/produkbaru')
                ->click('a[href="' . route('produkbaruupdate') . '"]')
                ->assertRouteIs('produkbaruupdate')

                ->pause(2000)

                ->visit('/kontak')
                ->click('a[href="' . route('kontakupdate') . '"]')
                ->assertRouteIs('kontakupdate')

                ->pause(2000)

                ->visit('/distributor')
                ->click('a[href="' . route('distributorupdate') . '"]')
                ->assertRouteIs('distributorupdate')

                ->pause(2000)

                ->visit('/event')
                ->click('a[href="' . route('eventupdate') . '"]')
                ->assertRouteIs('eventupdate')

                ->pause(2000);
        });
    }
}
