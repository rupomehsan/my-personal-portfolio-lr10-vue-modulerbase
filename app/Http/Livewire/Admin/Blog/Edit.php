<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Http\Livewire\AdminComponent;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class Edit extends AdminComponent
{
    public $formData =  [];
    public $updatedData = [];





    public function mount(Blog $item)
    {
        $this->formData = $item->toArray();
        $this->updatedData = $item;
    }




    public function resetForm()
    {
        $this->formData = [];
    }

    public function updateItem()
    {
        $validateData = Validator::make($this->formData, [
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'additional_content_one' => 'sometimes',
        ], ['category_id.required' => 'Please select a category'])->validate();


        $this->updatedData->update($this->formData);

        $this->dispatchBrowserEvent('success', ['message' => 'Blog successfully Updated']);
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
        return view('livewire.admin.blog.edit', [
            'categories' => $categories,
            'status' => $this->status,
        ]);
    }
}
