<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Page extends Component
{


    public $title;
    public $text;
    public $date;
    public $description;
    public $btn;
  public $img;



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
   
    public function __construct($title, $text, $date, $description, $btn,$img)
    {
        $this->title = $title;
        $this->text = $text;
        $this->date = $date;
        $this->description = $description;
        $this->btn = $btn;
         $this->img=$img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page');
    }
}
