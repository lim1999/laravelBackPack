<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PropertyStatusRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PropertyStatusCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PropertyStatusCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\PropertyStatus');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/property-status');
        $this->crud->setEntityNameStrings('property-status', 'property_statuses');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn([
            'name'=>'Code',
            'label'=>'ID'
        ]);
        $this->crud->addColumn([
            'name'=>'name',
            'label'=>'Name'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PropertyStatusRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField([
            'name'=>'name',
            'label'=>'Name'
        ]);
    }

    protected function setupUpdateOperation()
    {
        //$this->setupCreateOperation();
        $this->crud->addField([
            'name'=>'name',
            'label'=>'Name'
        ]);
    }
}
