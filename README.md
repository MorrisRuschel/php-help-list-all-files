# php-help-list-all-files
Script responsável por listar todos os arquivos em determinada pasta, desenvolvido em PHP.


Requirements
------------
In order to run this project you will need:

- PHP 5 >= 7
- Git


Quickstart
----------
    $ git clone https://github.com/MorrisRuschel/php-help-list-all-files.git
    $ edit run.php - line 12 - $directory = 'samples/';
    $ run run.php


Response
----------
    array(6) {
      [0]=>
      string(74) "C:\projects\php-help-list-all-files-master\samples\file1.txt"
      [1]=>
      string(74) "C:\projects\php-help-list-all-files-master\samples\file2.txt"
      [2]=>
      string(82) "C:\projects\php-help-list-all-files-master\samples\folder1\file3.txt"
      [3]=>
      string(72) "C:\projects\php-help-list-all-files-master\samples\folder1"
      [4]=>
      string(75) "C:\projects\php-help-list-all-files-master\samples\image1.jpg"
      [5]=>
      string(70) "C:\projects\php-help-list-all-files-master\samples\teste"
    }
