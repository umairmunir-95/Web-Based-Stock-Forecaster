<?php
ini_set('max_execution_time', 300);
class YahooStock {
    
    private $stocks = array();
	private $format;
	public function addStock($stock)
    {
        $this->stocks[] = $stock;
    }
	public function addFormat($format)
    {
        $this->format = $format;
    }
	public function getQuotes()
    {        
        $result = array();		
		$format = $this->format;
        foreach ($this->stocks as $stock)
        {            
            $s = file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$stock&f=$format&e=.csv");
            $data = explode( ',', $s);
            $result[$stock] = $data;
        }
        return $result;
    }
} 