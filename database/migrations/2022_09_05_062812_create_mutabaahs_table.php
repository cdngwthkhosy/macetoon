<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutabaahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->date('filled_date');
            $table->enum('menjaga_menyempurnakan_wudhu', ['0', '8']);
            $table->enum('sholat_subuh', ['100', '86', '72', '58', '44', '30', '16', '0']);
            $table->enum('sholat_dzuhur', ['100', '86', '72', '58', '44', '30', '16', '0']);
            $table->enum('sholat_ashar', ['100', '86', '72', '58', '44', '30', '16', '0']);
            $table->enum('sholat_maghrib', ['100', '86', '72', '58', '44', '30', '16', '0']);
            $table->enum('sholat_isya', ['100', '86', '72', '58', '44', '30', '16', '0']);
            $table->enum('rawatib_subuh', ['100', '40', '70', '0']);
            $table->enum('rawatib_dzuhur', ['100', '40', '60', '0']);
            $table->enum('rawatib_ashar', ['30', '60', '0']);
            $table->enum('rawatib_maghrib', ['120', '20', '80', '0']);
            $table->enum('rawatib_isya', ['120', '20', '80', '0']);
            $table->enum('dhuha', ['4', '0']);
            $table->enum('tahajud', ['4', '0']);
            $table->enum('witir', ['4', '0']);
            $table->enum('tarawih', ['4', '0']);
            $table->enum('sholat_sunnah_lainnya', ['4', '0']);
            $table->enum('shaum_senin_kamis', ['0', '100']);
            $table->enum('shaum_dawud', ['0', '100']);
            $table->enum('shaum_ramadhan', ['0', '100']);
            $table->enum('shaum_lainnya', ['0', '100']);
            $table->enum('tilawah_quran', ['10', '8.4', '6.8', '5.2', '3.6', '2']);
            $table->integer('last_juz');
            $table->string('last_surat');
            $table->enum('tadabbur_ayat', ['10', '0']);
            $table->enum('infaq_shadaqah', ['4', '0']);
            $table->enum('al_matsurat', ['3', '0']);
            $table->enum('dzikir_lainnya', ['1', '0']);
            $table->string('jamaah_prayer_parent');
            $table->string('reciting_understanding_quran_parent');
            $table->string('small_talk_parent');
            $table->string('welcoming_parent');
            $table->string('offering_help_parent');
            $table->string('having_dinner_parent');
            $table->string('personal_service_parent');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mutabaahs');
    }
};
