<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Settings;

class SettingsController extends Controller
{

//Получение настроек
            public function index (){
                    $settings=Settings::all();
                    return view('admin.settings.edit', ['settings'=>$settings[0]]);
            }

//    Обновление настроек

        public function update(Request $request){

            $setting=Settings::find(1);

            $setting->email=$request->email;
            $setting->phone_sov=$request->phone_sov;
            $setting->phone_bej=$request->phone_bej;

            $setting->save();

            return redirect()->back();

        }


}
