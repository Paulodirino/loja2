    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateClientesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('clientes', function (Blueprint $table) {
                $table->id(); // ID auto incrementado
                $table->string('nome'); // Nome do cliente
                $table->string('email')->unique(); // Email do cliente
                $table->string('telefone')->nullable(); // Telefone do cliente
                $table->string('endereco')->nullable(); // Endereço do cliente
                $table->timestamps(); // Campos created_at e updated_at
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('clientes');
        }
    }
