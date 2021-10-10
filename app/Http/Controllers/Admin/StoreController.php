<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

use App\Http\Requests\Admin\StoreRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Store::query();

            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <a href="' . route('store.show', $item->id) . '" class="btn-aksi">
                            <img
                                src="/assets/icon/detaillogo.svg"
                                alt=""
                                width="18px"
                                height="19px"
                            />
                            <span class="tooltip">Detail</span>
                        </a>
                        <a href="' . route('store.edit', $item->id) . '" class="btn-aksi">
                            <img
                                src="/assets/icon/editlogo.svg"
                                alt=""
                                width="18px"
                                height="19px"
                            />
                            <span class="tooltip">Edit</span>
                        </a>
                        <form action="' . route('store.destroy', $item->id) . '" method="POST">
                            ' . method_field('delete') . csrf_field() . '
                            <button type="submit" class="btn-aksi">
                                <img
                                    src="/assets/icon/deletelogo.svg"
                                    alt=""
                                    width="18px"
                                    height="19px"
                                />
                                <span class="tooltip">Hapus</span>
                            </button>
                        </form>
                    ';
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.store.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();

        Store::create($data);

        return redirect()->route('store.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Store::findOrFail($id);

        return view('pages.store.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        $data = $request->all();

        $item = Store::findOrFail($id);

        $item->update($data);

        return redirect()->route('store.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Store::findOrFail($id);
        $item->delete();

        return redirect()->route('store.index');
    }
}
