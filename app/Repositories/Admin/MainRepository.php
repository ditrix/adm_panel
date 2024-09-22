<?php
namespace App\Repositories\Admin;

use App\Repositories\CoreRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MainRepository extends CoreRepository
{
    protected function getModelClass() {

        return Model::class;
    }

    public static function getCountOrders()
    {
        $count = DB::table('orders')
            ->where('status','0')
            ->get()
            ->count();

        return $count;
    }

    public static function getCountUsers()
    {
        $count = DB::table('users')
            ->get()
            ->count();

        return $count;
    }

    public static function getCountProducts()
    {
        $count = DB::table('products')
            ->get()
            ->count();

        return $count;
    }

    public static function getCountCategories()
    {
        $count = DB::table('categories' )
            ->get()
            ->count();

        return $count;
    }

}
