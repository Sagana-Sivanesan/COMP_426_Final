fetch("https://quotes15.p.rapidapi.com/quotes/random/", {
	"method": "GET",
	"headers": {
		"x-rapidapi-key": "71fb11a343msh5a698ae0507f3dcp11e24bjsn2dc4cfa8000f",
		"x-rapidapi-host": "quotes15.p.rapidapi.com"
	}
})
.then(response => response.json())
.then(response => {
	console.log(response);

    document.getElementById('quote').innerHTML = response.content;


})
.catch(err => {
	console.error(err);
});