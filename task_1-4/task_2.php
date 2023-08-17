<?php
// Define the logging interface
interface LoggerInterface {
    public function log($message);
}

// Implement the interface with different logging classes
class FileLogger implements LoggerInterface {
    private $logFilePath;

    public function __construct($logFilePath) {
        $this->logFilePath = $logFilePath;
    }

    public function log($message) {
        $logMessage = "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
        file_put_contents($this->logFilePath, $logMessage, FILE_APPEND);
    }
}

class ConsoleLogger implements LoggerInterface {
    public function log($message) {
        echo "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
    }
}

// Usage
$fileLogger = new FileLogger('log.txt');
$fileLogger->log("This is a file log entry.");

$consoleLogger = new ConsoleLogger();
$consoleLogger->log("This is a console log entry.");
