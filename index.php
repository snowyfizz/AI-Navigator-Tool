<?php
// index.php - A comprehensive PHP starter script
declare(strict_types=1);
class Project {
    private string $version = "1.0.0";
    public function __construct(private string $name) {}
    public function displayInfo(): void { echo "Project: {$this->name}, v{$this->version}" . PHP_EOL; }
}
function main(): void {
    $myProject = new Project("GitHub Auto-Repo Project");
    $myProject->displayInfo();
    echo "\nFeatures: Classes, Methods, Loops" . PHP_EOL;
    for ($i = 0; $i < 5; $i++) { echo "  - Loop " . ($i + 1) . PHP_EOL; }
}
main();
