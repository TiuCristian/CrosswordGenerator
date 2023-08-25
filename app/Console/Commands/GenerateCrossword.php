<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CrosswordEntry;


class GenerateCrossword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:crossword';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Crossword Command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return 0;
        $entries = CrosswordEntry::all();

        foreach ($entries as $entry) {
            $output = [
                'answer' => $entry->answer,
                'clue' => $entry->clue,
                'length' => $entry->length,
                'date' => $entry->date,
                'direction' => $entry->direction,
            ];

            $this->line(json_encode($output));
        }
    }
}
