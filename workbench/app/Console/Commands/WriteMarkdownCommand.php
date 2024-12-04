<?php

namespace Workbench\App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use SchenkeIo\PackagingTools\Badges\BadgeStyle;
use SchenkeIo\PackagingTools\Badges\MakeBadge;
use SchenkeIo\PackagingTools\Markdown\MarkdownAssembler;

class WriteMarkdownCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:markdown';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @throws FileNotFoundException
     */
    public function handle()
    {
        $mda = new MarkdownAssembler('workbench/resources/md');
        $mda->addMarkdown('header.md');
        $mda->writeMarkdown('README.md');
        MakeBadge::makeCoverageBadge('build/coverage/clover.xml', '00dd00')
            ->store('.github/covergae.svg', BadgeStyle::Flat);
        MakeBadge::makePhpStanBadge('phpstan.neon')->store('.github/phpstan.svg', BadgeStyle::Flat);

    }
}
