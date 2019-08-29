<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message;
/*use Carbon\Carbon;
*/
class CleanDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracarte:clean-database';

     /**
     * Indicates whether the command should be shown in the Artisan command list.
     *
     * @var bool
     */
    protected $hidden = false;


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean Database';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Cleaning database...');

      /* Message::where('created_at', '<=', Carbon::parse('1 month ago'))->delete();*/
      
      //equivaut
       Message::twoMonthsOld()->delete();

       $this->info('Database cleaned.');
    }
}
