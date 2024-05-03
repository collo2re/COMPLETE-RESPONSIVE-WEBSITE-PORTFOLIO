 <?php
class complete_responsive_website_portfolio{
    private $host = "localhost";
    private $user = "root";
    private $pass = ""; 
    private $db = "Complete Responsive Website Portfolio";
    public $mysqli;
    
    public function __construct() {
        return $this-> mysqli=new mysqli ($this->host, $this->user, $this->pass, $this->db);
    }
    public function contact_me($data) {
        $fullName=$data['fullname'];
        $email=$data['email'];
        $phone=$data['phone'];
        $eSubject=$data['email_Subject'];
        $message=$data['message'];
        $q="insert into contact_me set fullname='$fullName', email='$email', phone='$phone', email_subject='$eSubject', message='$message'";
        return $this->mysqli->query($q);
        }
    }
      ?>  