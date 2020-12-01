<?php


class Templeton
{
    private string $folder_path;

    public function __construct(string $folder_path)
    {
        $this->folder_path = $folder_path;
    }

    public function run(string $templateName, array $templateVariables): string
    {
        $temp_full_path = __DIR__ . '/' . $this->folder_path . '/' . $templateName;
        return readfile($temp_full_path);

    }

}

$arr = ['name' => 'Wadkan', 'age' => 31];

$a = new Templeton('template');
echo $a->run('test.html', $arr);