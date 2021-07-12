<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return new UserCollection(User::paginate(10));

//        $request->request->add(['ids' => [1, 2]]);
//        return User::with([
//            'posts' => function (HasMany $query) use ($request) {
//                return $query->whereIn('id', $request->ids);
//            }
//        ])->whereHas('posts', function (Builder $query) use ($request) {
//            return $query->whereIn('id', $request->ids);
//        })->get();
    }
}
