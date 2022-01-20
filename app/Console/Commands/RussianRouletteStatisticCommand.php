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
    protected $signature = 'russian-roulette-statistic';

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
        $statistic = $this->cacheRepository->get('Statistic', []);
        $detailedStatistic = $this->cacheRepository->get('detailedStatistic', []);

        $statistic["Computer"] = $statistic["Computer"] ?? 0;
        $statistic["Human"] = $statistic["Human"] ?? 0;
        $table = [];

        foreach ($statistic as $key => $count) {
            $table[] = [$key, $count];
        }
        
        $this->table(['Player', 'Nr of deaths'], $table);
        $this->table(['Who Started', 'Bullet Place', "Who Died"], $detailedStatistic);
    }
}
