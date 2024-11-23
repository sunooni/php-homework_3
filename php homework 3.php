// Интерфейс логгера, который содержит метод log
interface Loggerinterface {
    public function log(string $message): void;
}

// Абстрактный класс, реализующий базовую логику логирования
abstract class AbstractLogger implements Loggerinterface {
    protected function writeToDatabase(string $message): void {
        // Здесь предполагается запись сообщения в базу данных
        // Пример: использование PDO для вставки данных
        // $pdo = new PDO('mysql:host=localhost;dbname=your_db', 'user', 'password');
        // $stmt = $pdo->prepare("INSERT INTO logs (message) VALUES (:message)");
        // $stmt->execute(['message' => $message]);
        echo "Записано в базу данных: " . $message . "\\n"; // Примеро вывода
    }
}

// Конкретный класс логгера, который наследует абстрактный класс
class DatabaseLogger extends AbstractLogger {
    public function log(string $message): void {
        // Вызываем метод для записи в базу данных
        $this->writeToDatabase($message);
    }
}

// Пример использования
$logger = new DatabaseLogger();
$logger->log("Это сообщение для логирования.");
