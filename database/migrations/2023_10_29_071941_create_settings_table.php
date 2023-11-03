<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            'key'=> '_site_name',
            'label'=> 'judul situs',
            'value'=> 'website sederhana',
            'type'=> 'text',
        ]);

        setting::create([
            'key'=> '_location',
            'label'=> 'alamat kantor',
            'value'=> 'Cakung, DKI Jakarta, Indonesia',
            'type'=> 'text',
        ]);
       
        setting::create([
            'key'=> '_youtube',
            'label'=> 'Youtube',
            'value'=> 'https://www.youtube.com/channel/UC8pX4aEGtoQwzQSs5RWoJcg',
            'type'=> 'text',
        ]);

        setting::create([
            'key'=> '_instagram',
            'label'=> 'Instagram',
            'value'=> 'https://www.instagram.com/farhan11503',
            'type'=> 'text',
        ]);

        setting::create([
            'key'=> '_twitter',
            'label'=> 'Twitter',
            'value'=> 'https://twitter.com/farhanfathur3',
            'type'=> 'text',
        ]);

        setting::create([
            'key'=> '_facebook',
            'label'=> 'Facebook',
            'value'=> 'https://www.facebook.com/farhanfathur123',
            'type'=> 'text',
        ]);
        
        setting::create([
            'key'=> '_site_description',
            'label'=> 'Site Description',
            'value'=> 'Profile Website - with filament & Laravel',
            'type'=> 'text',
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
