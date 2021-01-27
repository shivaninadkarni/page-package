<?php

namespace IW\Page\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use IW\Page\Models\Page;

use IW\Settings\Http\Controllers\SettingsController;

class PageController extends Controller
{
    public function save(Request $request)
    {
        Page::create($request->all());

        return redirect('admin/page');
    }

    public function greetings($name, $greetings)
    {
        $obj = new SettingsController();

        return $obj->greetings($name, $greetings);
    }
}
