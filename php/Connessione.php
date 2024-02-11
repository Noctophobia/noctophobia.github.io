<?php
class Connesione{
//Classe per la connessione al database e per la gestione delle query
	
	/*************************************/
	/* DEFINISCI PARAMETRI DI CONNESSIONE*/
	private $host = "mysql.sleepdeprivation-games.com"; 
	private $user = "guestreader"; 
	private $pass = "123456";
	private $db = "sleep_test_db";
	/*************************************/
	
	
	/*************************************/
	/*        Variabili di controllo     */
	private $conn = false;
	//Variabile che mi serve a controllare se sono connesso oppure no
	private $ultimaConn; 
	//Variabile che mi serve a tenere in memoria l'ultima connessione
	/*************************************/
	
	
	public function apri()
	{
	//funzione per aprire la connessione con il database
		if($this->conn)
		{
		//Se sono già connesso
			return ultimaConn;
			//ritorno l'ultima connessione che ho fatto
		}
		else
		{
			$this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db);
			//Connessione al database
			if (mysqli_connect_errno()) 
			{ 
			//se c'è stato un qualche errore
				return false;
				//ritorno falso
			}
			else
			{
				$this->conn = true;
				//Variabile che serve a capire se sono connesso a true
				$this->ultimaConn = $this->mysqli;
				//Setto la mia ultima connessione come quella appena fatta
			}
		}
	}
	
	public function chiudi()
	{
		if(!$this->conn)
		{
		//Se già disconnesso
			return true;
			// esco dalla funzione
		}
		else
		{
			$this->mysqli->close();
			//Chiudo la connessione
		}
	}
	
	public function esegui($query)
	{
		//Eseguo una query
		return $this->mysqli->query($query);
		//Ritorno il risultato della query
	}
	
	public function errore()
	{
		$num_err = $this->mysqli->errno; 
		$msg_err = $this->mysqli->error; 
	   	return ("Erroe numero $num_err : $msg_err");
	}
}

?>