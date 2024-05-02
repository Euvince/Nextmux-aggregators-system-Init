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
        Schema::table('payments', function (Blueprint $table) {
            $table->foreignId('application_id')->references('id')->on('applications');
            $table->foreignId('order_id')->references('id')->on('orders');
            $table->foreignId('customer_id')->references('id')->on('customers');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users');
        });
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreignId('payment_method_id')->references('id')->on('payment_methods');
            $table->foreignId('payment_id')->references('id')->on('payments');
            $table->foreignId('application_id')->references('id')->on('applications');
            $table->foreignId('user_id')->references('id')->on('users');
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->foreignId('country_id')->references('id')->on('countries');
            $table->foreignId('company_id')->references('id')->on('companies');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('application_id')->references('id')->on('applications');
            $table->foreignId('customer_id')->references('id')->on('customers');
        });

        Schema::table('payment_links', function (Blueprint $table) {
            $table->foreignId('payment_method_id')->references('id')->on('payment_methods');
            $table->foreignId('application_id')->references('id')->on('applications');
        });

        Schema::table('companies', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users');
        });
        Schema::table('applications', function (Blueprint $table) {
            $table->foreignId('aggregator_id')->references('id')->on('aggregators');
            $table->foreignId('company_id')->references('id')->on('companies');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->foreignId('payment_id')->references('id')->on('payments');
        });
        Schema::table('transaction_histories', function (Blueprint $table) {
            $table->foreignId('transaction_id')->references('id')->on('transactions');
        });
        Schema::table('payment_methods', function (Blueprint $table) {
            $table->foreignId('payment_category_id')->references('id')->on('payment_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('applications_id');
            $table->dropColumn('order_id');
            $table->dropColumn('customer_id');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('payment_method_id');
            $table->dropColumn('payment_id');
            $table->dropColumn('application_id');
            $table->dropColumn('user_id');
        });
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn('country_id');
            $table->dropColumn('company_id');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('application_id');
            $table->dropColumn('customer_id');
        });
        Schema::table('payment_links', function (Blueprint $table) {
            $table->dropColumn('payment_method_id');
            $table->dropColumn('application_id');
        });
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn('aggregator_id');
            $table->dropColumn('company_id');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('payment_id');
        });
        Schema::table('transaction_histories', function (Blueprint $table) {
            $table->dropColumn('transaction_id');
        });
        Schema::table('payment_methods', function (Blueprint $table) {
            $table->dropColumn('payment_category_id');
        });
    }
};
