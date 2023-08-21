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

/**
 * InsertCsvDataCommand make it possible to fill in database table at var/data.db
 * with data in csv format
 *
 * This will suppress ShortVariable warning in
 * this class.
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class InsertCsvDataCommand extends Command
{
    private EntityManagerInterface $em;
    private Connection $connection;

    public function __construct(EntityManagerInterface $em, Connection $connection)
    {
        parent::__construct();

        $this->em = $em;
        $this->connection = $connection;
    }

    protected function configure(): void
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
        $tableArgumentString = strval($tableArgument);
        $io->success("Table to insert data to: $tableArgumentString");

        $csvFilePath = $input->getArgument('csvFilePath');
        $csvFilePathString = strval($csvFilePath);
        $io->success("CSV file path: $csvFilePathString");

        if (file_exists($csvFilePathString)) {
            $handle = fopen($csvFilePathString, 'r'); // Open the file in read mode
            $io->success('CSV file opened');

            if ($handle !== false) {
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
                    $this->connection->insert($tableArgumentString, $dataToInsert);
                    // Display message after insertion
                    $io->success('Data inserted successfully.');
                    return Command::SUCCESS; // Indicate successful execution
                }
                $this->em->flush();
                fclose($handle);
            } else {
                // Handle the case where the file couldn't be opened
                echo "Failed to open the file: $csvFilePathString";
                return Command::FAILURE; // Indicate failure
            }
        } else {
            // Handle the case where the file doesn't exist
            echo "File not found: $csvFilePathString";
            return Command::FAILURE;
        }
    }
}
