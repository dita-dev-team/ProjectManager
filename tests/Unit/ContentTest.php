<?php

namespace Tests\Unit;

use App;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ContentTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testContentCreateAndUpdate(){

        $content=factory(App\Content::class)->create();
        $this->assertDatabaseHas('content',[
            'section'=>$content->section,
            'body'=>$content->body
        ]);
        $content->section='TheBeginning';
        $content->body='Loremyeandcra';
        $content->save();
        $this->assertDatabaseHas('content',[
            'section'=>$content->section,
            'body'=>$content->body
        ]);





    }

}
