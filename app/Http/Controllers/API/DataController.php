<?php

namespace App\Http\Controllers\API;

use Telegram\Bot\Api;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\monitoring;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

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
        response()->json([
            'kapasitas1' => $data,
            'kapasitas2' => $data,
        ]);

        return view('dashboard', [
            'kapasitas1' => $data['kapasitas1'],
            'kapasitas2' => $data['kapasitas2'],
        ]);
    }
    public function getKapasitas()
    {
        $kapasitas1 = monitoring::where('id_sensor', 1)->latest('created_at')->value('kapasitas');
        $kapasitas2 = monitoring::where('id_sensor', 2)->latest('created_at')->value('kapasitas');

        return response()->json([
            'kapasitas1' => $kapasitas1,
            'kapasitas2' => $kapasitas2,
        ]);
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
                'kapasitas' => $request->kapasitas,
                'waktu' => now(),
                // 'id_sensor' => $request->input('id_sensor'),
                // 'kapasitas' => $request->input('kapasitas'),
            ]);

            // $data =monitoring::where('id', '=', $data->id)->get();
            if ($data) {
                $chatId = '989667149'; // Ganti dengan chat ID Anda
                $message = "Kapasitas Sampah pada tempat sampah " . $request->id_sensor . " adalah " . $request->kapasitas . " %";

                $telegramBotToken = '5783421327:AAFOLrqPiJLGrjYZ-RaN7qM7oT2gN4Jpp8A'; // Ganti dengan token bot Anda

                $response = Http::get("https://api.telegram.org/bot{$telegramBotToken}/sendMessage", [
                    'chat_id' => $chatId,
                    'text' => $message
                ]);
                // Cek apakah notifikasi berhasil dikirim atau tidak
                if ($response->successful()) {
                    return ApiFormatter::createApi(200, 'success', $data);
                } else {
                    return ApiFormatter::createApi(500, 'failed to send notification');
                }
            } else {
                return ApiFormatter::createApi(400, 'failed');
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

    public function dashboard() {
        $kapasitas1 = monitoring::where('id_sensor', 1)->latest('id')->value('kapasitas');
        $kapasitas2 = monitoring::where('id_sensor', 2)->latest('id')->value('kapasitas');

        // Mengirimkan data ke view 'dashboard' dalam bentuk array
        return view('dashboard', [
            'kapasitas1' => $kapasitas1,
            'kapasitas2' => $kapasitas2,
        ]);
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
    public function postEdge(Request $request)
    {
        try {
            $data = monitoring::create([
                'id_sensor' => $request->id_sensor,
                'kapasitas' => $request->kapasitas
            ]);

            if ($data) {
                // Mengirim notifikasi ke API "https://api.callmebot.com/whatsapp.php" setiap kali ada penambahan data
                $phone = '6289529177034'; // Ganti dengan nomor WhatsApp yang ingin Anda gunakan
                $message = "Kapasitas Sampah pada tempat sampah " . $request->id_sensor . " adalah " . $request->kapasitas . " %";

                $apikey = '1481432'; // Ganti dengan API key yang Anda miliki

                $response = Http::get("https://api.callmebot.com/whatsapp.php", [
                    'phone' => $phone,
                    'text' => $message,
                    'apikey' => $apikey
                ]);

                // Cek apakah notifikasi berhasil dikirim atau tidak
                if ($response->successful()) {
                    return ApiFormatter::createApi(200, 'success', $data);
                } else {
                    return ApiFormatter::createApi(500, 'failed to send notification');
                }
            } else {
                return ApiFormatter::createApi(400, 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, $error->getMessage());
        }
    }



    public function edgeGet(Request $request)
    {
        try {
            $request->validate([
                'id_sensor' => 'required',
                'kapasitas' => 'required',
            ]);

            // Catat waktu sebelum pengiriman data dari sensor ke edge
            $startTimeFromSensor = microtime(true);

            // Simpan data dari edge ke dalam database
            $data = monitoring::create([
                'id_sensor' => $request->id_sensor,
                'kapasitas' => $request->kapasitas,
            ]);

            // Catat waktu setelah pengiriman data dari sensor ke edge
            $endTimeFromSensor = microtime(true);
            $durationFromSensor = round(($endTimeFromSensor - $startTimeFromSensor) * 1000); // Dalam milidetik

            // Catat waktu sebelum pengiriman data dari edge ke cloud
            $startTimeFromEdge = microtime(true);

            // Kirim notifikasi ke Telegram
            $chatId = '989667149'; // Ganti dengan chat ID Anda
            $message = "Kapasitas Sampah pada tempat sampah " . $request->id_sensor . " adalah " . $request->kapasitas . " %";

            // Simpan durasi waktu pengiriman data dari sensor ke edge ke dalam kolom "durasi_sensor_to_edge"
            $data->update(['durasi_sensor_to_edge' => $durationFromSensor]);

            $formattedDurationFromSensor = 'Time taken from sensor to edge: ' . $durationFromSensor . ' ms';
            $telegramBotToken = '5783421327:AAFOLrqPiJLGrjYZ-RaN7qM7oT2gN4Jpp8A'; // Ganti dengan token bot Anda

            $response = Http::get("https://api.telegram.org/bot{$telegramBotToken}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $message
            ]);

            // Cek apakah notifikasi berhasil dikirim atau tidak
            if (!$response->successful()) {
                Log::error('Failed to send notification to Telegram');
            }

            // Catat waktu setelah pengiriman data dari edge ke cloud
            $endTimeFromEdge = microtime(true);
            $durationFromEdge = round(($endTimeFromEdge - $startTimeFromEdge) * 1000); // Dalam milidetik

            // Simpan durasi waktu pengiriman data dari edge ke cloud ke dalam kolom "durasi_edge_to_cloud"
            $data->update(['durasi_edge_to_cloud' => $durationFromEdge]);

            // Kirim respons sukses ke edge
            return ApiFormatter::createApi(200, 'success', [
                'data' => $data,
                'waktu_pengiriman_data_from_sensor_to_edge' => $formattedDurationFromSensor,
                'waktu_pengiriman_data_from_edge_to_cloud' => 'Time taken from edge to cloud: ' . $durationFromEdge . ' ms',
            ]);
        } catch (Exception $error) {
            // Jika terjadi kesalahan, tangkap dan kirim respons ke edge
            return ApiFormatter::createApi(400, 'failed', $error->getMessage());
        }
    }

    public function data()
    {
        $datas = Monitoring::orderBy('id', 'desc')->paginate(10);
        return view('data', compact('datas'));
    }
    public function realtime() {
        $data['kapasitas1'] = monitoring::where('id_sensor', 1)->latest('id')->value('kapasitas');
        $data['kapasitas2'] = monitoring::where('id_sensor', 2)->latest('id')->value('kapasitas');
       return response()->json(
            $data
        );

    }
}
