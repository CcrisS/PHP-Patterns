<?php



class DisplayData implements IStrategy {

    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $test   = "here is all the data";
        echo $test . "<br>";
    }

}
