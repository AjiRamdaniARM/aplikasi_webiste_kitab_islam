<?php

namespace App\Http\Controllers\admin\KitabsController;

use App\Http\Controllers\Controller;
use App\Models\ContentKitab;
use App\Models\DetailKitab;
use App\Models\IslamiKitab;
use App\Models\KitabHadits;
use App\Models\LatinArabs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KitabsController extends Controller
{
    // post data kitabs
    public function post(Request $request, $id)
    {
        // Validasi data dari request
        $validatedData = $request->validate([
            'rujukan' => 'required|string|max:255',
            'halaman' => 'required|string|max:255',
        ]);

        // Gunakan transaksi database untuk memastikan integritas data
        DB::beginTransaction();
    
        try {
            $getID = ContentKitab::where('id', $id)->first(); 
            if ($getID && $getID->id_kitab_details) {
                $detailKitab = DetailKitab::where('id', $getID->id_kitab_details)->first();
                if ($detailKitab) {
                    $detailKitab->rujukan = $validatedData['rujukan'];
                    $detailKitab->halaman = $validatedData['halaman'];
                    $detailKitab->save();
                } else {
                    return response()->json(['message' => 'Detail kitab tidak ditemukan'], 404);
                }
            } else {
                return response()->json(['message' => 'ID kitab tidak valid'], 400);
            }

            if ($getID && $getID->id_latin_arabs ) {
                $latinArabs = LatinArabs::where('id', $getID->id_latin_arabs )->first();
                if ($latinArabs) {
                    $latinArabs->content_latin = $request->content_latin;
                    $latinArabs->content_arab = $request->content_arab;
                    $latinArabs->save();
                } else {
                    return response()->json(['message' => 'Detail kitab tidak ditemukan'], 404);
                }
            } else {
                return response()->json(['message' => 'ID kitab tidak valid'], 400);
            }
             $content = ContentKitab::where('id' , $id)->first();
             $content -> id_status_kitabs = $request->id_status;
             $content->save();
             
    
            // Commit transaksi jika semua berhasil
            DB::commit();
    
            // Kembalikan respons JSON berhasil
            return response()->json([
                'message' => 'Data berhasil disimpan',
                'data' => [
                    'detail_kitab' => $detailKitab,
                    'content' => $content,
                    'latin_arab' => $latinArabs,
                    // 'content_kitabs' => $contentKitabs,
                ],
            ], 200);
    
        } catch (\Exception $e) {
            // Rollback jika terjadi error
            DB::rollBack();
    
            // Kembalikan respons JSON gagal
            return response()->json([
                'message' => 'Terjadi kesalahan saat menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function hadistPost(Request $request, $id) {

        try {
        $kodeHadist = $this->kodeHadist();
        $hadistKitab = KitabHadits::create([
            'id' => $kodeHadist,
            'deksripsi_hadits' => $request->hadist,
         ]);

         $content = ContentKitab::where('id' , $id)->first();
         $content -> id_kitab_hadits  = $kodeHadist;
         $content->save();

              // Berikan respons sukses
              return response()->json([
                'message' => 'Data berhasil disimpan',
                'data' => $hadistKitab, // Mengembalikan data kitab yang disimpan
            ], 200);
        } catch (\Exception $e) {
            // Tangani error
            return response()->json([
                'message' => 'Terjadi kesalahan saat menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function kitabsAdded(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name_kitabs' => 'required|string|max:255',
        ]);

        try {
            $kodeIdNameKitabs = $this->generateKodeIdNameKitabs();
            $kodeIdDetails = $this->generateKodeIdDetailKode();
            $kodeIdHadist = $this->kodeHadist();
            $kodeIdLatinsArab = $this->generateKodeIdLatinArab();
            // Simpan data ke database
            $kitabsName = IslamiKitab::create([
                'id' => $kodeIdNameKitabs,
                'name_kitabs' => $validatedData['name_kitabs'],
            ]);

            $hadistKitab = KitabHadits::create([
                'id' => $kodeIdHadist,
            ]);

            // Simpan ke tabel detailkitabs
            $detailKitab = DetailKitab::create([
                'id' => $kodeIdDetails,
            ]);
        
            // Simpan ke tabel latin_arabs
            $latinArab = LatinArabs::create([
                'id' => $kodeIdLatinsArab,
            ]);

            $contentKitabs = ContentKitab::create([
                'id_islami_kitabs' => $kodeIdNameKitabs,
                'id_kitab_details' => $kodeIdDetails,
                'id_kitab_hadits'=> $kodeIdHadist,
                'id_latin_arabs' =>$kodeIdLatinsArab,
            ]);

            // Berikan respons sukses
            return response()->json([
                'message' => 'Data berhasil disimpan',
                'data' => $kitabsName, // Mengembalikan data kitab yang disimpan
            ], 200);
        } catch (\Exception $e) {
            // Tangani error
            return response()->json([
                'message' => 'Terjadi kesalahan saat menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    
    public function generateKodeIdNameKitabs()
    {
        $prefix = 'NameKitabsKode';
        $number = random_int(1000, 9999); // Default jika belum ada data
        // Format kode dengan padding angka 0
        $kodeIdNameKitabs = sprintf(  $number);

        return $kodeIdNameKitabs; 
    }

    public function kodeHadist()
    {
        $number = random_int(1000, 9999); // Default jika belum ada data
        // Format kode dengan padding angka 0
        $kodeHadist = sprintf(  $number);

        return $kodeHadist; 
    }


    public function generateKodeIdLatinArab()
    {
        $prefix = 'LatinKode';
        $number = random_int(1000, 9999); // Default jika belum ada data
        // Format kode dengan padding angka 0
        $kodeIdLatinArab = sprintf( $number);

        return $kodeIdLatinArab; 
    }

    public function generateKodeIdDetailKode()
    {

        $prefix = 'NameKitabsKode';
        $number = random_int(1000, 9999); // Default jika belum ada data
        // Format kode dengan padding angka 0
        $kodeIdDetails = sprintf(  $number);

        return $kodeIdDetails; 
    }

    //  controller delete kitabs & content 
    public function delete($nama_kitabs) {
        try {
            $kitab = IslamiKitab::where('name_kitabs', $nama_kitabs)->first();
            $kitab->delete();
            return redirect()->back()->with('message', 'Kitabs deleted successfully!');

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
