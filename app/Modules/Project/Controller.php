<?php

namespace App\Modules\Project;

use App\Modules\Project\Actions\All;
use App\Modules\Project\Actions\Delete;
use App\Modules\Project\Actions\Show;
use App\Modules\Project\Actions\Store;
use App\Modules\Project\Actions\Update;
use App\Modules\Project\Actions\ProjectComment;
use App\Modules\Project\Validations\Validation;
use App\Modules\Project\Validations\CommentValidation;
use App\Modules\Project\Actions\BulkActions;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index()
    {
        $data = All::execute();
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
    public function projectDetailsBySlug($slug)
    {
        $data = Show::projectDetailsBySlug($slug);
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

    public function projectComment(CommentValidation $request)
    {
        $data = ProjectComment::execute($request);
        return $data;
    }
}
