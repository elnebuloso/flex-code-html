<?php
namespace Flex\Code\Html\TagGenerator;

use Flex\Code\Html\TagGenerator\Entity\TagManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class GeneratorCommand
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class GeneratorCommand extends Command
{
    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setName('generate-tags');
        $this->setDescription('generate tag elements');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;

        $this->output->writeln("<comment>generating elements</comment>");
        $this->generate();
        $this->output->writeln("<comment>generating elements, done</comment>");
    }

    /**
     * @return void
     */
    protected function generate()
    {
        $tagManager = new TagManager();
        $generator = new Generator($tagManager->findTags());
    }
}
