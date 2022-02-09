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
        $this->line("A player places a single round in a revolver, spins the cylinder,");
        $this->line("places the muzzle against the head or body and pulls the trigger");
        $this->line("If the loaded chamber aligns with the barrel, the weapon will fire,  killing the player.");
        $this->line("Each of the players will take turns shooting once - untill someone loses the game");
        $this->line("Now you will play with the computer - who starts is assigned randomly");

        $this->line("Let's see who dies this time!");
        $response = $this->confirm('Do you wish to continue? [yes|no]');

        if($response){

        $statistics = $this->cacheRepository->get('Statistic', []);
        $detailedStatistics = $this->cacheRepository->get('detailedStatistic', []);
        $bulletStatistics= $this->cacheRepository->get('bulletPlace',[]);

        $randNr = rand(1,6);

        $whoStarts = rand(1,2);
        // 1 - Computer
        // 2 - Human

        $statistics["Computer"] = $statistics["Computer"] ?? 0;
        $statistics["Human"] = $statistics["Human"] ?? 0;
        $bulletStatistics[$randNr] = $bulletStatistics[$randNr] ?? 0;

        switch ($whoStarts) {
            case 1:
                if($randNr % 2 == 0){
                    $this->error("Human is DEAD! Computer started and bullet place: {$randNr}");
                    $detailedStatistics[] = ["Computer", $randNr, "Human"];
                    $statistics["Human"]++;
                    $bulletStatistics[$randNr]++;
                }
                else{
                    $statistics["Computer"]++;
                    $this->info("Human is ALIVE! Coputer started and bullet place: {$randNr}"); 
                    $detailedStatistics[] = ["Computer", $randNr, "Computer"];
                    $bulletStatistics[$randNr]++;
                }
              break;
            case 2:
                if($randNr % 2 != 0){
                    $statistics["Human"]++;
                    $this->error("Human is DEAD! Human started and bullet place: {$randNr}");  
                    $detailedStatistics[] = ["Human", $randNr, "Human"];
                    $bulletStatistics[$randNr]++;
                }
                else{
                    $statistics["Computer"]++;
                    $this->info("Human is ALIVE! Human started and bullet place: {$randNr}"); 
                    $detailedStatistics[] = ["Human", $randNr, "Computer"];
                    $bulletStatistics[$randNr]++;
                }
   
              break;
            default:
                throw new \LogicException;
          }

        $this->cacheRepository->set('bulletPlace',$bulletStatistics,86400);
        $this->cacheRepository->set('Statistic', $statistics, 86400);
        $this->cacheRepository->set('detailedStatistic', $detailedStatistics, 86400);
    }
    else
        $this->line("See you next time");
            
    }
}
