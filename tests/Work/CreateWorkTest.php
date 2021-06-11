<?php

namespace tests\Documents;

use PHPUnit\Framework\TestCase;

class CreateWorkTest extends TestCase
{
    private $url = "http://localhost:9000/works/insert";

    protected function setUp()
    {
        parent::setUp();
    }

    /**
     * Test get work success
     */
    public function testCreateWorkSuccess()
    {
        $start_date = '2021-06-10 08:00:00';
        $end_date   = '2021-06-10 17:00:00';

        $dataRequest = "curl -X 'POST' $this->url -d 'name=test&start_date=$start_date&end_date=$end_date&status=1'";
        shell_exec($dataRequest);
    }
}
