<?php



function translate($trans)
{
    return trans($trans ,[] , Session::get('locale') );
}
