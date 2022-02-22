<?php


namespace App\classes;


use App\classes\Auth;

class Register
{
    protected $name;
    protected $email;
    protected $phone;
    protected $address;
    protected $value;
    protected $result;
    protected $imageName;
    protected $imageFile;
    protected $imagePath;
    protected $imageDirectory;
    protected $data;
    protected $file;
    protected $filePath;
    protected $array;
    protected $array1;
    protected $array2;

    public function __construct($_file=null, $post=null)
    {
        if ($post)
        {
            $this->name     = $post['name'];
            $this->email    = $post['email'];
            $this->phone    = $post['phone'];
            $this->address  = $post['address'] ;
            $this->value    = $post;
        }
        if($_file){
            $this->imageFile = $_file['image'];
        }
    }

    public function index()
    {
        $this->imagePath = $this->imageUpload();
        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->data = "$this->name, $this->email, $this->phone, $this->address, $this->imagePath$";
        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'Data Saved Successfully';
    }
    protected function imageUpload()
    {
        $this->imageName = time().$this->imageFile['name'];
        $this->imageDirectory = 'assets/img/uploads/'.$this->imageName;
        move_uploaded_file($this->imageFile['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }
    public function getAllStudentInfo()
    {
        $this->filePath = 'db/db.txt';
        $this->data = file_get_contents($this->filePath);
        $this->array = explode('$', $this->data);

        foreach ($this->array as $key=>$value)
        {
            $this->array2 = explode(',', $value);

            if ($this->array2[0])
            {
                $this->array1[$key]['name'] = $this->array2[0];
                $this->array1[$key]['email'] = $this->array2[1];
                $this->array1[$key]['phone'] = $this->array2[2];
                $this->array1[$key]['address'] = $this->array2[3];
                $this->array1[$key]['image'] = $this->array2[4];
            }

        }
        return $this->array1;
    }
}
