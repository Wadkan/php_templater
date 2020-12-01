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
        $file = __DIR__ . '/' . $this->folder_path . '/' . $templateName;

        $template = file_get_contents($file);

        foreach ($templateVariables as $key => $value) {
            $template = str_replace('{{ ' . $key . ' }}', $value, $template);
        }

        return $template;

    }

}

$arr = ['name' => 'Wadkan', 'age' => 31];

$a = new Templeton('template');
echo $a->run('test.html', $arr);