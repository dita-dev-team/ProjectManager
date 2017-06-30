<?php

namespace Tests\Unit;

use App;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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
            'page_id'=>$content->page_id,
            'section'=>$content->section,
            'body'=>$content->body
        ]);
        $content->page_id=256;
        $content->section='TheBeginning';
        $content->body='Loremyeandcra';
        $content->save();
        $this->assertDatabaseHas('content',[
            'section'=>$content->section,
            'body'=>$content->body
        ]);





    }

}
