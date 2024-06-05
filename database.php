<?php 

class  database {
    private $koneksi;

    public function koneksi();
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "uprak_rama";

        $this->koneksi = mysqli_connect("$host","$username","$password","$database");

        if ($koneksi->connect_error) {
            die("koneksi gagal: ".$koneksi->connect_error);
        }
    }
       
    }
    public function ambil_data($query)
    {
        $this->koneksi();

        $result = $this->koneksi->query($query);

        $rows[];

        while ($row = $result->fetch_assoc());
        
        $koneksi->close();

    }

