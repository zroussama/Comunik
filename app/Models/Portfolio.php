<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function up()
{
    Schema::create('portfolios', function (Blueprint $table) {
        $table->id();
        $table->string('contrat');
        $table->date('date_contrat');
        $table->timestamps();
    });
}
}
