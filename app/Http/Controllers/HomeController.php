<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\models\Attendee;
use App\models\School;
use Form;
use Input;
use URL;
use Theme;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        //$data = Test::all();
       // print_r($data->toArray());
        $this->theme = Theme::uses('default')->layout('default');

        $view = array(
           // 'school' => School::all()
        );
        $this->theme->setPageTitle("Blank Page");
        $this->theme->setTitle("Hello Worlds");
        return $this->theme->scope('home.index', $view)->render();
    }

    public function postSave() {
        $data = Input::all();

        $attendess = new Attendee;
        $attendess->name = array_get($data, 'name');
        $attendess->surname = array_get($data, 'surname');
        $attendess->sex = array_get($data, 'sex');
        $attendess->mobile = array_get($data, 'mobile');
        $attendess->email = array_get($data, 'email');
        $attendess->address = array_get($data, 'address');
        $attendess->sex = array_get($data, 'sex');
        $attendess->school = array_get($data, 'school');
        $attendess->school_grade = array_get($data, 'school_grade');
        $attendess->study_plan = array_get($data, 'study_plan');
        $attendess->senior_project = array_get($data, 'senior_project');
        $attendess->workshop_1 = array_get($data, 'workshop_1');
        $attendess->workshop_2 = array_get($data, 'workshop_2');
        $attendess->seminar = array_get($data, 'seminar');
        $result = $attendess->save();
        if ($result) {
            $res = array("status" => "200");
        }else{
            $res = array("status" => "500");
        }

        echo json_encode($res);
    }
 
}
