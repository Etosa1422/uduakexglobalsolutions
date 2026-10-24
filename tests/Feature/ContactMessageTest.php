<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactMessageTest extends TestCase
{
    public function test_quick_message_is_emailed_to_the_configured_contact_address(): void
    {
        Mail::fake();

        $response = $this->post('/contact/quick-message', [
            'name' => 'Taylor Example',
            'email' => 'taylor@example.com',
            'message' => 'I would like to learn more.',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHas('contact_success');

        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail): bool {
            return $mail->hasTo(config('mail.contact_to'))
                && $mail->senderName === 'Taylor Example'
                && $mail->senderEmail === 'taylor@example.com'
                && $mail->messageBody === 'I would like to learn more.';
        });
    }

    public function test_quick_message_validation_rejects_invalid_email_addresses(): void
    {
        Mail::fake();

        $response = $this->from('/#contact')->post('/contact/quick-message', [
            'name' => 'Taylor Example',
            'email' => 'not-an-email',
            'message' => 'I would like to learn more.',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHasErrors('email');
        Mail::assertNothingSent();
    }
}
