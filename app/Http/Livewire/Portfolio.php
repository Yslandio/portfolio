<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Portfolio extends Component
{
    public $theme = 'dark';

    public function changeTheme($theme)
    {
        $this->theme = $theme;
    }



    public $sidebar_options = ['components.home', 'components.curriculum', 'components.projects', 'components.show_project'];
    public $sidebar_select = 1;

    public function selectMenu($selected)
    {
        $this->sidebar_select = $selected;
    }



    public $all_projects = [
        ["name" => "PROJETO TESTE 1", "technologies" => ["HTML", "CSS", "JavaScript", "Bootstrap"], "description" => "Descrição do projeto", "images" => ["projeto1_img_1.png", "projeto1_img_2.png", "projeto1_img_2.png"], "github" => "", "replit" => ""],
        ["name" => "PROJETO TESTE 2", "technologies" => ["HTML", "CSS", "JavaScript", "Bootstrap", "Laravel"], "description" => "Descrição do projeto", "images" => ["projeto2_img_1.png", "projeto2_img_2.png", "projeto2_img_2.png"], "github" => "", "replit" => ""],
        ["name" => "PROJETO TESTE 3", "technologies" => ["HTML", "CSS", "JavaScript", "Bootstrap", "Jogo"], "description" => "Descrição do projeto", "images" => ["projeto2_img_1.png", "projeto2_img_2.png", "projeto2_img_2.png"], "github" => "", "replit" => ""],
    ];

    public $projects;

    public function mount()
    {
        $this->projects = $this->all_projects;
    }

    public $search = '';
    public $technology = '';

    public function filterProjects()
    {
        $search =  $this->search;
        $technology =  $this->technology;
        $this->projects = collect($this->all_projects);
        $this->projects = $this->projects->filter(function ($item) use ($technology) {
                return $technology != '' ? in_array($technology, $item['technologies']) : true;
            })->filter(function ($item) use ($search) {
                return stripos($item['name'], $search) !== false;
            });
    }



    public $show_project;

    public function showProject($project)
    {
        $this->show_project = $project;
        $this->sidebar_select = 4;
    }



    public function render()
    {
        return view('livewire.portfolio');
    }
}
