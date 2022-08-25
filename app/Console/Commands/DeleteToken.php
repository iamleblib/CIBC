<?php

namespace App\Console\Commands;

use App\Models\Token;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeleteToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '\Delete token from table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Token::where([
            ['created_at', '<=',  Carbon::now()->subSeconds(2)],
        ])->delete();
    }
}
