<?php

namespace App\Controllers;

use App\Models\UserModel;

class Jurnal extends BaseController
{
    public function tampilanAwal()
    {
        return view('T1Nara\tampilan-awal');
    }
    public function login()
    {
        return view('T1Nara\masuk');
    }
    public function activeSubmissions()
    {
        return view('T1Nara\active-submissions');
    }
    public function stepOne()
    {
        return view('T1Nara\starting-submission');
    }
    public function stepTwo()
    {
        // return view('T1Nara\coba1');
        return view('T1Nara\submission');
    }
    public function stepThree()
    {
        return view ('T1Nara\barustep3');
    }
    public function stepFour()
    {
        return view ('T1Nara\uploading-files');
    }
    public function stepFive()
    {
        return view('T1Nara\Step5');
    }
    //     public function onClikSave()
    // {
    //     return view('T1Nara/content');
    // }

    // public function ViewDataSubmission($id = 12517, $date = "03-10", $sec = "ART", $author = "Niani", $title = "Judul jurnal", $status = "Completed")
    // {
    //     $data['id'] = [12517, 12515, 123123];
    //     $data['date'] = ['-', '03-10', '-'];
    //     return view('T1Nara\active', $data);
    // }
    
    
   
//     public function cobaArfan(){
//          return view('T1Nara\arfan');
    }