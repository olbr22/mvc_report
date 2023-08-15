<?php

namespace App\Command;
// add your entity
use App\Entity\FoodWaste;
use App\Entity\TextileConsumption;

use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Style\SymfonyStyle;

class InsertCsvDataCommand extends Command
{
    private $em;
    private $connection;

    public function __construct(EntityManagerInterface $em, Connection $connection)
    {
        parent::__construct();

        $this->em = $em;
        $this->connection = $connection;
    }

    protected function configure()
    {
        $this
            ->setName('app:insert-csv-data')
            ->setDescription('Insert data from CSV into the database.')
            // ->addArgument('entity', InputArgument::REQUIRED, 'Entity object to instantiate from')
            ->addArgument('table', InputArgument::REQUIRED, 'Table to insert data to')
            ->addArgument('csvFilePath', InputArgument::REQUIRED, 'Path to CSV file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);


        // $entityArgument = $input->getArgument('entity');
        // $io->success("Entity to instantiate object from: $entityArgument");

        $tableArgument = $input->getArgument('table');
        $io->success("Table to insert data to: $tableArgument");

        $csvFilePath = $input->getArgument('csvFilePath');
        $io->success("CSV file path: $csvFilePath");

        $handle = fopen($csvFilePath, 'r');
        $io->success('CSV file opened');

        // Assuming the first row contains column names, read and skip it
        $columns = fgetcsv($handle);

        // Insert data using both ORM and DBAL
        while (($data = fgetcsv($handle)) !== false) {
            $dataToInsert = array_combine($columns, $data);

            // Display data before insertion
            $io->text('Data to insert:');
            $io->listing($dataToInsert);

            // Using ORM
            // OBS Change to a class you want to instantiate object from
            $entity = new FoodWaste();
            // Map CSV data to entity properties
            $this->em->persist($entity);

            // Using DBAL
            $this->connection->insert($tableArgument, $dataToInsert);
            // Display message after insertion
            $io->success('Data inserted successfully.');
        }

        $this->em->flush();
        fclose($handle);

        $io->success('Data import process completed.');
    }
}
