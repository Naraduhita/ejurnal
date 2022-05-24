<?php

namespace App\Controllers;

class ReviewManucsript extends BaseController
{
    public function ViewAssignments($name="Mocii")
    {
        $data['nama'] = $name;
        return view('RM\VAss', $data);
    }

    public function GetDetailAssignment($name="Ash")
    {
        $data['nama'] = $name;
        return view('RM\GDAss', $data);
    }

    public function AcceptAssignment($name="Mars")
    {
        $data['nama'] = $name;
        return view('RM\AAss', $data);
    }

    public function RejectAssignment($name="Cell")
    {
        $data['nama'] = $name;
        return view('RM\RAss', $data);
    }

    public function SubmitReview($name="Loli")
    {
        $data['nama'] = $name;
        return view('RM\SRev', $data);
    }
}
