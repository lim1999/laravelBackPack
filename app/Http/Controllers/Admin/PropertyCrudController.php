<?php

namespace App\Http\Controllers\Admin;

use App\Models\PropertyType;
use App\Models\Property;
use App\Http\Requests\PropertyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PropertyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PropertyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('attribute_name', ALLOWED_DEPTH);
        $this->crud->setModel('App\Models\Property');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/property');
        $this->crud->setEntityNameStrings('property', 'properties');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn([
            'name'=>'id',
            'label'=>'ID'
        ]);
        $this->crud->addColumn([
            'name'=>'name',
            'label'=>'Name'
        ]);
        $this->crud->addColumn([
            'label'=>'Property Type Name',
             'name'=>'propertyType.name',
        ]);
        $this->crud->addColumn([
            'label'=>'Property Status Name',
            'name'=>'propertyStatus.name'
        ]);
        $this->crud->addColumn([
            'label'=>'Shape Name',
            'name'=>'shape.name'
        ]);
        $this->crud->addColumn([
            'label'=>'Zone Name',
            'name'=>'zone.name'
        ]);
        $this->crud->addColumn([
            'name'=>'rent_price',
            'label'=>'Rent Price'
        ]);
        $this->crud->addColumn([
            'name'=>'sale_price',
            'label'=>'Sale Price'
        ]);
        $this->crud->addColumn([
            'name'=>'list_price',
            'label'=>'List_price'
        ]);
        $this->crud->addColumn([
            'name'=>'sold_price',
            'label'=>'Sold_Price'
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PropertyRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
        $this->crud->addField([
            'name'=>'name',
            'label'=>'Name'
        ]);
        $this->crud->addField([
            'label'=>'Property Type',
            'type'=>'select',
            'name'=>'property_type_id',
            'entity'=>'property_types',
            'attribute'=>'name',
            'model'=>'App\Models\PropertyType',
            'wrapperAttributes' => [
                     'class' => 'col-6'
                ],
        ]);
        $this->crud->addField([
            'label'=>'Property Status',
            'type'=>'select',
            'name'=>'property_status_id',
            'entity'=>'property_statuses',
            'attribute'=>'name',
            'model'=>'App\Models\PropertyStatus',
            'wrapperAttributes' => [
                'class' => 'col-6'
           ]
        ]);
        $this->crud->addField([
            'label'=>'Shape',
            'type'=>'select',
            'name'=>'shape_id',
            'entity'=>'shapes',
            'attribute'=>'name',
            'model'=>'App\Models\Shape',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'label'=>'Zone',
            'type'=>'select',
            'name'=>'zone_id',
            'entity'=>'zones',
            'attribute'=>'name',
            'model'=>'App\Models\Zone',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'name'=>'rent_price',
            'label'=>'Rent Price',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'name'=>'sale_price',
            'label'=>'Sale Price',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'name'=>'list_price',
            'label'=>'List Price',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'name'=>'sold_price',
            'label'=>'Sold Price',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
    }

    protected function setupUpdateOperation()
    {
        // $this->setupCreateOperation();
        $this->crud->addField([
            'name'=>'name',
            'label'=>'Name'
        ]);
        $this->crud->addField([
            'label'=>'Property Type',
            'type'=>'select',
            'name'=>'property_type_id',
            'entity'=>'property_types',
            'attribute'=>'name',
            'model'=>'App\Models\PropertyType',
            'wrapperAttributes' => [
                     'class' => 'col-6'
                ],
        ]);
        $this->crud->addField([
            'label'=>'Property Status',
            'type'=>'select',
            'name'=>'property_status_id',
            'entity'=>'property_statuses',
            'attribute'=>'name',
            'model'=>'App\Models\PropertyStatus',
            'wrapperAttributes' => [
                'class' => 'col-6'
           ]
        ]);
        $this->crud->addField([
            'label'=>'Shape',
            'type'=>'select',
            'name'=>'shape_id',
            'entity'=>'shapes',
            'attribute'=>'name',
            'model'=>'App\Models\Shape',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'label'=>'Zone',
            'type'=>'select',
            'name'=>'zone_id',
            'entity'=>'zones',
            'attribute'=>'name',
            'model'=>'App\Models\Zone',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'name'=>'rent_price',
            'label'=>'Rent Price',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'name'=>'sale_price',
            'label'=>'Sale Price',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'name'=>'list_price',
            'label'=>'List Price',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
        $this->crud->addField([
            'name'=>'sold_price',
            'label'=>'Sold Price',
            'wrapperAttributes'=>[
                'class'=>'col-6'
            ]
        ]);
    }
}
