<?php

use App\Models\partner;
use App\Models\section;
use App\Models\setting;
use App\Models\event;

function get_setting_value($key){
    $data = setting ::where("key", $key)->first();
    if(isset($data->value)){
        return $data->value;
    }else{
        return 'empty';
    }
}

function get_section_data($key){
    $data = section::where('post_as', $key)->first();
    if(isset($data)){
        return $data;
    }
}


function get_event_data($key){
    $data = section::where('post_as', $key)->first();
    if(isset($data)){
        return $data;
    }
}

function get_partner_data($key){
    $data = section::where('post_as', $key)->first();
    if(isset($data)){
        return $data;
    }
}

function get_partner()
{
    $data = partner::all();
    return $data;
}
function get_event()
{
    $data = event::all();
    return $data;
}



