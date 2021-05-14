<?php
class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();

    }

    function Show($a, $b){        
        // gọi db từ model
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3

        // gọi view
        $this->view("Master", [
            "Page"=>"news"
        ]);
    }
}
?>