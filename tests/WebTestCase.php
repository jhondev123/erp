<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class WebTestCase extends BaseTestCase
{
    use RefreshDatabase;
}
