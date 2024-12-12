<?php

namespace Tests\Feature\Api\V1\Auth\Register;

use Domain\Enums\DocumentType;
use App\Models\DocumentType as ModelsDocumentType;
use Illuminate\Support\Facades\DB;
use Tests\ApiTestCase;

class RegisterTest extends ApiTestCase
{
    private array $validData = [
        'fullname' => 'Jhonattan',
        'email' => 'jhonattan@gmail.com',
        'document_type_id' => 1,
        'document_number' => '13612599908',
        'password' => 'jhon99681424',
        'password_confirmation' => 'jhon99681424',
    ];

    public function setUp(): void
    {
        parent::setUp();
        ModelsDocumentType::factory()->create([
            'name' => DocumentType::CPF,
            'mask' => '###.###.###-##',
            'description' => 'Cadastro de Pessoa Física'
        ]);


    }


    public function test_create_account_with_valid_data(): void
    {
        $response = $this->post(route('auth.register'), $this->validData);
        $response->assertStatus(201);
        $response->assertJsonStructure(
            [
                "message",
                "status",
                "data"
            ]
        );
        $this->assertDatabaseHas('people', [
            'fullname' => $this->validData['fullname'],
            'email' => $this->validData['email'],
            'document_number' => $this->validData['document_number'],
        ]);
    }

    public function test_create_account_with_all_fields_empty()
    {
        $response = $this->post(route('auth.register'), []);
        $response->assertStatus(422);
        $response->assertJsonStructure(
            [
                "message",
                "errors"
            ]
        );
    }

    public function test_create_account_with_field_name_empty()
    {
        $response = $this->post(route('auth.register'), [
            'fullname' => '',
            'email' => 'jhonattan@gmail.com',
            'document_type' => 'cpf',
            'document_number' => '13612599908',
            'password' => 'jhon99681424',
            'password_confirmation' => 'jhon99681424'
        ]);
        $response->assertStatus(422);
        $response->assertJsonStructure(
            [
                "message",
                "errors"
            ]
        );
        $response->assertJsonValidationErrors('fullname');
    }

    public function test_create_account_with_field_email_empty()
    {
        $response = $this->post(route('auth.register'), [
            'fullname' => 'Jhonattan',
            'email' => '',
            'document_type' => 'cpf',
            'document_number' => '13612599908',
            'password' => 'jhon99681424',
            'password_confirmation' => 'jhon99681424'
        ]);
        $response->assertStatus(422);
        $response->assertJsonStructure(
            [
                "message",
                "errors"
            ]
        );
        $response->assertJsonValidationErrors('email');
    }

    public function test_create_account_with_field_email_is_invalid()
    {
        $response = $this->post(route('auth.register'), [
            'fullname' => 'Jhonattan',
            'email' => 'jhonattan',
            'document_type' => 'cpf',
            'document_number' => '13612599908',
            'password' => 'jhon99681424',
            'password_confirmation' => 'jhon99681424'
        ]);
        $response->assertStatus(422);
        $response->assertJsonStructure(
            [
                "message",
                "errors"
            ]
        );
        $response->assertJsonValidationErrors('email');
    }

    public function test_create_account_with_field_document_type_empty()
    {
        $response = $this->post(route('auth.register'), [
            'fullname' => 'Jhonattan',
            'email' => 'teste@gmail.com',
            'document_type_id' => '',
            'document_number' => '13612599908',
            'password' => 'jhon99681424',
            'password_confirmation' => 'jhon99681424'
        ]);
        $response->assertStatus(422);
        $response->assertJsonStructure(
            [
                "message",
                "errors"
            ]
        );
        $response->assertJsonValidationErrors('document_type_id');
    }

    public function test_create_account_with_field_document_type_is_invalid()
    {
        $response = $this->post(route('auth.register'), [
            'fullname' => 'Jhonattan',
            'email' => 'teste@gmail.com',
            'document_type_id' => 'invalid_type',
            'document_number' => '13612599909',
            'password' => 'jhon99681424',
            'password_confirmation' => 'jhon99681424'
        ]);
        $response->assertStatus(422);
        $response->assertJsonStructure(
            [
                "message",
                "errors"
            ]
        );
        $response->assertJsonValidationErrors('document_type_id');
    }

    public function test_create_account_with_field_document_number_empty()
    {
        $response = $this->post(route('auth.register'), [
            'fullname' => 'Jhonattan',
            'email' => 'teste@gmail.com',
            'document_type' => 'cpf',
            'document_number' => '',
            'password' => 'jhon99681424',
            'password_confirmation' => 'jhon99681424'
        ]);
        $response->assertStatus(422);
        $response->assertJsonStructure(
            [
                "message",
                "errors"
            ]
        );
        $response->assertJsonValidationErrors('document_number');
    }


}
