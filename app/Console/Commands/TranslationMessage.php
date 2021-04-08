<?php

namespace App\Console\Commands;

use App\Events\TranslationEvent;
use Illuminate\Console\Command;

class TranslationMessage extends Command
{
    protected $signature = 'translation:messages {id} {message}';
    protected $description = 'Fire event';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        event(new TranslationEvent(
                $this->argument('id'),
                $this->argument('message'))
        );
    }
}
