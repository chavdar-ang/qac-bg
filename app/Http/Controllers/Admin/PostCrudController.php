<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Topic;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */


class PostCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Post');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/post');
        $this->crud->setEntityNameStrings('post', 'posts');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PostRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addField([
            // TinyMCE
            'name' => 'title',
            'label' => 'Title',
            'type' => 'text',
            // optional overwrite of the configuration array
            // 'options' => [ 'selector' => 'textarea.tinymce',  'skin' => 'dick-light', 'plugins' => 'image,link,media,anchor' ],
        ]);

        $this->crud->addField([
            // TinyMCE
            'name' => 'body',
            'label' => 'Body',
            'type' => 'tinymce',
            // optional overwrite of the configuration array
            // 'options' => [ 'selector' => 'textarea.tinymce',  'skin' => 'dick-light', 'plugins' => 'image,link,media,anchor' ],
        ]);
        
        $this->crud->addField([
            // SelectMultiple = n-n relationship (with pivot table)
            'label' => "Topics",
            'type' => 'select2_multiple',
            'name' => 'topics', // the method that defines the relationship in your Model
            'entity' => 'topics', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            // 'pivot' => true, // on create&update, do you need to add/delete pivot table entries?

            // optional
            // 'model' => "App\Models\Tag", // foreign key model
            // 'options'   => (function ($query) {
            //     return $query->orderBy('name', 'ASC')->where('depth', 1)->get();
            // }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
        ]);

       
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function fetchTopic()
    {
        return $this->fetch(Topic::class);
    }
}
