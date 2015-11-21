<?php

namespace Obonyojimmy\Pesapal\Facades\Pesapal;
use Illuminate\Support\Facades\Facade;
class Pesapal extends Facade {
    protected static function getFacadeAccessor() {
    	return 'pesapal';
    	}
}
