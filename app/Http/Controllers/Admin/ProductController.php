<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
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
            $query = Product::query();

            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <a href="' . route('product.show', $item->id) . '" class="btn-aksi">
                            <img
                                src="/assets/icon/detaillogo.svg"
                                alt=""
                                width="18px"
                                height="19px"
                            />
                            <span class="tooltip">Detail</span>
                        </a>
                        <a href="' . route('product.edit', $item->id) . '" class="btn-aksi">
                            <img
                                src="/assets/icon/editlogo.svg"
                                alt=""
                                width="18px"
                                height="19px"
                            />
                            <span class="tooltip">Edit</span>
                        </a>
                        <form action="' . route('product.destroy', $item->id) . '" method="POST">
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
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        Product::create($data);

        return redirect()->route('product.index');
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
        $item = Product::findOrFail($id);

        return view('pages.product.edit', [
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
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();

        $item = Product::findOrFail($id);

        $item->update($data);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect()->route('product.index');
    }
}
