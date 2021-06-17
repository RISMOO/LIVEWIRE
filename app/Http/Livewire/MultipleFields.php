<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MultipleFields extends Component


{
    public $fields =[];

    public function addField()

    {

   $this->fields[]=count($this->fields) + 1;//push
    }


    public function removeField($key)//clé du champ

    {

  unset ($this->fields[$key]);
    }



    public function render()

    {



        return view('livewire.multiple-fields');
    }
}
