<!DOCTYPE html>
<html>
    <head>
        <title>Tampilan Komentar Website</title>
        <link rel = "stylesheet" href = "tampilan_komentar.css">
    </head>

    <!--Section Body-->
    <body onload="log()">
        <?php 
        $pengirim = $_POST["nama"];
        $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "";
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];
        if(empty($pengirim)){
            $pengirim = "-";
        }
        if(empty($jenis_kelamin)){
            $jenis_kelamin = "-";
        }
        if(empty($email)){
            $email = "-";
        }
        if(empty($komentar)){
            $komentar = " ";
        }
        ?>
    
        <div class = "bg-tampilan-komen">
            <div class = "card-tampilan-komen">
                <h2>Komentar Anda</h2>
                <br>
                <table border = "0" cellspacing = "2" cellpadding = "5">
                    <tr>
                        <td class = "spacing">Nama</td>
                        <td>:</td>
                        <td><?php echo "$pengirim";?></td>
                    </tr>
                    <tr>
                        <td class = "spacing">Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo "$jenis_kelamin" ;?></td>
                    </tr>
                    <tr>
                        <td class = "spacing">Email</td>
                        <td>:</td>
                        <td><?php echo "$email";?></td>
                    </tr>
                    <tr>
                        <td class = "spacing">Komentar</td>
                        <td colspan = "2" width = "1px">:</td>
                    </tr>
                    <tr>
                        <td colspan = "3"><div class = "kolom-komen"><?php echo "$komentar";?></div></td>
                    </tr>
                </table>
                <br>
                <a href = "home.html">Back To Home</a>
            </div>
        </div>
        <!--End Body-->
    
        <!--Alert Javascript-->
        <script type = "text/javascript">
            function log(){
                alert("Terima Kasih telah memberikan komentar :)")
            }
        </script>

        <!--FOOTER -->
        <footer>
            <div class = "copyright">
                <p>&copy; 2023 Kelompok 2 Web Programming.</p>
                <p>All rights reserved.</p> 
            </div>
        </footer>
    </body>
</html>