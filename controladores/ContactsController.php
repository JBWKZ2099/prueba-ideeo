<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactsRequest as MasterRequest;
use App\Models\Contact as MasterModel;
use App\Models\ViewContact as MasterViewModel;
use Sentinel;
use Redirect;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function __construct() {
        $this->middleware('permissionsContact');

        $this->active = "contacts";
        $this->model = "Contact";
        $this->select = [
            'id',
            'name',
            'email',
            'created_at'
        ];
        $this->request_whit = 1;
        $this->only = [
        ];
        $this->exeptions = [
        ];
        $this->compact = ['word', 'word1', 'active', 'model', 'view', 'columns', 'select', 'actions'];

        //Catalogs
        $this->catalog_state_id = DB::table('states')->pluck('name', 'id');
    }

    public function columns()
    {
        $columns = [
            trans('validation.attributes.id'),
            trans('validation.attributes.name'),
            trans('validation.attributes.email'),
            trans('validation.attributes.created_at'),
            trans('validation.attributes.actions'),
        ];

        return $columns;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = $this->active;
        $model = $this->model;
        $view = 'index';
        $word = trans('module_'.$this->active.'.module_title');
        $word1 = trans('module_'.$this->active.'.module_title_s');
        $columns = $this->columns();
        $select = $this->select;
        // 1 = (show, edit, delete)
        // 2 = (show, edit)
        // 3 = (show, delete)
        // 4 = (edit, delete)
        // 5 = (show)
        // 6 = (edit)
        // 7 = (delete)
        $actions = 1;

        ActivityLogsController::makeActivity(new MasterModel(), "Acceso al listado de contactos.");
        return view('admin.index', compact($this->compact));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $word = "";
        $word1 = "";
        $active = "";
        $model = "";
        $view = "";
        $columns = "";
        $select = "";
        $actions = "";
        $active = $this->active;
        $model = $this->model;
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;

        $word1 = trans('module_'.$this->active.'.module_title_s');

        ActivityLogsController::makeActivity(new MasterModel(), "En proceso de creación de nuevo contacto.");
        return view('admin.create', compact($this->compact));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterRequest $request)
    {
        /* Create Item */
        if($this->request_whit == 1){
            $item = MasterModel::create($request->all());
        }else if($this->request_whit == 2){
            $item = MasterModel::create($request->only($this->only));
        }else{
            $item = MasterModel::create($request->except($this->exeptions));
        }

        /* Extras */

        if($item){
            ActivityLogsController::makeActivity($item, "Creación de contacto.");
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.create.success'));
        }else{
            ActivityLogsController::makeActivity(new MasterModel(), "Se intentó crear un contacto.");
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.create.error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = MasterViewModel::find($id);

        $model = "";
        $view = "";
        $columns = "";
        $select = "";
        $actions = "";
        $active = $this->active;
        $word = trans('module_'.$this->active.'.module_title');
        $word1 = trans('module_'.$this->active.'.module_title_s');

        ActivityLogsController::makeActivity(new MasterModel(), "Visualización de la información de contacto.");
        return view('admin.show', compact($this->compact, 'item', "word1"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = "";
        $word1 = "";
        $active = "";
        $model = "";
        $view = "";
        $columns = "";
        $select = "";
        $actions = "";
        $item = MasterModel::find($id);

        $active = $this->active;
        $model = $this->model;
        $word = trans('module_'.$this->active.'.module_title');
        $word1 = trans('module_'.$this->active.'.module_title_s');
        $columns = $this->columns();
        $select = $this->select;

        ActivityLogsController::makeActivity(new MasterModel(), "En proceso de actualización de los datos de contacto.");

        return view('admin.edit', compact($this->compact, 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MasterRequest $request, $id)
    {
        $item = MasterModel::find($id);

        if($this->request_whit == 1){
            $item->fill($request->all());
        }else if($this->request_whit == 2){
            $item->fill($request->only($this->only));
        }else{
            $item->fill($request->except($this->exeptions));
        }

        if($item->save()){
            ActivityLogsController::makeActivity($item, "Edición de contacto.");

            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.update.success'));
        }else{
            ActivityLogsController::makeActivity($item, "Se intentó editar el contacto.");
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.update.error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $item = MasterModel::find($request->id);

        if(MasterModel::destroy($request->id)){
            ActivityLogsController::makeActivity($item, "Se elimina el contacto.");
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.delete.success'));
        }else{
            ActivityLogsController::makeActivity($item, "Se intentó eliminar el contacto.");
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.delete.error'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRestore()
    {
        $word = "";
        $word1 = "";
        $active = "";
        $model = "";
        $view = "";
        $columns = "";
        $select = "";
        $actions = "";
        $active = $this->active;
        $model = $this->model;
        $view = 'delete';
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        $actions = 1;
        $word1 = trans('module_'.$this->active.'.module_title_s');

        ActivityLogsController::makeActivity(new MasterModel(), "Acceso al listado de contactos eliminados.");

        return view('admin.deleted', compact($this->compact));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postRestore(Request $request)
    {
        $item = MasterModel::onlyTrashed()->find($request->id);

        if($item->restore()){
            ActivityLogsController::makeActivity($item, "Se restaura el contacto.");
            return Redirect::route($this->active.'.deleted')->with('success', trans('module_'.$this->active.'.crud.restore.success'));
        }else{
            ActivityLogsController::makeActivity($item, "Se intentó restaurar el contacto.");
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.restore.error'));
        }
    }
}
