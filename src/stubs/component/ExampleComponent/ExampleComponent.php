<?php
namespace App\Components\{ClassName};
use App\Components\Component;

class {ClassName} extends Component
{
    /**
     * Array of input fields/data
     *
     * @var array
     */
    protected $data = [];

    /**
     * Name of blade view
     *
     * @var string
     */
    protected $viewName = '{component-name}';

    protected function modifyInstance(array $data = [])
    {
       
        return $data;
    }
}
