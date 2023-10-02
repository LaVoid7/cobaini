<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Status;
use App\Models\Custommer;
use App\Models\Portofolio;
use App\Models\Unitbisnis;
use App\Models\Procurement;
use Illuminate\Http\Request;
use App\Models\jenisanggaran;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\ProcurementExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ProcurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $pageTitle = 'Data';
        return view('procurement.index', compact('pageTitle'));
    }
    public function getData(Request $request)
    {
        $procurements =  Procurement::with('jenisAnggaran','custommer','portofolio','status','unitbisnis');
        if ($request->ajax()) {
            return DataTables()->of($procurements)
                ->addIndexColumn()
                ->addColumn('action', function ($procurements) {
                    return view('procurement.action', compact('procurements'));
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
        $unitbisnis = Unitbisnis::all();
        $status = Status::all();
        $jenisanggaran = jenisanggaran::all();
        $portofolio = Portofolio::all();
        $custommer = Custommer::all();
        return view('procurement.create', compact('pageTitle', 'unitbisnis','status', 'jenisanggaran', 'portofolio', 'custommer'));
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

            //ELEQUENT
            $procurements = new Procurement;
            $procurements->id = $request->id;
            $procurements->regional = $request->regional;
            $procurements->unit_bisnis = $request->unit_bisnis;
            $procurements->juspeng = $request->juspeng;
            $procurements->tgl_terima_juspeng = $request->tgl_terima_juspeng;
            $procurements->custommer = $request->custommer;
            $procurements->portofolio = $request->portofolio;
            $procurements->jenis_anggaran = $request->jenis_anggaran;
            $procurements->customer = $request->customer;
            $procurements->anggaran = $request->anggaran;
            $procurements->margin_presentase = $request->margin_presentase;
            $procurements->margin_nominal = $request->margin_nominal;
            $procurements->nama_PIC = $request->nama_PIC;
            $procurements->metode_pengadaan = $request->metode_pengadaan;
            $procurements->mitra_peserta = $request->mitra_peserta;
            $procurements->penetapan_mitra = $request->penetapan_mitra;
            $procurements->status = $request->status;
            $procurements->bidang_pekerjaan = $request->bidang_pekerjaan;
            $procurements->kontrak = $request->kontrak;
            $procurements->tgl_penetapan = $request->tgl_penetapan;
            $procurements->tgl_kontrak = $request->tgl_kontrak;
            $procurements->kesepakatan = $request->kesepakatan;
            $procurements->margin_presentase_regional = $request->margin_presentase_regional;
            $procurements->margin_nominal_regional = $request->margin_nominal_regional;
            $procurements->tgl_mulai_pekerjaan = $request->tgl_mulai_pekerjaan;
            $procurements->tgl_selesai_pekerjaan = $request->tgl_selesai_pekerjaan;
            $procurements->keterangan = $request->keterangan;
            $procurements->tgl_tagihan_mitra = $request->tgl_tagihan_mitra;
            $procurements->tgl_kirim_tagihan_mitra = $request->tgl_kirim_tagihan_mitra;
            $procurements->tgl_bayar_tagihan_mitra = $request->tgl_bayar_tagihan_mitra;
            $procurements->save();


        // Alert::success('Berhasil ditambahkan', 'Data Cucian berhasil ditambahkan.');
        return redirect()->route('procurement.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = ' Detail Data';
        //ELOQUENT
        $procurements = Procurement::find($id);
        return view('procurement.show', compact('pageTitle', 'procurements',));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Procurement';
        // ELOQUENT
        $unitbisnis = Unitbisnis::all();
        $status = Status::all();
        $jenisanggaran = jenisanggaran::all();
        $portofolio = Portofolio::all();
        $custommer = Custommer::all();
        $procurements = Procurement::find($id);
        return view(
            'procurement.edit',
            compact(
                'pageTitle',
                'unitbisnis',
                'status',
                'jenisanggaran',
                'portofolio',
                'custommer',
                'procurements'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //ELEQUENT
        $procurements = Procurement::find($id);

        $procurements->regional = $request->regional;
        $procurements->unit_bisnis = $request->unit_bisnis;
        $procurements->juspeng = $request->juspeng;
        $procurements->tgl_terima_juspeng = $request->tgl_terima_juspeng;
        $procurements->custommer = $request->custommer;
        $procurements->portofolio = $request->portofolio;
        $procurements->jenis_anggaran = $request->jenis_anggaran;
        $procurements->customer = $request->customer;
        $procurements->anggaran = $request->anggaran;
        $procurements->margin_presentase = $request->margin_presentase;
        $procurements->margin_nominal = $request->margin_nominal;
        $procurements->nama_PIC = $request->nama_PIC;
        $procurements->metode_pengadaan = $request->metode_pengadaan;
        $procurements->mitra_peserta = $request->mitra_peserta;
        $procurements->penetapan_mitra = $request->penetapan_mitra;
        $procurements->status = $request->status;
        $procurements->bidang_pekerjaan = $request->bidang_pekerjaan;
        $procurements->kontrak = $request->kontrak;
        $procurements->tgl_penetapan = $request->tgl_penetapan;
        $procurements->tgl_kontrak = $request->tgl_kontrak;
        $procurements->kesepakatan = $request->kesepakatan;
        $procurements->margin_presentase_regional = $request->margin_presentase_regional;
        $procurements->margin_nominal_regional = $request->margin_nominal_regional;
        $procurements->tgl_mulai_pekerjaan = $request->tgl_mulai_pekerjaan;
        $procurements->tgl_selesai_pekerjaan = $request->tgl_selesai_pekerjaan;
        $procurements->keterangan = $request->keterangan;
        $procurements->tgl_tagihan_mitra = $request->tgl_tagihan_mitra;
        $procurements->tgl_kirim_tagihan_mitra = $request->tgl_kirim_tagihan_mitra;
        $procurements->tgl_bayar_tagihan_mitra = $request->tgl_bayar_tagihan_mitra;
        $procurements->save();

        return redirect()->route('procurement.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Procurement::find($id)->delete();
        return redirect()->route('procurement.index');
    }

    public function exportPdf()
    {
       $procurements = Procurement::all();

       $pdf = PDF::loadView('procurement.exportPdf', compact('procurements'));

       return $pdf->download('procurements.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new ProcurementExport, 'procurement.xlsx');
    }
}
