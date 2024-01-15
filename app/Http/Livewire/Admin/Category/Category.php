<?php

namespace App\Http\Livewire\Admin\Category;

use App\Http\Livewire\AdminComponent;
use App\Models\Category as ModelsCategory;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;

class Category extends AdminComponent
{
    use WithFileUploads;
    public $formData = [];
    public $editData = [];
    public $editItem = false;
    public $itemId = '';
    protected $listeners = ['deleteConfirmation' => 'deleteItem'];
    public $image;
    public $searchItems = '';

    public function openModal()
    {
        $this->editItem = true;
        $this->resetForm();
        $this->dispatchBrowserEvent('show-modal');
    }

    public function resetForm()
    {
        $this->formData = [];
    }

    public function createItem()
    {

        $validateData = Validator::make($this->formData, [
            'name' => 'required',
            'parent_id' => 'required',
        ])->validate();

        if ($this->image) {
            $validateData['image'] =   $this->image->store('photos', 'public');
        }

        ModelsCategory::create($validateData);
        $this->resetForm();
        $this->dispatchBrowserEvent('hide-modal', ['message' => 'Category successfully create']);
    }

    public function editData(ModelsCategory $data)
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
        $category = ModelsCategory::where('id', $this->itemId)->delete();
        $this->dispatchBrowserEvent('confirmed-deleted', ['message' => 'Category successfully Deleted']);
    }

    public function render()
    {

        $category = ModelsCategory::query()
            ->where('name', 'like', '%' . $this->searchItems . '%')
            ->where('status', 'active')
            ->latest()
            ->paginate(10);
        $allCategory = ModelsCategory::where('status', 'active')->latest()->get();
        return view('livewire.admin.category.category', [
            'category' => $category,
            'allCategory' => $allCategory,
        ]);
    }
}
