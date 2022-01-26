<?php

namespace App\Console\Commands;

use App\Mail\ManagerWeeklyReport;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reports:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends weekly report to Manager';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $manager = new User([
            'name' => 'João Carlos',
            'email' => 'gerente@boaentrega.com.br'
        ]);

        Mail::to($manager)->send(new ManagerWeeklyReport());
    }
}
