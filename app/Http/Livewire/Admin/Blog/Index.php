<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Http\Livewire\AdminComponent;
use App\Models\Blog;


class Index extends AdminComponent
{

    public $itemId = '';
    protected $listeners = ['deleteConfirmation' => 'deleteItem'];
    public $searchItems = '';
    public $status = '';

    protected $queryString = ['status'];

    public function confirmDelete($id)
    {
        $this->itemId = $id;
        $this->dispatchBrowserEvent('show-confirm-delete');
    }

    public function deleteItem()
    {
        $category = Blog::where('id', $this->itemId)->delete();
        $this->dispatchBrowserEvent('confirmed-deleted', ['message' => 'Blog successfully Deleted']);
    }

    public function sortDataBYStatus($status = null)
    {

        $this->status = $status;
    }


    public function render()
    {
        $blogs = Blog::query()
            ->when($this->status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->where('title', 'like', '%' . $this->searchItems . '%')
            ->latest()
            ->paginate(5);


        $allBlogsCount = Blog::count();
        $allAcitveBlogsCount = Blog::where('status', 'active')->count();
        $allPendingBlogsCount = Blog::where('status', 'pending')->count();
        $allInactiveBlogsCount = Blog::where('status', 'inactive')->count();


        return view('livewire.admin.blog.index', [
            "blogs" => $blogs,
            "allBlogsCount" => $allBlogsCount,
            "allAcitveBlogsCount" => $allAcitveBlogsCount,
            "allPendingBlogsCount" => $allPendingBlogsCount,
            "allInactiveBlogsCount" => $allInactiveBlogsCount,
        ]);
    }
}
