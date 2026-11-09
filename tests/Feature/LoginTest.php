<?php

test('login page loads successfully', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
    $response->assertSee('Selamat Datang!');
    $response->assertSee('Masuk ke akun Anda untuk melanjutkan');
    $response->assertSee('SI-LAB');
    $response->assertSee('Sistem Informasi');
    $response->assertSee('Peminjaman');
    $response->assertSee('Inventaris');
    $response->assertSee('Laboratorium');
});

test('login page contains role selector for siswa guru and admin', function () {
    $response = $this->get('/login');

    $response->assertSee('Siswa');
    $response->assertSee('Guru');
    $response->assertSee('Admin');
    $response->assertSee('role-input');
});

test('login page contains no emojis anywhere in response', function () {
    $response = $this->get('/login');
    $content = $response->getContent();

    // Regex checking for common Unicode emoji blocks
    $emojiPattern = '/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{1F1E0}-\x{1F1FF}\x{2702}-\x{27B0}\x{24C2}-\x{1F251}\x{1F900}-\x{1F9FF}\x{1FA70}-\x{1FAFF}]/u';

    $hasEmoji = preg_match($emojiPattern, $content);
    expect($hasEmoji)->toBe(0);
});

test('login submission validates required fields', function () {
    $response = $this->post('/login', []);

    $response->assertSessionHasErrors(['role', 'username', 'password']);
});
