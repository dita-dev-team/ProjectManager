<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App;

class PageTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testPageCreateUpdate(){

        $page=factory(App\Page::class)->create();

        $this->assertDatabaseHas('pages',[
            'page'=>$page->page
        ]);
        $page->page='abstraction';
        $page->save();

        $this->assertDatabaseHas('pages',[
           'page'=>$page->page
        ]);



    }
}
