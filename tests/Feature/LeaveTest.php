<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LeaveTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testGetData()
    {
        $response = $this->get('/api/annual-leaves');

        $response->assertStatus(200)->assertJson([
            'status' => true,
            'data' => true,
        ]);
    }

    public function testRequestLeave()
    {
        $response = $this->postJson('/api/annual-leaves', [
            'leave_date' => '2020-01-01',
            'duration' => 1,
            'reason' => 'test',
            'user_id' => 1,
        ]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'status' => true,
                'data' => true,
            ]);
    }

    public function testDetailLeave()
    {
        $leave = \App\Leave::first();
        $response = $this->getJson('/api/annual-leaves/' . $leave->id);

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => true,
                'data' => true,
            ]);
    }

    public function testValidateLeaveDate()
    {
        $response = $this->postJson('/api/annual-leaves', [
            'leave_date' => 'asdasd',
            'duration' => 1,
            'reason' => 'test',
            'user_id' => 1,
        ]);

        $response
            ->assertStatus(422)
            ->assertJson([
                'status' => false,
                'data' => true,
            ]);
    }

    public function testValidateDuration()
    {
        $response = $this->postJson('/api/annual-leaves', [
            'leave_date' => '2020-01-01',
            'duration' => 'asdasd',
            'reason' => 'test',
            'user_id' => 1,
        ]);

        $response
            ->assertStatus(422)
            ->assertJson([
                'status' => false,
                'data' => true,
            ]);
    }

    public function testValidateUserId()
    {
        $response = $this->postJson('/api/annual-leaves', [
            'leave_date' => '2020-01-01',
            'duration' => 1,
            'reason' => 'test',
            'user_id' => 'asdasd',
        ]);

        $response
            ->assertStatus(422)
            ->assertJson([
                'status' => false,
                'data' => true,
            ]);
    }

    public function testValidateSameDate()
    {
        $leave = \App\Leave::first();
        $response = $this->postJson('/api/annual-leaves', [
            'leave_date' => $leave->leave_date,
            'duration' => 1,
            'reason' => 'test',
            'user_id' => $leave->user_id,
        ]);

        $response
            ->assertStatus(422)
            ->assertJson([
                'status' => false,
                'data' => true,
            ]);
    }
}
