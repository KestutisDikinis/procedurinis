(function() {
	// sukuriam kintamaji
	var vardas = 'Jonas, Petras';
	
	//sukuriam funkcija
	function hello (vardas)
	{
		return 'Labas vakaras ' + vardas;
	}
	
	
	// Matematikai naudojam Math objekta.
	
	console.log(2 + 2);
	console.log(2 - 2);
	console.log(2 * 2);
	console.log(2 / 2);
	
	// php explode
	var vardai = vardas.split(', ');
	
	//php implode 
	var vardas2 = vardai.join(', ');
	
	console.log(vardas + "  " + vardas2);
	
	// Masyvai
	
	var masyvas = ['vienas', 'du', 'trys'];
	
	console.log(masyvas);
	
	
	var objektas = {};
	objektas.vardas = 'Petras';
	objektas.pasisveikinti = function()
	{
		return "Labas " + this.vardas;
	}
	
	console.log(objektas);
	
	objektas.pasisveikinti();
	
	
	var zmogus = {
		vardas : "Jonas",
		pavarde : "Jonaitis",
		pasisveikinti: function ()
		{
			return "Labas, mano vardas " + this.vardas; 
		}
	};
	
	zmogus.vardas = 'Stasys';
	
	console.log(zmogus.pasisveikinti());
	
	
	function pasisiveikinti(vardas)
	{
		vardas('Jonas');
	}
	
	pasisiveikinti(function(vardas) {
		console.log('labas, ' + vardas);
	})

// alert(hello(vardas));
}());



	var h1 =  $('h1');
			
			console.log(h1.html());
			
			h1.click(function(e) {
				alert('Bum');
				
				window.location = "http://www.google.com";
			});
			
