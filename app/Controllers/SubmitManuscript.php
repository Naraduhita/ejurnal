<?php

namespace App\Controllers;

class SubmitManuscript extends BaseController
{
    public function ViewListSubmissions($name="Kiv")
    {
        $data['nama'] = $name;
        return view('SM\VLSub', $data);
    }

    public function CreateNewSubmission($name="Itik")
    {
        $data['nama'] = $name;
        return view('SM\CNSub', $data);
    }

    public function EditSubmissions($name="Paus")
    {
        $data['nama'] = $name;
        return view('SM\ESub', $data);
    }

    public function FinalizeSubmission($name="Pangeran")
    {
        $data['nama'] = $name;
        return view('SM\FSub', $data);
    }
}
