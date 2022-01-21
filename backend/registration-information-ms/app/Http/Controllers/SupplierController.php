<?php

namespace App\Http\Controllers;

use App\Domains\Supplier\Actions\CreateSupplierAction;
use App\Domains\Supplier\Actions\DeleteSupplierAction;
use App\Domains\Supplier\Actions\UpdateSupplierAction;
use App\Domains\Supplier\Models\Supplier;
use App\Http\Requests\SupplierRequest;
use App\Http\Resources\SupplierResource;

class SupplierController extends Controller
{
    /**
     * Display a listing of suppliers.
     */
    public function index()
    {
        $suppliers = Supplier::paginate();
        $suppliers->withPath(request()->header('x-forwarded-path'));
        return SupplierResource::collection($suppliers);
    }

    /**
     * Store a newly created supplier in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(SupplierRequest $request)
    {
        $supplier = app(CreateSupplierAction::class)
            ->execute($request->validated());

        return SupplierResource::make($supplier);
    }

    /**
     * Display the specified supplier.
     *
     * @param Supplier $supplier
     */
    public function show(Supplier $supplier)
    {
        return SupplierResource::make($supplier);
    }

    /**
     * Update the specified supplier in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Supplier $supplier
     */
    public function update(SupplierRequest $request, Supplier $supplier)
    {
        $supplier = app(UpdateSupplierAction::class)
            ->execute($supplier, $request->validated());

        return SupplierResource::make($supplier);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        app(DeleteSupplierAction::class)
            ->execute($supplier);

        return response()->noContent();
    }
}
