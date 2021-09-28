<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umat', function (Blueprint $table) {
            $table->string('umat_nama');
            $table->string('umat_nama_baptis');
            $table->string('umat_agama');
            $table->string('umat_tempat_lahir');
            $table->date('umat_tanggal_lahir');
        
            $table->string('umat_jenis_kelamin');
            $table->string('umat_suku');
            $table->string('umat_status_aktivitas_sosial');
            $table->string('umat_hubungan_keluarga');
            
            $table->string('umat_status_nikah');
            $table->string('umat_golongan_darah');
            $table->string('umat_pendidikan');
            $table->string('umat_cacat_tubuh');
            
            $table->string('umat_meninggal');
            $table->string('umat_kevikepan_id');
            $table->string('umat_paroki_id');
            $table->string('umat_wilayah_id');
            
            $table->string('umat_lingkungan_id');
            $table->string('umat_ktp');
            $table->string('umat_kk');
            $table->string('umat_alamat');

            $table->string('umat_kota_kab');
            $table->string('umat_kecamatan');
            $table->string('umat_kelurahan');
            $table->string('umat_handphone');
            $table->string('umat_email');
            $table->string('umat_jurusan');
            $table->string('umat_pekerjaan');
            $table->string('umat_profesi');
            $table->string('umat_keterampilan');
            $table->string('umat_tanggal_meninggal');
            $table->string('umat_buku_baptis');
            $table->string('umat_nomer_baptis');
            $table->string('umat_keuskupan_baptis');
            $table->string('umat_paroki_baptis');
            $table->string('umat_status_rumah');
            $table->string('umat_status_ekonomi');

            $table->string('foto_profil');
            $table->string('foto_kk');
            $table->string('foto_sb');
            $table->string('narasi');
            $table->string('penghasilan');
            $table->string('tgl_update');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
