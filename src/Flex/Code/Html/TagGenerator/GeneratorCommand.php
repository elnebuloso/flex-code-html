<?php
namespace Flex\Code\Html\TagGenerator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Parser;

/**
 * Class GeneratorCommand
 *
 * @author Jeff Tunessen <jeff.tunessen@gmail.com>
 */
class GeneratorCommand extends Command
{
    /**
     * @var string
     */
    protected $tagsFile = '.flex-code-html/tags.yml';

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
        $yaml = new Parser();
        $data = $yaml->parse(file_get_contents($this->tagsFile));

        $generator = new Generator($data);
        $generator->generate();
    }
}
