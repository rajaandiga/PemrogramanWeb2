<?php

class bsform{

    protected $components = [];
    protected $action = '';
    protected $method = 'get';

    public function setInputText($id, $name, $label){
        $iText = '<div class="mb-3">
                    <label for="'.$id.'">'.$label.'</label>
                    <input type="text" class="form-control" name="'.$name.'" id="'.$id.'">
                </div>';
                array_push($this->components,$iText);
    }

    public function setInputTextarea(){
    }

    public function setButton($label){
        $btn = '<div class="mb-3">
                    <button class="btn btn-primary">'.$label.'</button>
                </div>';
                array_push($this->components, $btn);
    }

    public function setForm($action, $method){
        $this->action = $action;
        $this->method = $method;
    }

    public function showform(){
        echo '<form action="'.$this->action.'" method="'.$this->method.'">';
        foreach($this->components as $item){
            echo $item;
        }

        echo '</form>';
    }
}