<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Finance;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Exports\financeExport;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Data';
        return view('finance.index', compact('pageTitle'));
    }
    public function getData(Request $request)
    {
        $finances =  Finance::all();
        if ($request->ajax()) {
            return DataTables()->of($finances)
                ->addIndexColumn()
                ->addColumn('action', function ($finances) {
                    return view('finance.action', compact('finances'));
                })
                ->toJson();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Input Data';
        return view('finance.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :Attribute dengan angka',
            'unique' => ':Attribute sudah ada'
        ];
        // $validator = Validator::make($request->all(), [
        //     'kodeCucian' => 'required|unique:cucian,kode_cucian',
        //     'harga' => 'required|numeric',
        //     'deskripsiCucian' => 'required',
        // ], $messages);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // $file = $request->file('img');

        // if ($file != null) {
        //     $originalFilename = $file->getClientOriginalName();
        //     $encryptedFilename = $file->hashName();

        //     //Store File
        //     $file->store('public/files');
         // Get File
    $file = $request->file('cv');

    if ($file != null) {
        $originalFilename = $file->getClientOriginalName();
        $encryptedFilename = $file->hashName();

        // Store File
        $file->store('public/files');
    }


            //ELEQUENT
            $finances = new Finance;
            $finances->id = $request->id;
            $finances->tahun = $request->tahun;
            $finances->deskripsi = $request->deskripsi;
            $finances->file = $request->file;
            if ($file != null) {
                $finances->original_filename = $originalFilename;
                $finances->encrypted_filename = $encryptedFilename;
            }
            $finances->save();


        // Alert::success('Berhasil ditambahkan', 'Data Cucian berhasil ditambahkan.');
        return redirect()->route('finance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $pageTitle = ' Detail Data';
            //ELOQUENT
            $finances = Finance::find($id);
            return view('finance.show', compact('pageTitle', 'finances',));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $pageTitle = 'Edit Finance';
            // ELOQUENT
            $finances = Finance::find($id);
            return view('finance.edit');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            //ELEQUENT
            $finances = Finance::find($id);
            $finances->id = $request->id;
            $finances->tahun = $request->tahun;
            $finances->deskripsi = $request->deskripsi;
            $finances->file = $request->file;

            $finances->save();

            return redirect()->route('finance.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function downloadFile($financeId)
{
    $finances = Finance::find($financeId);
    $file = 'public/files/'.$finances->file;
    $downloadFilename = Str::lower($finances->firstname.'_'.$finances->lastname.'_cv.pdf');

    if(Storage::exists($file)) {
        return Storage::download($file, $downloadFilename);
    }
}
}

