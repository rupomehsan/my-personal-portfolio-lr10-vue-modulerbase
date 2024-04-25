<?php

namespace App\Modules\Category;

use App\Modules\Category\Actions\All;
use App\Modules\Category\Actions\Delete;
use App\Modules\Category\Actions\Show;
use App\Modules\Category\Actions\Store;
use App\Modules\Category\Actions\Update;
use App\Modules\Category\Validations\Validation;
use App\Modules\Category\Actions\BulkActions;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index()
    {
        $data = All::execute();
        return $data;
    }
    public function getBlogTopCategories()
    {
        $data = All::getBlogTopCategories();
        return $data;
    }

    public function store(Validation $request)
    {
        $data = Store::execute($request);
        return $data;
    }

    public function show($id)
    {
        $data = Show::execute($id);
        return $data;
    }

    public function update(Validation $request, $id)
    {
        $data = Update::execute($request, $id);
        return $data;
    }

    public function destroy($id)
    {
        $data = Delete::execute($id);
        return $data;
    }
    public function bulkAction()
    {
        $data = BulkActions::execute();
        return $data;
    }
}
