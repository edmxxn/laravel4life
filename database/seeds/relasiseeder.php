<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;
use DB;
class relasiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobis')->delete();


        Dosen::create([
            'nama' => 'Abdul Musthafa',
            'nipd' => '1234567890',
        ]);

        $mamat = Mahasiswa::create([
            'nama' =>'Mamat Karbit',
            'nim' => '1010101',
            'id_dosen' => $dosen->id
        ]);

        $mash = Mahasiswa::create([
            'nama' =>'Mash Kyrielight',
            'nim' => '1010102',
            'id_dosen' => $dosen->id
        ]);

        $roman = Mahasiswa::create([
            'nama' =>'Roman reigns',
            'nim' => '1010103',
            'id_dosen' => $dosen->id
        ]);
        $this->command->info('Data Dosen Berhasil dibuat');

        // Membuat data wali
        $amer = Wali::create([
            'nama' => 'Amer',
            'id_mahasiswa' => $mamat->id
        ]);
        $alexa = Wali::create([
            'nama' => 'Alexa',
            'id_mahasiswa' => $dadang->id
        ]);
        $lisa = Wali::create([
            'nama' => 'lisa',
            'id_mahasiswa' => $roman->id
        ]);
        $this->command->info('Data Wali berhasil dibuat');

        // data hobi
        $mancing = Hobi::create([
            'hobi' => 'mancing Keributan'
        ]);

        $musik = Hobi::create([
            'hobi' => 'Mendengarkan musik Sadboy'
        ]);
        $makan = Hobi::create([
            'hobi' => 'Makan harapan dan kasih sayang yang pupus ditelan kepalsuan'
        ]);
        // Menampilkan Hobi ke mahasiswa
        $mamat->hobi()->attach($mancing->id);
        $mash->hobi()->attach($musik->id);
        $roman->hobi()->attach($makan->id);
        $this->command->info('Data hobi mahasiswa berhasil dibuat');
    }
}
