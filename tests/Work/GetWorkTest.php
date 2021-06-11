<?php

namespace tests\Documents;

use PHPUnit\Framework\TestCase;

final class GetWorkTest extends TestCase
{
    private $url = "http://localhost:9000/";

    /**
     * Test get work success
     */
    public function testGetWorkSuccess()
    {
        $data = file_get_contents($this->url);

        $this->assertNotEmpty($data);
    }
}
