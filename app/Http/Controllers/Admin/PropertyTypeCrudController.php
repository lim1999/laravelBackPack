<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PropertyTypeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PropertyTypeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PropertyTypeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\PropertyType');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/property-type');
        $this->crud->setEntityNameStrings('property-type', 'property_types');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
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
        $this->crud->setValidation(PropertyTypeRequest::class);

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
