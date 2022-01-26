<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ManagerWeeklyReport extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Relatório Semanal ' . now()->startOfWeek()->format('d/m') . ' - ' . now()->endOfWeek()->format('d/m');
        return $this->markdown('mails.manager-weekly-report')
            ->subject($subject)
            ->attach(storage_path('RelatorioSemanal.xlsx'));
    }
}
