//task-2
<?php
//fopen() anf fwrite()
$file=fopen("php1.txt","w");
fwrite($file,"welcome to php file");
fclose($file);
echo "file written succesfully <br>";
//fopen() and fread()
$file=fopen("php1.txt","r");
$content=fread($file,filesize("php1.txt"));
fclose($file);
echo "<b>file content:</b><br>$content<br><br>";
//file_get_contents()
echo file_get_contents("php1.txt")."<br><br>";
//file_put_contents()
file_put_contents("sample.txt","this file is created by using file_put_contents");
echo "sample.txt created.<br><br>";
//file()
$lines=file("sample.txt");
echo"<b> using file():</b><br>";
print_r($lines);
echo "<br><hr>";
//file information functions
echo "<h2>2.file information functions</h2>";
echo "file size:".filesize("sample.txt")."bytes <br>";
echo "file type:".filetype("sample.txt")."<br>";
echo "<h2> file and folder management</h2>";
copy("php1.txt","php2.txt");
echo "file copied <br>";
//rename()
rename("php2.txt","php_2.txt");
echo "file renamed<br>";
//is_file()
if (is_file("sample.txt"))
    {
        echo "sample.txt is a file.<br>";
    }
//mkdir()
if(!is_dir("testfolder"))
    {
        mkdir("testfolder");
    }
    echo "folder created.<br>";
//is_dir()
if(is_dir("testfolder"))
    {
        echo "testfolder is a directory.<br>";
    }
//unlink
unlink("php_2.txt");
echo "file deleted.<br>";
//rmdir()
rmdir("testfolder");
echo "testfolder is deleted.<br>";
echo "<h2>directory handling</h2>";
//scandir()
echo "<b>using scandir():</b><br>";
$files=scandir(".");
print_r($files);
echo "<br><br>";
//opendir(),readdir(),closedir()
echo "<b>using opendir(),readdir(),closedir()</b><br>";
$dir=opendir(".");
while(($file=readdir($dir))!==false)
    {
        echo $file."<br>";
    }
closedir($dir);
//getcwd()
/*echo "<br><b>current working directory:</b><br>";
echo gecwd()."<br>";
//chdir()
chdir("..");
echo "<b>after chdir():</b><br>";
echo getcwd();
//flock()
$file=fopen("php1.txt","a");
flock($file,LOCK_EX);
fwrite($file,LOCK_UN);
fclose($file);*/
//task-3 operation modes
//r-read only
echo "<h3>3.file operations</h3>";
$file=fopen("php1.txt","r");
echo "file content: ".fread($file,filesize("php1.txt"));
fclose($file);
//w-write only
$file=fopen("php1.txt","w");
fwrite($file,"this overwrites the data");
fclose($file);
echo "file content:".file_get_contents("php1.txt")."<br>";
//a-append only
$file=fopen("php1.txt","a");
fwrite($file,"this line is appended");
fclose($file);
echo "file content:".file_get_contents("php1.txt")."<br>";
//r+ read and  write
file_put_contents("php1.txt","initial content");
$file=fopen("php1.txt","r+");
fwrite($file,"added via r+ mode");
rewind($file);
echo "file content:".fread($file,filesize("php1.txt"))."<br>";
fclose($file);
//a+
file_put_contents("php1.txt","initial content");
$file=fopen("php1.txt","a+");
fwrite($file,"added via r+ mode");
rewind($file);
echo "file content:".fread($file,filesize("php1.txt"))."<br>";
fclose($file);
?>
