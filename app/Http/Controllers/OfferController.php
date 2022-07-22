<?php

namespace App\Http\Controllers;

/*
 *  * هذا ملف الكنترولير وفيه يتم وضع جميع اللوجيك
 */

class Offer extends Controller
{

    public function getOffer()
    {
        return Offer::get();
    }


}
