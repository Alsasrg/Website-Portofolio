<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'judul Situs',
            'value' => 'Website Sederhana',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_location',
            'label' => 'Alamat Kantor',
            'value' => 'Padangsidimpuan, Sumatera Utara, Indonesia',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://www.youtube.com/channel/UCgwD7kcmqT87G-_k5KN9nfw',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/alfisalimah?igsh=MTk0cXN4eWM4emhiMg==',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_twitter',
            'label' => 'Twitter',
            'value' => 'https://x.com/alfisalimahsrg?t=hivw6iQTJ6_2ZWeNdQVOFg&s=09',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://www.facebook.com/share/YWbHpMWGPEXSBe87/?mibextid=qi2Omg',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Portofolio Sederhana',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
