<?php



class SearchData implements IStrategy {

    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $test   = $hookup->real_escape_string($_POST['data']);
        echo "Here is what you were looking for " . $test . "<br>";
    }

}
