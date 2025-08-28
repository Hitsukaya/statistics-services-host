<?php

namespace App\Livewire;

use Livewire\Component;

class ServiceStatus extends Component
{
    public $hosts = [
        [
            'name' => 'doragon.hitsukaya.info (HOST)',
            'latency' => 35,
            'uptime' => 99.9,
            'comment' => 'Operational',
            'services' => [
                ['name' => 'API', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'Client', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'Web APP', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'Firewall', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'SSL / HTTPS', 'latency' => 20, 'uptime' => 100, 'comment' => 'Expiring Soon'],
                ['name' => 'Tools Convertor', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'Backup', 'latency' => 30, 'uptime' => 99.5, 'comment' => 'Operational'],
            ],
            'blacklist' => [
                ['address' => '142.168.1.101', 'time_remaining' => 144],
                ['address' => '152.168.1.102', 'time_remaining' => 72],
                ['address' => '192.168.1.101', 'time_remaining' => 14400],
                ['address' => '10.0.1.8', 'time_remaining' => 45],
                ['address' => '192.168.1.101', 'time_remaining' => 14400],
            ],
            'databases' => [
                ['name' => 'MySQL/MariaDB', 'latency' => 30, 'uptime' => 99.8, 'comment' => 'Operational'],
                ['name' => 'PostgreSQL', 'latency' => 35, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'MongoDB', 'latency' => 45, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'RedisCache', 'latency' => 45, 'uptime' => 99.7, 'comment' => 'Operational'],
            ],
        ],

        [
            'name' => 'mail.hitsukaya.info (Email Server)',
            'latency' => 40,
            'uptime' => 99.5,
            'comment' => 'Operational',
            'services' => [
                ['name' => 'SMTP (Outbound)', 'latency' => 25, 'uptime' => 99.8, 'comment' => 'Operational'],
                ['name' => 'IMAP (Inbound)', 'latency' => 20, 'uptime' => 99.9, 'comment' => 'Operational'],
                ['name' => 'POP3 (Inbound)', 'latency' => 22, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'Webmail', 'latency' => 18, 'uptime' => 100, 'comment' => 'Operational'],
                ['name' => 'Spam Filter', 'latency' => 10, 'uptime' => 99.9, 'comment' => 'Operational'],
                ['name' => 'Antivirus', 'latency' => 15, 'uptime' => 99.9, 'comment' => 'Operational'],
                ['name' => 'Backup', 'latency' => 30, 'uptime' => 99.5, 'comment' => 'Operational'],
            ],
            'blacklist' => [
                ['address' => '203.0.113.5', 'time_remaining' => 120],
                ['address' => '198.51.100.22', 'time_remaining' => 60],
            ],
            'databases' => [
                ['name' => 'MySQL', 'latency' => 25, 'uptime' => 99.8, 'comment' => 'Operational'],
            ],
        ],

        [
            'name' => 'unitedmt2.hitsukaya.info (Game Server)',
            'latency' => 35,
            'uptime' => 99.9,
            'comment' => 'Operational',
            'services' => [
                ['name' => 'Login Web', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'Register Web', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'Login', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'Characters', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Operational'],
                ['name' => 'World', 'latency' => 20, 'uptime' => 100, 'comment' => 'Operational'],
                ['name' => 'Guild War', 'latency' => 25, 'uptime' => 99.7, 'comment' => 'Expiring Soon'],
                ['name' => 'Events', 'latency' => 0, 'uptime' => 0, 'comment' => 'Expiring Soon'],
            ],
            'blacklist' => [
                ['address' => '142.168.1.101', 'time_remaining' => 144],
                ['address' => '152.168.1.102', 'time_remaining' => 72],
                ['address' => '192.168.1.101', 'time_remaining' => 14400],
                ['address' => '10.0.1.8', 'time_remaining' => 45],
                ['address' => '192.168.1.101', 'time_remaining' => 14400],
            ],
            'databases' => [
                ['name' => 'MySQL/MariaDB', 'latency' => 30, 'uptime' => 99.8, 'comment' => 'Operational'],
            ],
        ],
    ];

    public function render()
    {
        return view('livewire.service-status');
    }
}
