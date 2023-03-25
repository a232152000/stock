<?php

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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('code',20)->comment('股票代號');
            $table->string('ex',6)->comment('tse(上市) or otc(上櫃)');
            $table->string('n',45)->comment('公司簡稱');
            $table->string('nf',100)->comment('公司全名');
            $table->float('z', 7, 3)->comment('當盤成交價');
            $table->float('o', 7, 3)->comment('開盤');
            $table->float('h', 7, 3)->comment('最高');
            $table->float('l', 7, 3)->comment('最低');
            $table->float('y', 7, 3)->comment('昨收');
            $table->timestamp('final_at', $precision = 0)->nullable();
            $table->timestamps();

            $table->unique('code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
