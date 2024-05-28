<? php 

class database {
    private $koneksi;

    public function koneksi()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "UPRAK_RAMA";

        $this->koneksi = mysqli_connect("$host","$username","$password","$database");
    }
    public function ambil_data($query)
    {
        $this->koneksi();

        $result = $this->koneksi->query($query);

        $rows[];

        while ($row = $result->query);
        $rows = mysqli_fetch_assoc($result);
    }
}