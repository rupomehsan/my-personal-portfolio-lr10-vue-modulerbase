<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Http\Livewire\AdminComponent;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class Create extends AdminComponent
{

    public $formData =  [
        "status" => "1",
    ];

    public $editData = [];
    protected $listeners = ['deleteConfirmation' => 'deleteItem'];


    public function resetForm()
    {
        $this->formData = [];
    }

    public function createItem()
    {
        $validateData = Validator::make($this->formData, [
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'additional_content_one' => 'sometimes',
        ], ['category_id.required' => 'Please select a category'])->validate();



        Blog::create($validateData);
        $this->resetForm();
        $this->dispatchBrowserEvent('success', ['message' => 'Category successfully create']);
    }

    public function editData(Blog $data)
    {
        $this->editItem = false;
        $this->editData = $data;
        $this->formData = $data->toArray();
        $this->dispatchBrowserEvent('show-modal');
    }

    public function updateItem()
    {
        $validateData = Validator::make($this->formData, [
            'name' => 'required',
            'parent_id' => 'required',
        ])->validate();

        $this->editData->update($validateData);
        $this->resetForm();
        $this->dispatchBrowserEvent('hide-modal', ['message' => 'Category successfully update']);
    }

    public function confirmDelete($id)
    {
        $this->itemId = $id;
        $this->dispatchBrowserEvent('show-confirm-delete');
    }

    public function deleteItem()
    {
        $category = Blog::where('id', $this->itemId)->delete();
        $this->dispatchBrowserEvent('confirmed-deleted');
    }


    public function render()
    {
        $categories = Category::where('status', 'active')->get();

        return view('livewire.admin.blog.create', [
            'categories' => $categories,
            'status' => $this->status,
        ]);
    }
}
