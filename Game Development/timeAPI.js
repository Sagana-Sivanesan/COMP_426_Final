fetch("https://world-clock.p.rapidapi.com/json/est/now", {
	"method": "GET",
	"headers": {
		"x-rapidapi-key": "71fb11a343msh5a698ae0507f3dcp11e24bjsn2dc4cfa8000f",
		"x-rapidapi-host": "world-clock.p.rapidapi.com"
	}
})
.then(response => response.json())
.then(response => {
	console.log(response);

    document.getElementById('time').innerHTML = response.currentDateTime;
	document.getElementById('day').innerHTML = response.dayOfTheWeek;
	document.getElementById('timeZone').innerHTML = response.timeZoneName;
})
.catch(err => {
	console.error(err);
});