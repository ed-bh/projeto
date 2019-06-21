var equacao = function (a,b,c){
if(a == 0 ){
console.log("O valor de a não pode ser zero" );
    }
   var delta = (b * b) - ((4 * a) * c);
   
	if (delta < 0){
			console.log("Não existe Raizes");
		}
	else if (delta == 0){
		x = (-b)/2*a;
		console.log(x);
         }
     else{
		var	raiz1 = ((-b)+ Math.sqrt(delta))/2 * a;
		var	raiz2 = ((-b)- Math.sqrt(delta))/2 * a;
		console.log(x1);
        console.log(x2);
		}
			
}

module.exports = equacao;
