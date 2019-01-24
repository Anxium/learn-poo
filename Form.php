<?php

class Form 
{

    public function create($action) 
    {
        echo '<form action="'.$action.'" method="POST">';
    }

    public function input($name, $placeholder) 
    {
        echo '<input type="text" name="'.$name.'" placeholder="'.$placeholder.'"><br>';
    }

    public function submit($value) 
    {
        echo '<input type="submit" value="'.$value.'">';
    }

    public function startSelect() {
        echo '<select>';
    }

    public function option($value, $option)
    {
        echo '<option value="'.$value.'">'.$option.'</option>';
    }

    public function endSelect()
    {
        echo '</select>';
    }

    public function textArea($rows, $cols, $texte)
    {
        echo '<textarea rows="'.$rows.'" cols="'.$cols.'">'.$texte.'</textarea>';
    }

    public function radio($id, $name, $value)
    {
        echo '<input type="radio" id="' . $id . '" name="' . $name .'" value="' . $value . '">';
    }

    public function checkbox($id, $name, $value)
    {
        echo '<input type="checkbox" id="' . $id . '" name="' . $name .'" value="' . $value . '">';
    }

    public function end() 
    {
        echo '</form>';
    }

}