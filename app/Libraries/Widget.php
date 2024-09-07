<?php namespace App\Libraries;

class Widget
{

    public function recentPost()
    {
        return view('widget/recent_post');
    }

    public function recentAct(array $params)
    {
        return view('widget/recent_act', $params);
    }
}