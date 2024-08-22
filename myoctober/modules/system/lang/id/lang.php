<?php return [
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Kembali lagi ke hal dasar',
  ],
  'directory' => [
    'create_fail' => 'Tidak dapat membuat direktori: :name',
  ],
  'file' => [
    'create_fail' => 'Tidak dapat membuat berkas: :name',
  ],
  'combiner' => [],
  'system' => [
    'name' => 'Sistem',
    'menu_label' => 'Sistem',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Lain-lain',
      'logs' => 'Logs',
      'mail' => 'Surat',
      'shop' => 'Toko',
      'team' => 'Tim',
      'users' => 'Pengguna',
      'system' => 'Sistem',
      'social' => 'Sosial',
      'events' => 'Peristiwa',
      'customers' => 'Pelanggan',
      'my_settings' => 'Pengaturanku',
    ],
  ],
  'plugin' => [
    'unnamed' => 'Plugin Tidak Bernama',
    'name' => [],
  ],
  'plugins' => [
    'enable_or_disable' => 'Aktif atau Deaktif',
    'enable_or_disable_title' => 'Aktif atau Deaktif Plugin',
    'remove' => 'Lepaskan',
    'refresh' => 'Muat Ulang',
    'disabled_label' => 'Deaktivasi',
    'disabled_help' => 'Plugin yang nonaktif akan diabaikan di aplikasi.',
    'selected_amount' => 'Plugin terpilih: :amount',
    'remove_confirm' => 'Anda yakin akan melepaskannya?',
    'remove_success' => 'Berhasil melepaskan plugin tersebut dari sistem.',
    'refresh_success' => 'Berhasil memuat ulang plugin dalam sistem.',
    'disable_confirm' => 'Anda yakin akan menonaktifkannya?',
    'disable_success' => 'Berhasil menonaktifkan plugin tersebut.',
    'enable_success' => 'Berhasil mengaktifkan plugin tersebut.',
  ],
  'project' => [
    'attach' => 'Kaitkan Proyek',
    'detach' => 'Lepas Proyek',
    'none' => 'Tidak ada',
    'id' => [
      'missing' => 'Silakan tentukan ID Proyek yang akan digunakan.',
    ],
    'detach_confirm' => 'Anda yakin akan melepaskan proyek ini?',
    'unbind_success' => 'Proyek telah berhasil dilepaskan.',
  ],
  'settings' => [
    'search' => 'Pencarian',
  ],
  'mail' => [
    'smtp_ssl' => 'Koneksi lewat SSL dibutuhkan',
  ],
  'mail_templates' => [
    'name_comment' => 'Nama unik yang digunakan untuk merujuk acuan ini',
    'test_send' => 'Kirim pesan ujicoba',
    'return' => 'Kembali ke daftar templat',
  ],
  'install' => [],
  'updates' => [
    'plugin_author' => 'Pemilik',
    'plugin_not_found' => 'Plugin tidak ditemukan',
    'core_build' => 'Build :build',
    'core_build_help' => 'Tersedia Build terbaru.',
    'plugin_version_none' => 'Plugin baru',
    'theme_new_install' => 'Instal tema baru.',
    'theme_extracting' => 'Ekstraksi tema: :name',
    'update_label' => 'Pembaruan perangkat lunak',
    'update_loading' => 'Memuat pembaruan yang tersedia...',
    'force_label' => 'Paksa untuk pembaruan',
    'found' => [
      'label' => 'Terdapat pembaruan baru!',
      'help' => 'Klik Pembaruan perangkat lunak untuk memulai proses pembaruan.',
    ],
    'none' => [
      'label' => 'Tidak ada pembaruan',
      'help' => 'Tidak ditemukan pembaruan baru.',
    ],
  ],
  'server' => [
    'connect_error' => 'Kesalahan dalam koneksi dengan server.',
    'response_not_found' => 'Tidak menemukan respon pembaruan.',
    'response_invalid' => 'Respon tidak valid dari server.',
    'response_empty' => 'Respon kosong dari server.',
    'file_error' => 'Server gagal mengirimkan file.',
    'file_corrupt' => 'Berkas dari server telah rusak.',
  ],
  'behavior' => [
    'missing_property' => 'Kelas :class harus menggunakan properti $:property yang telah digunakan oleh behavior :behavior.',
  ],
  'config' => [
    'not_found' => 'Tidak dapat menemukan berkas pengaturan :file yang digunakan untuk :location.',
    'required' => 'Pengaturan yang digunakan pada :location harus memberikan value \':property\'.',
  ],
  'zip' => [
    'extract_failed' => 'Tidak dapat membuka berkas utama \':file\'.',
  ],
  'event_log' => [],
  'request_log' => [
    'empty_link' => 'Kosongkan catatan permintaan',
    'empty_loading' => 'Mengosongkan catatan permintaan...',
    'empty_success' => 'Berhasil mengosongkan catatan permintaan.',
    'return_link' => 'Kembali ke catatan permintaan',
    'id' => 'ID',
  ],
  'permissions' => [
    'name' => 'Sistem',
    'manage_system_settings' => 'Kelola pengaturan sistem',
    'manage_software_updates' => 'Kelola pembaruan perangkat lunak',
    'manage_mail_templates' => 'Kelola templat surat',
    'manage_mail_settings' => 'Kelola pengaturan surat',
    'manage_other_administrators' => 'Kelola administrator lainnya',
  ],
];
