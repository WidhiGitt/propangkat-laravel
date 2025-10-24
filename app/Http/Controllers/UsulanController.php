namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsulanController extends Controller
{
    public function create()
    {
        return view('usulan.form');
    }

    public function storeData(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'golongan' => 'required',
            'jabatan' => 'required',
        ]);

        // Simpan ke session biar bisa dipakai di step 2
        session(['usulan_data' => $validated]);

        return back()->with('step', 2); // kasih indikator pindah ke step 2
    }

    public function storeDokumen(Request $request)
    {
        $request->validate([
            'dokumen' => 'required|file|mimes:pdf,jpg,png|max:2048',
        ]);

        // Simpan dokumen (contoh ke storage/app/public)
        $path = $request->file('dokumen')->store('dokumen', 'public');

        return back()->with('success', 'Usulan berhasil disubmit!');
    }
}
