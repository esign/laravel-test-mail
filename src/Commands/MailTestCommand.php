<?php

namespace Esign\TestMail\Commands;

use Esign\TestMail\Mail\TestMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailTestCommand extends Command
{
    protected $signature = 'mail:test {recipient} {--queue}';
    protected $description = 'Send a test mail to verify your mail setup';

    public function handle(): int
    {
        $recipient = $this->argument('recipient');
        $queue = (bool) $this->option('queue');

        $mailable = (new TestMail())->to($recipient);
        $queue ? Mail::queue($mailable) : Mail::send($mailable);

        $message = sprintf(
            'Test mail has been %s to %s',
            $queue ? 'queued' : 'sent',
            $recipient
        );
        $this->info($message);

        return Command::SUCCESS;
    }
}
