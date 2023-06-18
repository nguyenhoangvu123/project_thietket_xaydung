<?php

namespace App\Http\Controllers\Client;

use App\Models\Admin\Post;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\ConfigLayout;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct(
        protected Category $category,
        protected Post $post,
        protected ConfigLayout $configLayout,
    ) {
    }

    public function childrent($slug_category, $slug_category_childrent)
    {
        $configLayout = $this->configLayout
            ->with([
                'posts',
                'category' => function ($q) {
                    $q->with('posts');
                }
            ])
            ->where('config_status', $this->configLayout::CONFIG_SHOW)
            ->where("config_image", "<>", "")
            ->orderBy('config_postion', 'DESC')
            ->first();
        $slugConfigLayout = $configLayout->config_slug;
        $listCategoryChildren = $this->category->where('category_slug', $slug_category)->first();
        $itemCategory = $this->category->where('category_slug', $slug_category_childrent)->first();
        if (!$listCategoryChildren && !$itemCategory) {
            return abort(404);
        }
        $listPost = $this->post->where("category_id", $itemCategory->id)->paginate(LIMIT_PAGE_CLINET);
        return view('client.pages.category', [
            'itemCategory' => $itemCategory,
            'listCategoryChildren' => $listCategoryChildren,
            'listPost' => $listPost,
            'configLayout' => $configLayout,
            'slugConfigLayout' => $slugConfigLayout
        ]);
    }

    public function parent($slug_category)
    {
        $configLayout = $this->configLayout
            ->with([
                'posts',
                'category' => function ($q) {
                    $q->with('posts');
                }
            ])
            ->where('config_status', $this->configLayout::CONFIG_SHOW)
            ->where("config_image", "<>", "")
            ->orderBy('config_postion', 'DESC')
            ->first();
        $listCategoryChildren = $this->category->where('category_slug', $slug_category)->first();
        if (!$listCategoryChildren) {
            return abort(404);
        }
        $listPost = $this->post->where("category_id", $listCategoryChildren->id)->paginate(LIMIT_PAGE_CLINET);
        $categortChildrentFirst = $listCategoryChildren->childrens->first();
        if ($listCategoryChildren->childrens->count() > 0) {
            $listPost = $this->post->where("category_id", $categortChildrentFirst->id)->paginate(LIMIT_PAGE_CLINET);
        }
        $slugConfigLayout = $configLayout->config_slug;
        return view('client.pages.category', [
            'listCategoryChildren' => $listCategoryChildren,
            'listPost' => $listPost,
            'configLayout' => $configLayout,
            'slugConfigLayout' => $slugConfigLayout
        ]);
    }
}
