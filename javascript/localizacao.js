function getPos(){
    const getPosition = () => {
    return new Promise((resolve, reject) => {
    var onSuccess = (position) => {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        pos = [latitude,longitude];
        resolve(pos)
    }

    const onError = () => {
        console.log('Não foi possível obter as coordenadas.');
        reject();
    }

    navigator.geolocation.getCurrentPosition(onSuccess, onError);
    })
    }

    getPosition().then((position) => {
    console.log(position);
    });
}