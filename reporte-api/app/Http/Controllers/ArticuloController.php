<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return response()->json([
            "articulos" => $articulos
        ]);
    }
    public function mostrarPdf()
    {
        $articulos = Articulo::all();
        $pdf = FacadePdf::loadview('pdf', compact('articulos'));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $contenidoPdf = $pdf->output();
        return response($contenidoPdf, 200)
            ->header('Content-Type', 'application/pdf');
    }
    public function imprimirPdf()
    {
        $articulos = Articulo::all();
        $pdf = FacadePdf::loadview('pdf', compact('articulos'));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $contenidoPdf = $pdf->output();
        $tempFilePath = tempnam(sys_get_temp_dir(), 'reporte_');
        file_put_contents($tempFilePath, $contenidoPdf);
        return response()->file($tempFilePath, ['Content-Type' => 'application/pdf']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        //
    }
}
