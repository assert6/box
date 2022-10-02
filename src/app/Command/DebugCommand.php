<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Command;

use App\Box;
use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as HyperfCommand;
use Psr\Container\ContainerInterface;

#[Command]
class DebugCommand extends HyperfCommand
{
    public function __construct(protected ContainerInterface $container)
    {
        parent::__construct('debug');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Debug.');
        $this->ignoreValidationErrors();
    }

    public function handle()
    {
        $this->output->writeln([
            'box version: v' . Box::VERSION,
        ]);
    }
}
