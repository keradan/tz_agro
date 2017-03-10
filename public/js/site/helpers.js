function getPolygon(coords) {
	return {
		paths: coords,
		strokeColor: '#FF6633',
		strokeOpacity: 0.7,
		strokeWeight: 2,
		fillColor: '#FF6633',
		fillOpacity: 0.3
	};
}

function loadJSON(path, success, error)
{
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function()
    {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (success)
                    success(JSON.parse(xhr.responseText));
            } else {
                if (error)
                    error(xhr);
            }
        }
    };
    xhr.open("GET", path, true);
    xhr.send();
}