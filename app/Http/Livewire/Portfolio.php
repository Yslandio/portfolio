<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Portfolio extends Component
{
    public $theme = 'dark'; // Propriedade de controle do tema da página

    public function changeTheme($theme)
    { // Altera o tema da página
        $this->theme = $theme;
    }


    public $sidebar_show = false; // Propriedade de controle de abertura e fechamento do menu

    public function fixedMenu()
    { // Define se o menu deve ser fechado ou aberto
        $this->sidebar_show = $this->sidebar_show ? false : true;
    }

    public $sidebar_options = ['components.home', 'components.curriculum', 'components.projects', 'components.show_project']; // Propriedade de controle da páginas que são inseridas de acordo com a seleção no menu
    public $sidebar_select = 1; // Propriedade de controle que especifíca qual opção do menu está selecionada

    public function selectMenu($selected)
    { // Seleciona uma opção do menu
        $this->sidebar_select = $selected;
    }



    public $all_projects = [
        ["name" => "sg-estagio", "technologies" => ["HTML", "CSS", "JavaScript", "Bootstrap", "PHP"], "images" => ["sg-estagio-1.png", "sg-estagio-2.png", "sg-estagio-3.png"], "github" => "https://github.com/Yslandio/sg-estagio", "replit" => "https://sg-estagio.yslandiode.repl.co/", "description" => "Este projeto tem como proposta facilitar o trabalho dos servidores que fazem a gerência do cadastro de estágios. Para isso, por meio deste sistema é possível realizar o cálculo de horas necessárias para especificar o período de execução do estágio."],
    ]; // Banco de dados dos projetos

    public $projects;

    public function mount()
    {
        $this->projects = $this->all_projects;
    }

    public $search = ''; // Propriedade de controle de pesquisa de projeto
    public $technology = ''; // Propriedade de controle de tecnologia de projeto para pesquisa

    public function filterProjects()
    { // Filtra projetos específicos de acordo com a pesquisa feita no input de pesquisa e também com base no select de tecnologias
        $search =  $this->search;
        $technology =  $this->technology;
        $this->projects = collect($this->all_projects);
        $this->projects = $this->projects->filter(function ($item) use ($technology) {
            return $technology != '' ? in_array($technology, $item['technologies']) : true;
        })->filter(function ($item) use ($search) {
            return stripos($item['name'], $search) !== false;
        });
    }



    public $show_project; // Propriedade de controle do projeto a ser exebido em uma página para mostrar os seus detalhes

    public function showProject($project)
    { // Identifica qual projeto deve ser exibido em uma nova página e desseleciona a opção no menu que esteja selecionada
        $this->show_project = $project;
        $this->sidebar_select = 4;
    }



    public function render()
    {
        return view('livewire.portfolio');
    }
}
