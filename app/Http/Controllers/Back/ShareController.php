<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShareController extends Controller
{
    private $nameSpace = 'App\Models\\';
    private $module;
    private $model_name;
    private $view_folder;
    private $var_name;

    function __construct(){
        $module = request()->get('module');
        $this->model_name = Str::ucfirst($module);
        $this->view_folder = Str::lower($module);
        $this->var_name = Str::plural($module);

        $this->module = $this->nameSpace . $this->model_name;

    }

    public function filterIndex(Request $request)
    {

        ${$this->var_name} = $this->module::query();
        if($request->has('filter_name')) {
            ${$this->var_name}->where('title->ka', 'LIKE', "%{$request->get('filter_name')}%");
        }
        ${$this->var_name} = ${$this->var_name}->paginate();
        return  view('admin::pages.'.$this->view_folder.'.table', compact($this->var_name));

    }


    public function changeStatus(Request $request)
    {
        $item = $this->module::query();
        $item->find($request->id);
        $item->update($request->only('status'));

    }
}
