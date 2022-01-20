<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;

class RussianRouletteCommand extends Command
{
    private CacheRepository $cacheRepository;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'russian-roulette';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Small game - see your luck! Choose a nr from 1 to 6';

    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CacheRepository $cacheRepository)
    {
        parent::__construct();
        $this->cacheRepository = $cacheRepository;
    }

    /**
     * Execute the console command.
     * @param int $randNr;
     * 
     */
    public function handle()
    {
        $this->line('Game: Russian Roulette!'); //Starting information
        $this->line("The bullet is inserted into a random place in a revolver");
        $this->line("You will take turns playing with computer shuting in yourself");
        $this->line("The one who starts is asigned also randomly");
        // $this->line("See todays statistic of deaths bellow:");

        $this->line("Let's see who dies this time!");
        $response = $this->confirm('Do you wish to continue? [yes|no]');

        if($response){
        $statistic = $this->cacheRepository->get('Statistic', []);
        $detailedStatistic = $this->cacheRepository->get('detailedStatistic', []);

        $randNr = rand(1,6);

        $whoStarts = rand(1,2);
        // 1 - Computer
        // 2 - Human

        switch ($whoStarts) {
            case 1:
                if($randNr % 2 == 0){
                    $this->error("Human is DEAD! Computer started and bullet place: {$randNr}");
                    $detailedStatistic[] = ["Computer", $randNr, "Human"];
                    $statistic["Human"]++;
                }
                else{
                    $statistic["Computer"]++;
                    $this->info("Human is ALIVE! Coputer started and bullet place: {$randNr}"); 
                    $detailedStatistic[] = ["Computer", $randNr, "Computer"];
                }
              break;
            case 2:
                if($randNr % 2 != 0){
                    $statistic["Human"]++;
                    $this->error("Human is DEAD! Human started and bullet place: {$randNr}");  
                    $detailedStatistic[] = ["Human", $randNr, "Human"];
                }
                else{
                    $statistic["Computer"]++;
                    $this->info("Human is ALIVE! Human started and bullet place: {$randNr}"); 
                    $detailedStatistic[] = ["Human", $randNr, "Computer"];
                }
   
              break;
            default:
            $this->line("Something is wrong");
          }

        $this->cacheRepository->set('Statistic', $statistic, 86400);
        $this->cacheRepository->set('detailedStatistic', $detailedStatistic, 86400);
    }
    else
        $this->line("See you next time");
            
    }
}
