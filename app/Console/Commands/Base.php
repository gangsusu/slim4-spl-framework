<?php

namespace App\Console\Commands;

use Symfony\Component\Console\Command\Command;

class Base extends Command
{
    public $namespace;

    public function make($type, $name, $datas = [], $extend = '')
    {
        $namespace = $this->getNameSpace($type, $name);
        $filename = $this->getFileName('App\Http\Controllers', $name);
        $datas['namespace'] = $namespace;
        $datas['extend'] = $extend;
        $datas['time'] = date('Y-m-d H:i:s');
//        $content = "<?php \n\n" . view('console.' . strtolower($type), $datas);
        $content = $datas;
        if (file_exists($filename)) {
            $this->error("The {$filename} is exists~~");
            exit();
        }
        @file_put_contents($filename, $content);

        return file_exists($filename);
    }

    public function getNameSpace($type, $name, $slug = '')
    {
        $type = ucfirst($type);
        $path = \dirname($name);
        $path = '.' === $path ? '' : "\\{$path}";
        $type = str_replace('/', '\\', $type);

        return "App\\{$type}".$path;
    }

    public function getFileName($namespace, $classname)
    {
        $path = str_replace('\\', '/', $namespace);
        $file = \dirname(\dirname(\dirname(__DIR__))).'/'.$path.'/'.$classname.'.php';
        $this->dirs(\dirname($file));

        return $file;
    }

    public function dirs($dir)
    {
        $parent = \dirname($dir);
        if (!is_dir($parent)) {
            if ($this->dirs($parent) && !is_dir($dir)) {
                mkdir($dir, 0777);
            }
        } else {
            if (!is_dir($dir)) {
                mkdir($dir, 0777);

                return true;
            }
        }
    }
}
