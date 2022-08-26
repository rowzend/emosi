<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PostController extends Controller
{
    private function paramPosted($foreignKey)
    {
        $return = Post::where('category_id', $foreignKey)->with(['category', 'user'])->paginate(7);

        return $return;
    }

    public function indexMutasi()
    {
        // mengirimkan parameter foreign key 1 ke function paramPosted
        $mutasi = $this->paramPosted(1);

        return view('mutasi.mutasi', [
            "title" => "MUTASI",
            "mutasi" => $mutasi
            ]);
    }

    public function indexIdentitas()
    {
        $identitas = $this->paramPosted(2);

        return view('identitas.identitas', [
            "title" => "IDENTITAS",
            "identitas" => $identitas
        ]);
    }

    public function indexKepangkatan()
    {
        $kepangkatan = $this->paramPosted(3);

        return view('kepangkatan.kepangkatan', [
            "title" => "KEPANGKATAN",
            "kepangkatan" => $kepangkatan
        ]);
    }

    public function showMutasib(Post $mutasib)
    {
        return view('mutasi.mutasib', [
            "title" => "Keterangan",
            "mutasib" => $mutasib
        ]);
    }

    public function showIdentitasb(Post $identitasb)
    {
        return view('identitas.identitasb', [
            "title" => "Keterangan",
            "identitasb" => $identitasb
        ]);
    }

    public function showKepangkatanb(Post $kepangkatanb)
    {
        return view('kepangkatan.kepangkatanb', [
            "title" => "Keterangan",
            "kepangkatanb" => $kepangkatanb
        ]);
    }
}
