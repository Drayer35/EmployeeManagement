<?php

namespace App\Http\Livewire\Employee;

use Livewire\Component;
use App\Models\Employee;
class Record extends Component
{
    public $search;
    public $sort ='id';
    public $direction='desc';
    public function render()
    {
        $employees = Employee::
        where('name','like','%'.$this->search.'%')
        ->orwhere('dni','like','%'.$this->search.'%')
        ->orderBy($this->sort, $this->direction)
        ->get();
        return view('livewire.record',compact('employees'));
    }

    public function order($sort){

        if($this->sort == $sort){
            if($this->direction == 'desc'){
                $this->direction = 'asc';
            }else{
                $this->direction = 'desc';
            }
        }else{
            $this->sort= $sort;
            $this->direction = 'desc';
        }
        
    }

}
