<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;

class RussianRouletteStatisticCommand extends Command
{
    private CacheRepository $cacheRepository;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'russian-roulette:statistic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     *
     * @return int
     */
    public function handle()
    {
        $statistics = $this->cacheRepository->get('Statistic', []);
        $detailedStatistics = $this->cacheRepository->get('detailedStatistic', []);
        $bulletStatistics = $this->cacheRepository->get('bulletPlace',[]);
        
        $table = [];
        $table2 = [];

        foreach ($statistics as $key => $count) {
            $table[] = [$key, $count];
        }

        foreach ($bulletStatistics as $key => $count) {
            $table2[] = [$key, $count];
        }


        $this->table(['Bullet Place', 'Nr of times'], $table2);
        $this->table(['Player', 'Nr of deaths'], $table);
        $this->table(['Who Started', 'Bullet Place', "Who Died"], $detailedStatistics);
        
    }
}
