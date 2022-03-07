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
        Schema::create('user_balances', function (Blueprint $table) {
            $table->uuid();
            $table->foreign("user_id")
                ->on('users')
                ->references("id")
                ->onDelete("cascade");
            $table->enum("currency",\App\Ecommerce\Base\Enums\Currency::cases());
            $table->enum("status",\App\Ecommerce\User\Entity\UserBalanceStatus::cases());
            $table->decimal("balance",24,6)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_balances');
    }
};
