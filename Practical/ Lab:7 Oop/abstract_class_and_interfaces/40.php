// Create an interface Logger with a method logMessage(). Implement this interface in two
classes, FileLogger and DatabaseLogger, with different implementations for logging
messages. Write a script that uses polymorphism to call the logMessage() method on an
array of Logger objects (mix of FileLogger and DatabaseLogger).
<?php

interface Logger {
    public function logMessage($message);
}

class FileLogger implements Logger {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function logMessage($message) {
        $file = fopen($this->filename, "a"); 
        fwrite($file, $message . PHP_EOL); 
        fclose($file);
    }
}

class DatabaseLogger implements Logger {
    // Placeholder for database connection logic
    public function logMessage($message) {
        // Simulate database insertion 
        echo "Logging message to database: " . $message . "<br>"; 
    }
}

// Create an array of Logger objects
$loggers = [
    new FileLogger("log.txt"),
    new DatabaseLogger(),
    new FileLogger("another_log.txt"),
    new DatabaseLogger()
];

// Log messages using polymorphism
$message = "This is a log message.";
foreach ($loggers as $logger) {
    $logger->logMessage($message); 
}

?>