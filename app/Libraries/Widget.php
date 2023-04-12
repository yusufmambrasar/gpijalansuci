<?php namespace App\Libraries;

class Widget
{

    public function showMessage($messages = array())
    {
        return view('widget/show_message',['messages'=>$messages]);
    }

    public function showCards($users = array())
    {
        return view('widget/show_cards',['users'=>$users]);
    }    

    public function showReports($exam_answers = array())
    {
        return view('widget/show_reports',['exam_answers'=>$exam_answers]);
    }    

}