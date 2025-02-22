<?php

namespace Esign\TestMail\Tests\Feature\Commands;

use Esign\TestMail\Commands\MailTestCommand;
use Esign\TestMail\Mail\TestMail;
use Esign\TestMail\Tests\TestCase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Attributes\Test;

final class MailTestCommandTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Config::set('app.name', 'TestMail');
    }

    #[Test]
    public function it_can_send_a_test_mail(): void
    {
        Mail::fake();

        $command = $this->artisan(MailTestCommand::class, ['recipient' => 'test@example.com']);
        $command->run();

        $command->assertExitCode(0);
        $command->expectsOutput('Test mail has been sent to test@example.com');
        Mail::assertSent(TestMail::class, function (TestMail $mail) {
            return
                $mail->hasTo('test@example.com') &&
                $mail->hasSubject('Test mail from TestMail') &&
                $mail->assertSeeInHtml('Test mail from TestMail');
        });
    }

    #[Test]
    public function it_can_queue_a_test_mail(): void
    {
        Mail::fake();

        $command = $this->artisan(MailTestCommand::class, ['recipient' => 'test@example.com', '--queue' => true]);
        $command->run();

        $command->assertExitCode(0);
        $command->expectsOutput('Test mail has been queued to test@example.com');
        Mail::assertQueued(TestMail::class, function (TestMail $mail) {
            return
                $mail->hasTo('test@example.com') &&
                $mail->hasSubject('Test mail from TestMail') &&
                $mail->assertSeeInHtml('Test mail from TestMail');
        });
    }
}
