<html>
	<head>
		<title> RESERVATION</title>
	</head>
	<body>
		<h1>RESERVATION</h1>
		<p>Les prix de la reservation est de 10 euros jusqu'a 12 ans 
        et ensuite de 15 euros</p>
		<p>le prix de l'assurance annulation est 20 euros</p>
		<form name="inscription" method="post" action="index.PHP?page=reservation">
            Destination : <select name="pays" id="pays">
           <option value="france">France</option>
           <option value="espagne">Espagne</option>
           <option value="italie">Italie</option>
           <option value="royaume-uni">Royaume-Uni</option>
           <option value="canada">Canada</option>
           <option value="etats-unis">États-Unis</option>
           <option value="chine">Chine</option>
           <option value="japon">Japon</option>
       </select><br/>
            Nombre de place : <input type="text" name="places"/><br/>
			Assurance annulation : <input type="checkbox" name="choix" /><br/>
            <input type="submit" name="valider" value="Etape suivante"/>
			<input type="submit" name="valider" value="Annuler la reservation"/>
        </form>
	</body>
</html>