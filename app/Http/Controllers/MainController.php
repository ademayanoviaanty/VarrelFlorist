<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Content;
use App\Models\Koleksi;
use App\Models\Testimoni;
use App\Models\Kritiksaran;
use Illuminate\Http\Request;
use Filament\Forms\Components\Select;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $title = 'beranda';
        $judul = Content::where('type', 'Judul', 'Foto')->first();
        $tentang = Content::where('type', 'Tentang', 'Foto')->first();
        $alamat = Content::where('type', 'Alamat')->first();
        $jamoperasional = Content::where('type', 'Jam Operasional')->first();
        $email = Content::where('type', 'Email')->first();
        $instagram = Content::get('type', 'Instagram')->first();
        $telepon = Content::where('type', 'Telepon')->first();
        $koleksi  = Koleksi::get();
        $artikel = Artikel::get();
        $testimoni = Testimoni::get();
        return view('pages.main', compact('title', 'judul', 'tentang', 'alamat', 'jamoperasional', 'email', 'telepon', 'koleksi', 'artikel', 'testimoni', 'instagram'));
    }

    public function koleksi(Request $request)
    {
        $title = 'koleksi';
        $koleksi  = Koleksi::get();
        return view('pages.koleksi', compact('title', 'koleksi'));
    }

    public function artikel(Request $request)
    {
        $title = 'artikel';
        $artikel = Artikel::get();
        return view('pages.artikel', compact('title', 'artikel'));
    }

    public function detail_blog(Request $request)
    {
        $title = 'detail_blog';
        $artikel = Artikel::get();
        return view('pages.detail_blog', compact('title', 'artikel'));
    }

    public function testimoni(Request $request)
    {
        $title = 'testimoni';
        $testimoni = Testimoni::get();
        return view('pages.testimoni', compact('title', 'testimoni'));
    }

    public function kritik_saran(Request $request)
    {
        $title = 'kritik_saran';
        $data = $request->all();
        Kritiksaran::create($data);
        return view('pages.kritik_saran', compact('title', 'data'));
    }

    public function pemesanan(Request $request)
    {
        $title = 'pemesanan';
        return view('pages.pemesanan');
    }

    public function k()
    {
        $title = 'kontak';

        return view('pages.kritik_saran', compact('title'));
    }
    public function kontak(Request $request)
    {
        $title = 'kontak';
        $alamat = Content::where('type', 'Alamat')->first();
        $jamoperasional = Content::where('type', 'Jam Operasional')->first();
        $email = Content::where('type', 'Email')->first();
        $telepon = Content::where('type', 'Telepon')->first();
        return view('pages.kontak', compact('title', 'alamat', 'jamoperasional', 'email', 'telepon'));
    }



}
