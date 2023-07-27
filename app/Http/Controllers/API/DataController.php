<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\monitoring;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Carbon\Carbon;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kapasitas1'] = monitoring::where('id_sensor', 1)->latest('created_at')->value('kapasitas');
        $data['kapasitas2'] = monitoring::where('id_sensor', 2)->latest('created_at')->value('kapasitas');

        return view('monitoring',$data);
    }
    public function getEdge(Request $request)
    {
        try {
            $request->validate([
                'id_sensor' => 'required',
                'kapasitas' => 'required',
            ]);
            // dd($request->id_sensor);
            $data = monitoring::create([
                'id_sensor' => $request->id_sensor,
                'kapasitas' => $request->kapasitas
                // 'id_sensor' => $request->input('id_sensor'),
                // 'kapasitas' => $request->input('kapasitas'),
            ]);

            // $data =monitoring::where('id', '=', $data->id)->get();
            if ($data) {
                return ApiFormatter::createApi(200, 'success', $data);
            } else {
                // return ApiFormatter::createApi(400, 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, $error->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //     public function getData()
    // {
    //     $response = Http::get('http://10.100.3.174:8001/api/ketinggian');

    //     if ($response->ok()) {
    //         $data = $response->json();

    //         // Menyimpan data ke database
    //         foreach ($data as $item) {
    //             Monitoring::create([
    //                 'id_sensor' => $item['id_sensor'],
    //                 'kapasitas' => $item['kapasitas']
    //             ]);
    //         }

    //         return view('success');
    //     } else {
    //         $error = "Gagal mendapatkan data dari API ketinggian.";
    //         return view('error', compact('error'));
    //     }
    // }
    public function cloud(Request $request)
    {
        try {
            $request->validate([
                'id_sensor' => 'required',
                'kapasitas' => 'required',
            ]);

            $id_sensor = $request->input('id_sensor');
            $kapasitas = $request->input('kapasitas');

            // Simpan data ke database di sisi cloud
            $monitoring = monitoring::create([
                'id_sensor' => $id_sensor,
                'kapasitas' => $kapasitas,
            ]);

            return response()->json([
                'message' => 'Data stored successfully',
                'data' => $monitoring,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Failed to store data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function showMonitoring()
    {
        $kapasitas1 = monitoring::where('id_sensor', 1)->latest('created_at')->value('kapasitas');


        return view('kapasitassampah', ['data1' => $kapasitas1]);
    }
    public function showMonitoring2()
    {
        $kapasitas2 = monitoring::where('id_sensor', 2)->latest('created_at')->value('kapasitas');


        return view('kapasitassampah2', ['data2' => $kapasitas2]);
    }
}
