<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;


class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()

    {
        $users = DB::table('did_management');
        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id. '" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a><a href="#edit-' . $user->id . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->addColumn('action2', function ($user) {
                return '';
            })
            
            ->make(true);
        // return Datatables::of($users)->make();
        // for
        // return DataTables::of(Employee::query())->make(true);
    }

    // public function export()
    // {
    //     return Excel::download(new Employee, 'employee.xlsx');
    // }

public function test() {
    $model = User::query();

        return DataTables::eloquent($model)
            ->addColumn('intro', function (User $user) {
                return
            '<a href="#edit-' . $user->id . '" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->addColumn('baltro', function (User $user) {
                return
            '<a href="#edit-' . $user->id . '" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->toJson();
}

}
   
   

